<?php
/**
 * Twenty Fifteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage vns2015
 * @since vns2015 v1.0
 */

class QdT_Fn_Config
{
 public static $query_args = array(
     'id', 'offset', 'product-cat-id', 'query', 'key-word'
 );
}

//force nable menu
// This theme uses wp_nav_menu() in two locations.
//add_theme_support( 'menus' );
/*register_nav_menus( array(
    'main_menu' => 'Main nenu',
    'introduction_layout_menu' => 'Introduction Layout menu'
) );*/

//Register all query var here - DO NOT use $_GET[var_name]
function qd_register_query_vars($vars)
{
 foreach (QdT_Fn_Config::$query_args as $item) {
  $vars[] = $item;
 }

 return $vars;
}

add_filter('query_vars', 'qd_register_query_vars');

//Register rewrite tag

//Register all query var here - DO NOT use $_GET[var_name]
function qd_register_url_rewrite_tag($vars)
{
 foreach (QdT_Fn_Config::$query_args as $item) {
  add_rewrite_tag("%{$item}%", '([^&]+)');
 }
}

add_action('init', 'qd_register_url_rewrite_tag');

require_once('plugin/dashboard/preview.php');

require_once('_helpers/index.php');

show_admin_bar(false);

