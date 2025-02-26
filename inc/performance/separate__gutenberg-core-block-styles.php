<?php

/*
Snippet Name: Separate Core Block Styles
Version: 1.0.0
Tag(s): Performance
Description:
*/
if (!defined('ABSPATH')) die();

add_filter('should_load_separate_core_block_assets', '__return_true');
