<?php
/**
 *
 * @package clutterless
 * @since clutterless 1.8
 * @license GPL 2.0
 * 
 */

// -------------------------------------------------------------
// WordPress Clean-up
// -------------------------------------------------------------

function clutterless_head_cleanup(){

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Disable comments feed
    add_filter( 'feed_links_show_comments_feed', '__return_false' ); 

    // Remove Smileys embedded in head
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );

    // Remove Smileys embedded in head
    remove_action( 'wp_print_styles', 'print_emoji_styles' );   

    // Remove p tags from category description
    remove_filter('term_description','wpautop');  

}

add_action( 'after_setup_theme', 'clutterless_head_cleanup' );