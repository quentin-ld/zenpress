<?php

/*
Snippet Name: Disable PDF Thumbnails
Version: 1.0.0
Tag(s): Performance
Description:
*/

add_filter(
	'fallback_intermediate_image_sizes',
	function () {
		return array();
	}
);
