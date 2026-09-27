<?php
/**
 * Cache integrations: admin bar "Clear caches", autoconfig REST routes, hide third-party admin bar buttons.
 *
 * @package zenpress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Orchestrates cache integrations (Autoptimize, Cache Enabler, SQLite Object Cache).
 */
final class ZenPress_Integrations {
	/**
	 * Integration class names. Each must implement is_active(); optional: disable_admin_bar_button().
	 *
	 * @var array<class-string>
	 */
	private static array $integrations = array(
		ZenPress_Autoptimize::class,
		ZenPress_Cache_Enabler::class,
		ZenPress_Sqlite_Object_Cache::class,
	);

	/**
	 * Admin bar "Clear caches" button enabled.
	 */
	public static function is_admin_bar_enabled(): bool {
		return (bool) get_option( 'zenpress_admin_bar_enabled', false );
	}

	/**
	 * At least one cache integration is active.
	 */
	public static function has_active_integration(): bool {
		foreach ( self::get_integrations() as $class ) {
			if ( method_exists( $class, 'is_active' ) && $class::is_active() ) {
				return true;
			}
		}

		return false;
	}

	/**
	 * Integration slug => active for settings UI.
	 *
	 * @return array<string, bool>
	 */
	public static function get_active_integrations_for_ui(): array {
		$result = array();
		foreach ( self::get_integrations() as $class ) {
			try {
				$short_name      = ( new \ReflectionClass( $class ) )->getShortName();
				$slug            = strtolower( str_replace( 'ZenPress_', '', $short_name ) );
				$result[ $slug ] = method_exists( $class, 'is_active' ) && $class::is_active();
			} catch ( \Throwable $e ) {
				continue;
			}
		}

		return $result;
	}

	/** Transient key prefix for cache-cleared notice (append user ID). */
	private const CACHE_CLEARED_NOTICE_TRANSIENT = 'zenpress_cache_cleared_notice_';

	/**
	 * Registers admin bar menu, AJAX and REST handlers, and integration hooks.
	 */
	public static function register(): void {
		add_action( 'init', array( self::class, 'remove_integration_admin_bar_buttons' ), 1 );
		add_action( 'admin_bar_menu', array( self::class, 'add_admin_bar_menu' ), 100 );
		add_action( 'wp_ajax_zenpress_clear_caches', array( self::class, 'ajax_clear_caches' ) );
		add_action( 'rest_api_init', array( self::class, 'register_rest_routes' ) );
		add_action( 'admin_notices', array( self::class, 'show_cache_cleared_notice' ) );
	}

	/**
	 * Registers POST routes for one-click autoconfig per integration.
	 */
	public static function register_rest_routes(): void {
		$permission = static function (): bool {
			return current_user_can( 'manage_options' );
		};

		register_rest_route(
			'zenpress/v1',
			'autoconfig/autoptimize',
			array(
				'methods'             => 'POST',
				'callback'            => array( self::class, 'rest_autoconfig_autoptimize' ),
				'permission_callback' => $permission,
			)
		);
		register_rest_route(
			'zenpress/v1',
			'autoconfig/cache-enabler',
			array(
				'methods'             => 'POST',
				'callback'            => array( self::class, 'rest_autoconfig_cache_enabler' ),
				'permission_callback' => $permission,
			)
		);
		register_rest_route(
			'zenpress/v1',
			'autoconfig/sqlite-object-cache',
			array(
				'methods'             => 'POST',
				'callback'            => array( self::class, 'rest_autoconfig_sqlite_object_cache' ),
				'permission_callback' => $permission,
			)
		);
	}

	/**
	 * Runs autoconfig callable and returns REST response (200 or 500).
	 *
	 * @param callable(): void $runner          Runs the integration's autoconfig.
	 * @param string           $success_message Message returned to the client on success.
	 * @param string           $error_message   Message returned to the client on failure.
	 */
	private static function run_rest_autoconfig( callable $runner, string $success_message, string $error_message ): WP_REST_Response {
		try {
			$runner();
		} catch ( \Throwable $e ) {
			return new WP_REST_Response(
				array(
					'success' => false,
					'message' => $error_message,
				),
				500
			);
		}

		return new WP_REST_Response(
			array(
				'success' => true,
				'message' => $success_message,
			),
			200
		);
	}

	/**
	 * Configures Autoptimize through the one-click REST route.
	 *
	 * The route passes the request; it is not declared here because it is not
	 * read, and PHP ignores an extra argument.
	 */
	public static function rest_autoconfig_autoptimize(): WP_REST_Response {
		return self::run_rest_autoconfig(
			array( ZenPress_Autoptimize::class, 'autoconfig' ),
			__( 'Autoptimize configured.', 'zenpress' ),
			__( 'Autoptimize configuration failed.', 'zenpress' )
		);
	}

	/**
	 * Configures Cache Enabler through the one-click REST route.
	 */
	public static function rest_autoconfig_cache_enabler(): WP_REST_Response {
		return self::run_rest_autoconfig(
			array( ZenPress_Cache_Enabler::class, 'autoconfig' ),
			__( 'Cache Enabler configured.', 'zenpress' ),
			__( 'Cache Enabler configuration failed.', 'zenpress' )
		);
	}

	/**
	 * Configures SQLite Object Cache through the one-click REST route.
	 */
	public static function rest_autoconfig_sqlite_object_cache(): WP_REST_Response {
		return self::run_rest_autoconfig(
			array( ZenPress_Sqlite_Object_Cache::class, 'autoconfig' ),
			__( 'SQLite Object Cache configured.', 'zenpress' ),
			__( 'SQLite Object Cache configuration failed.', 'zenpress' )
		);
	}

	/**
	 * The integration classes ZenPress knows how to talk to.
	 *
	 * @return array<class-string> Integration class names.
	 */
	public static function get_integrations(): array {
		return self::$integrations;
	}

	/**
	 * Hides third-party admin bar cache buttons when ZenPress admin bar is enabled.
	 */
	public static function remove_integration_admin_bar_buttons(): void {
		if ( ! self::is_admin_bar_enabled() || ! self::has_active_integration() ) {
			return;
		}
		foreach ( self::get_integrations() as $class ) {
			if ( ! method_exists( $class, 'is_active' ) || ! $class::is_active() ) {
				continue;
			}
			if ( method_exists( $class, 'disable_admin_bar_button' ) ) {
				$class::disable_admin_bar_button();
			}
		}
	}

	/**
	 * Adds "Clear all caches" and per-integration sub-items to the admin bar.
	 *
	 * @param WP_Admin_Bar $wp_admin_bar The admin bar being built.
	 */
	public static function add_admin_bar_menu( WP_Admin_Bar $wp_admin_bar ): void {
		if ( ! self::is_admin_bar_enabled() || ! self::has_active_integration() ) {
			return;
		}
		if ( ! current_user_can( 'manage_options' ) || ! is_admin_bar_showing() ) {
			return;
		}

		$base_url = add_query_arg( 'action', 'zenpress_clear_caches', admin_url( 'admin-ajax.php' ) );

		$wp_admin_bar->add_node(
			array(
				'id'     => 'zenpress',
				'parent' => 'top-secondary',
				'title'  => '<span style="margin-top: 2px;" class="ab-icon dashicons dashicons-trash" aria-hidden="true"></span><span class="ab-label">' . esc_html__( 'Clear all caches', 'zenpress' ) . '</span>',
				'href'   => wp_nonce_url( add_query_arg( 'clear', 'all', $base_url ), 'zenpress_clear_caches' ),
				'meta'   => array(
					'title' => __( 'Clear page cache, static assets cache, and object cache.', 'zenpress' ),
				),
			)
		);

		if ( ZenPress_Cache_Enabler::is_active() ) {
			$wp_admin_bar->add_node(
				array(
					'id'     => 'zenpress-clear-cache-enabler',
					'parent' => 'zenpress',
					'title'  => __( 'Clear page cache', 'zenpress' ),
					'href'   => wp_nonce_url( add_query_arg( 'clear', 'cache_enabler', $base_url ), 'zenpress_clear_caches' ),
					'meta'   => array(
						'title' => __( 'Clear Cache Enabler page cache.', 'zenpress' ),
					),
				)
			);
		}

		if ( ZenPress_Autoptimize::is_active() ) {
			$wp_admin_bar->add_node(
				array(
					'id'     => 'zenpress-clear-autoptimize',
					'parent' => 'zenpress',
					'title'  => __( 'Clear static assets cache (CSS/JS)', 'zenpress' ),
					'href'   => wp_nonce_url( add_query_arg( 'clear', 'autoptimize', $base_url ), 'zenpress_clear_caches' ),
					'meta'   => array(
						'title' => __( 'Clear Autoptimize CSS/JS cache.', 'zenpress' ),
					),
				)
			);
		}

		if ( ZenPress_Sqlite_Object_Cache::is_active() ) {
			$wp_admin_bar->add_node(
				array(
					'id'     => 'zenpress-clear-sqlite-object-cache',
					'parent' => 'zenpress',
					'title'  => __( 'Clear object cache', 'zenpress' ),
					'href'   => wp_nonce_url( add_query_arg( 'clear', 'sqlite_object_cache', $base_url ), 'zenpress_clear_caches' ),
					'meta'   => array(
						'title' => __( 'Clear SQLite Object Cache.', 'zenpress' ),
					),
				)
			);
		}
	}

	/**
	 * AJAX 'clear' slug => integration class.
	 *
	 * @var array<string, string>
	 */
	private static array $clear_slug_to_class = array(
		'cache_enabler'       => ZenPress_Cache_Enabler::class,
		'autoptimize'         => ZenPress_Autoptimize::class,
		'sqlite_object_cache' => ZenPress_Sqlite_Object_Cache::class,
	);

	/**
	 * Builds "Type (Managed by Plugin) has been cleared successfully." for a single slug.
	 *
	 * @param string $slug Key from $clear_slug_to_class.
	 */
	private static function get_single_cleared_message( string $slug ): string {
		/* translators: 1: cache type (e.g. Page cache), 2: plugin name (e.g. Cache Enabler) */
		$format = __( '%1$s (managed by %2$s) cleared successfully.', 'zenpress' );
		switch ( $slug ) {
			case 'cache_enabler':
				return sprintf( $format, __( 'Page cache', 'zenpress' ), __( 'Cache Enabler', 'zenpress' ) );
			case 'autoptimize':
				return sprintf( $format, __( 'Static assets cache', 'zenpress' ), __( 'Autoptimize', 'zenpress' ) );
			case 'sqlite_object_cache':
				return sprintf( $format, __( 'Object cache', 'zenpress' ), __( 'SQLite Object Cache', 'zenpress' ) );
			default:
				return __( 'Cache cleared.', 'zenpress' );
		}
	}

	/**
	 * Returns translated cache type label for a slug (literal strings only for i18n).
	 *
	 * @param string $slug Key from $clear_slug_to_class.
	 */
	private static function get_cache_type_label( string $slug ): string {
		switch ( $slug ) {
			case 'cache_enabler':
				return __( 'Page cache', 'zenpress' );
			case 'autoptimize':
				return __( 'Static assets cache', 'zenpress' );
			case 'sqlite_object_cache':
				return __( 'Object cache', 'zenpress' );
			default:
				return '';
		}
	}

	/**
	 * Builds "Type A, Type B and Type C have been cleared successfully." for all active integrations (types only).
	 */
	private static function get_all_cleared_message(): string {
		$types = array();
		foreach ( array_keys( self::$clear_slug_to_class ) as $slug ) {
			$class = self::$clear_slug_to_class[ $slug ];
			if ( ! method_exists( $class, 'is_active' ) || ! $class::is_active() ) {
				continue;
			}
			$type_label = self::get_cache_type_label( $slug );
			if ( '' !== $type_label ) {
				$types[] = $type_label;
			}
		}
		if ( count( $types ) === 0 ) {
			return __( 'Caches cleared.', 'zenpress' );
		}
		if ( count( $types ) === 1 ) {
			return sprintf(
				/* translators: %s: cache type (e.g. Page cache) */
				__( '%s cleared successfully.', 'zenpress' ),
				$types[0]
			);
		}
		$last = array_pop( $types );
		$list = implode( ', ', $types ) . ' ' . __( 'and', 'zenpress' ) . ' ' . $last;

		return sprintf(
			/* translators: %s: comma-separated list of cache types */
			__( '%s cleared successfully.', 'zenpress' ),
			$list
		);
	}

	/**
	 * Outputs a success admin notice after cache clear redirect, then deletes the transient.
	 */
	public static function show_cache_cleared_notice(): void {
		$user_id = get_current_user_id();
		if ( 0 === $user_id ) {
			return;
		}
		$key     = self::CACHE_CLEARED_NOTICE_TRANSIENT . $user_id;
		$message = get_transient( $key );
		if ( ! is_string( $message ) || '' === $message ) {
			return;
		}
		delete_transient( $key );
		echo '<div class="notice notice-success is-dismissible"><p>' . esc_html( $message ) . '</p></div>';
	}

	/**
	 * Verifies nonce/capability, clears caches (all or one integration), redirects or returns JSON.
	 */
	public static function ajax_clear_caches(): void {
		if ( ! current_user_can( 'manage_options' ) ) {
			wp_die( esc_html__( 'You don\'t have permission to do that.', 'zenpress' ), '', array( 'response' => 403 ) );
		}
		$nonce = isset( $_REQUEST['_wpnonce'] ) ? sanitize_text_field( wp_unslash( (string) $_REQUEST['_wpnonce'] ) ) : '';
		if ( false === wp_verify_nonce( $nonce, 'zenpress_clear_caches' ) ) {
			wp_die( esc_html__( 'You don\'t have permission to do that.', 'zenpress' ), '', array( 'response' => 403 ) );
		}

		$clear = isset( $_REQUEST['clear'] ) ? sanitize_text_field( wp_unslash( (string) $_REQUEST['clear'] ) ) : 'all';
		if ( 'all' === $clear || '' === $clear ) {
			try {
				do_action( 'zenpress_caches_clear' );
			} catch ( \Throwable $e ) {
				wp_die( esc_html__( 'Clearing cache failed. Try again.', 'zenpress' ), '', array( 'response' => 500 ) );
			}
			$message = self::get_all_cleared_message();
		} elseif ( isset( self::$clear_slug_to_class[ $clear ] ) ) {
			$class = self::$clear_slug_to_class[ $clear ];
			try {
				if ( method_exists( $class, 'clear_cache' ) ) {
					$class::clear_cache();
				}
			} catch ( \Throwable $e ) {
				wp_die( esc_html__( 'Clearing cache failed. Try again.', 'zenpress' ), '', array( 'response' => 500 ) );
			}
			$message = self::get_single_cleared_message( $clear );
		} else {
			wp_die( esc_html__( 'Invalid request. Please refresh and try again.', 'zenpress' ), '', array( 'response' => 400 ) );
		}

		$xhr_header = isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) && is_string( $_SERVER['HTTP_X_REQUESTED_WITH'] )
			? sanitize_text_field( wp_unslash( $_SERVER['HTTP_X_REQUESTED_WITH'] ) )
			: '';
		$is_xhr     = 'XMLHttpRequest' === $xhr_header;
		if ( ! $is_xhr ) {
			set_transient( self::CACHE_CLEARED_NOTICE_TRANSIENT . get_current_user_id(), $message, 45 );
			$referer = wp_get_referer();
			wp_safe_redirect( is_string( $referer ) && '' !== $referer ? $referer : admin_url() );
			exit;
		}

		wp_send_json_success( array( 'message' => $message ) );
	}
}

ZenPress_Integrations::register();
