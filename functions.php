<?php

/**
 * Enqueue scripts and styles.
 */
function lanyon_enqueue_scripts() {
  wp_enqueue_style( 'lanyon-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'lanyon_enqueue_scripts' );

/**
 * Implement Theme Customizer additions and adjustments.
 *
 * @since Twenty Fourteen 1.0
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function lanyon_customize_register( $wp_customize ) {
  $wp_customize->add_section( 'lanyon_extended_description', array(
    'title'       => __( 'Extended description', 'lanyon' ),
    'description' => __( 'Add an extended description to be shown in sidebar.', 'lanyon'),
    'priority'    => 100,
  ) );
  $wp_customize->add_setting( 'lanyon_extended_description', array(
  ) );
  $wp_customize->add_control( 'lanyon_extended_description', array(
    'label'   => __( 'Text', 'lanyon' ),
    'section' => 'lanyon_extended_description',
    'type'    => 'text'
  ) );
}
add_action( 'customize_register', 'lanyon_customize_register' );

/**
 * Register menu.
 */
function lanyon_register_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main menu', 'lanyon' ),
    )
  );
}
add_action( 'init', 'lanyon_register_menus' );

/**
 * Method for building custom sidebar navigation.
 */
function lanyon_sidebar_nav() {
  $menu_name = 'main-menu'; // specify custom menu slug

  if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    $menu_items = wp_get_nav_menu_items($menu->term_id);

    $menu_list = '<div class="row">' ."\n";
    foreach ((array) $menu_items as $key => $menu_item) {
      $title = $menu_item->title;
      $url = $menu_item->url;
      $menu_list .= "\t\t\t\t\t". '<a class="sidebar-nav-item" href="'. $url .'">'. $title .'</a>' ."\n";
    }
    $menu_list .= "\t\t\t". '</div>' ."\n";
  } else {
    // $menu_list = '<!-- no list defined -->';
  }
  echo $menu_list;
}

/**
 * Add classes to next posts link.
 */
function lanyon_next_posts_link_attributes() {
    return 'class="pagination-item newer"';
}
add_filter('next_posts_link_attributes', 'lanyon_next_posts_link_attributes');

/**
 * Add classes to previous posts link.
 */
function lanyon_previous_posts_link_attributes() {
    return 'class="pagination-item older"';
}
add_filter('previous_posts_link_attributes', 'lanyon_previous_posts_link_attributes');

/**
 * Remove the EditURI link from the header.
 */
remove_action ('wp_head', 'rsd_link');

/**
 * Remove the wlwmanifest link from the header.
 */
remove_action( 'wp_head', 'wlwmanifest_link');

/**
 * Remove the generator meta content from the header.
 */
remove_action('wp_head', 'wp_generator');
