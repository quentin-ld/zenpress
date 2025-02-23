<?php

/*
Snippet Name: Disable WLW Manifest
Version: 1.0.0
Tag(s): Performance
Description:
*/

if (!defined('ABSPATH')) die();

remove_action ( 'wp_head', 'wlwmanifest_link' );
