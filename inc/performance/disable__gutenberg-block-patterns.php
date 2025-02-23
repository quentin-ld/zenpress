<?php

/*
Snippet Name: Disable unwanted default block patterns
Version: 1.0.0
Tag(s): Performance
Description:
*/

add_filter('should_load_remote_block_patterns', '__return_false');

add_action( 'after_setup_theme', 'ripperdoc_removecoreblockpatterns' );
function ripperdoc_removecoreblockpatterns() {
	remove_theme_support('core-block-patterns');
}
