<?php
/**
 * Snippet: protect wp login.
 *
 * @package zenpress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_filter(
	'login_errors',
	static function (): string {
		return __( 'Something went wrong. Try again.', 'zenpress' );
	}
);

// `authenticate` passes ( $user, $username, $password ). This callback only
// reads `$user`, so it declares one parameter and registers one accepted
// argument rather than naming two it never looks at.
add_filter(
	'authenticate',
	static function ( mixed $user ): mixed {
		$ip_address = filter_var(
			wp_unslash( $_SERVER['REMOTE_ADDR'] ?? '' ),
			FILTER_VALIDATE_IP
		);
		if ( false === $ip_address ) {
			return $user;
		}

		$max_login_attempts = 5;
		$block_duration     = 300; // Five minutes.
		$block_key          = 'zenpress_login_block_' . $ip_address;
		$attempt_key        = 'zenpress_login_attempts_' . $ip_address;

		// A successful login clears the attempts.
		if ( $user instanceof WP_User ) {
			delete_transient( $block_key );
			delete_transient( $attempt_key );

			return $user;
		}

		// Refuse early if this address is already blocked.
		if ( (bool) get_transient( $block_key ) ) {
			wp_die(
				esc_html__( 'Too many failed attempts. Try again in a few minutes.', 'zenpress' ),
				'',
				array( 'response' => 403 )
			);
		}

		// Track the failed attempt.
		$attempts_data = get_transient( $attempt_key );
		$attempts      = $attempts_data['count'] ?? 0;
		$attempts++;

		if ( $attempts > $max_login_attempts ) {
			set_transient( $block_key, true, $block_duration );
			wp_die(
				esc_html__( 'Too many failed attempts. Try again in a few minutes.', 'zenpress' ),
				'',
				array( 'response' => 403 )
			);
		}

		set_transient( $attempt_key, array( 'count' => $attempts ), $block_duration );

		return $user;
	},
	30,
	1
);
