<?php

//Disbale Embed
function stopLoaddingEmbed()
{
  if (!is_admin()) {
    wp_deregister_script('wp-embed');
  }
}

add_action('init', 'stopLoaddingEmbed');
remove_action('rest_api_init', 'wp_oembed_register_route');
add_filter('embed_oembed_discover', '__return_false');
remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head, 10, 0');


/*-------------*/

//Include
// require get_template_directory() . '';

/*-------------*/

function addThemeScripts()
{
  $version = '1.0';
  wp_enqueue_style('MainStyle', get_template_directory_uri() . '/assets/css/style.css', array(), $version, 'all');
  wp_enqueue_script('MainScript', get_template_directory_uri() . '/assets/jquery/style.js', array(), $version, true);
  wp_enqueue_style('SwiperCss', get_template_directory_uri() . '/assets/plugin/swiper/swiper.min.css', array(), $version, 'all');
  wp_enqueue_script('SwiperJs', get_template_directory_uri() . '/assets/plugin/swiper/swiper.min.js', array(), $version, true);
  wp_enqueue_style('AosCss', get_template_directory_uri() . '/assets/plugin/AOS/aos.css', array(), $version, 'all');
  wp_enqueue_script('AosJs', get_template_directory_uri() . '/assets/plugin/AOS/aos.js', array(), $version, true);
  wp_enqueue_script('Jquery', get_template_directory_uri() . '/assets/plugin/jQuery/jquery.min.js', array(), $version, true);
}

add_action('wp_enqueue_scripts', 'addThemeScripts');

/*-------------*/


//Get Excerpt Content
function get_excerpt_content($content,$limit = 130){
  $content = preg_replace('/<img[^>]+./','',$content);
  $content = preg_replace("/<h2\s(.+?)>(.+?)<\/h2>/is", "<p>$2</p>", $content);
  $content = preg_replace("/<h3\s(.+?)>(.+?)<\/h3>/is", "<p>$2</p>", $content);
  $excerpt = explode(' ', $content, $limit);
  if (count($excerpt) >= $limit) {
    array_pop($excerpt);
    $excerpt = implode(" ", $excerpt) . '...';
  } else {
    $excerpt = implode(" ", $excerpt);
  }
  $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);

  return $excerpt;
}

//Setup Menu
function menuSetup()
{
  add_theme_support('post-thumbnails');
  register_nav_menus(array(
    'mainmenu' => __('Main menu', 'agiletech'),
    'mobilemenu'  => __('Mobile menu', 'agiletech'),
  ));
}

add_action('after_setup_theme', 'menuSetup');
/*-------------*/

//Theme Options
if (function_exists('acf_add_options_page')) {
  acf_add_options_page(array(
    'page_title' => 'Theme General Settings',
    'menu_title' => 'Theme Settings',
    'menu_slug'  => 'theme-general-settings',
    'capability' => 'edit_posts',
    'redirect'   => false
  ));
}
/*-------------*/

//FaviconAdmin
function faviconAdmin()
{
  echo '<link rel="Shortcut Icon" type="image/x-icon" href="' . get_bloginfo('wpurl') . '/wp-content/favicon.png" />';
}

add_action('admin_head', 'faviconAdmin');