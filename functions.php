<?php
/**
 * Off-Piste functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link https://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Off_Piste
 * @since Off_Piste 1.0
 */

// Register my primary navigation menu
function register_my_menu() {
  register_nav_menu('primarynav-menu',__( 'Primary Navigation Menu' ));
}
add_action( 'init', 'register_my_menu' );

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
  return '<a class="moretag" href="'. get_permalink($post->ID) . '">... [read more]</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
