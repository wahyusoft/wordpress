<?php
/*
Plugin Name: Digg This
Plugin URI: http://www.tipsfor.us/
Description: Plugin tombol "Digg This" digunakan untuk menambah link pada konten. 
Author: Everett Griffiths
Version: 0.1
Author URI: http://www.tipsfor.us/
*/
// include() or require() any necessary files here...
// Settings and/or Configuration Details go here...
// Tie into WordPress Hooks and any functions that should run on load.
// "Private" internal functions named with a leading underscore
function _diggthis_get_post_description() { }
function _diggthis_get_post_media_type() { }
function _diggthis_get_post_title() { }
function _diggthis_get_post_topic() { }
function _diggthis_get_post_url() { }
// The "Public" functions
function diggthis_add_js_to_doc_head() { }
function diggthis_check_wordpress_version() { }

add_filter('the_content', 'diggthis_get_button');

// [ . . . ]
/**
* Adds a "Digg This" link to the post content.
*
* @param string $content the existing post content
* @return string appends a DiggThis link to the incoming $content.
*/

function diggthis_get_button($content) { 
    return $content . '<a class="DiggThisButton DiggMedium"></a>';
}
/* EOF */
