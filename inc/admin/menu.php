<?php

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register ZenPress options page under the Settings menu.
 *
 * @return void
 */
add_action('admin_menu', 'zenpress_add_option_page');
function zenpress_add_option_page(): void {
    add_options_page(
        __('ZenPress options', 'zenpress'),
        __('ZenPress', 'zenpress'),
        'manage_options',
        'zenpress',
        'zenpress_options_page'
    );
}

/**
 * Render ZenPress options page content.
 *
 * @return void
 */
function zenpress_options_page(): void {
    $plugin_data = get_file_data(ZENPRESS_PLUGIN_FILE, ['Version' => 'Version'], 'plugin');
    $plugin_version = $plugin_data['Version'] ?? '';
    ?>
    <div class="wrap zenpress-dashboard-wrap">
        <header class="zenpress-header">
            <div class="zenpress-header-title">
                <h1><?php echo esc_html__('ZenPress', 'zenpress'); ?></h1>
                <?php if ($plugin_version) { ?>
                    <p class="zenpress-plugin-version">
                        <?php echo esc_html__('Version', 'zenpress') . ' ' . esc_html($plugin_version) . ' - '; ?>
                        <a href="https://wordpress.org/plugins/zenpress/#developers"
                           target="_blank"
                           rel="noopener noreferrer"
                           aria-label="<?php echo esc_attr__('View ZenPress changelog on WordPress.org (opens in a new tab)', 'zenpress'); ?>">
                            <?php echo esc_html__('What\'s new ?', 'zenpress'); ?>
                        </a>
                    </p>
                <?php } ?>
            </div>
            <div class="zenpress-header-navigation">
                <a href="https://holdmywp.com/zenpress/"
                   target="_blank"
                   rel="noopener noreferrer"
                   aria-label="<?php echo esc_attr__('Read the ZenPress documentation (opens in a new tab)', 'zenpress'); ?>">
                    <?php echo esc_html__('Documentation', 'zenpress'); ?>
                </a>
                <a href="https://wordpress.org/plugins/zenpress/#reviews"
                   target="_blank"
                   rel="noopener noreferrer"
                   aria-label="<?php echo esc_attr__('Leave a review for ZenPress on WordPress.org (opens in a new tab)', 'zenpress'); ?>">
                    <?php echo esc_html__('Leave a review (helps a lot)', 'zenpress'); ?>
                </a>
                <a href="https://buymeacoffee.com/quentinld"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="components-button is-next-40px-default-size is-tertiary"
                   aria-label="<?php echo esc_attr__('Support development: Buy me a coffee (opens in a new tab)', 'zenpress'); ?>">
                    <?php echo esc_html__('Buy me a coffee', 'zenpress'); ?> <span aria-hidden="true">☕</span>
                </a>
            </div>
        </header>
        <main id="zenpress-settings" class="zenpress-settings">
            <div class="zenpress-loading card">
                <div class="zenpress-loading-body">
                    <p class="zenpress-loading-text">
                        <?php echo esc_html__('Loading your ZenPress settings…', 'zenpress'); ?>
                    </p>
                </div>
            </div>
        </main>
        <footer class="zenpress-footer">
            <div class="zenpress-footer-title">
                <p>
                    <?php echo esc_html__('Made ', 'zenpress'); ?>
                    <span aria-hidden="true"> x ❤️ </span>
                    <?php echo esc_html__(' by Quentin Le Duff - Your WordPress Partner', 'zenpress'); ?>
                </p>
            </div>
            <div class="zenpress-footer-navigation">
                <a href="https://holdmywp.com/"
                   target="_blank"
                   rel="noopener noreferrer"
                   aria-label="<?php echo esc_attr__('Visite the developper website', 'zenpress'); ?>">
                    <?php echo esc_html__('My place', 'zenpress'); ?>
                </a>
                <a href="https://github.com/quentin-ld/zenpress"
                   target="_blank"
                   rel="noopener noreferrer"
                   aria-label="<?php echo esc_attr__('Review the code on Github', 'zenpress'); ?>">
                    <?php echo esc_html__('ZenPress code repository', 'zenpress'); ?>
                </a>
            </div>
        </footer>
    </div>
    <?php
}
