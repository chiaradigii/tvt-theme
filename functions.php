<?php
function tvt_register_menus() {
  register_nav_menus([
    'main-menu' => 'Menú Principal'
  ]);
}
add_action('init', 'tvt_register_menus');
function tvt_enqueue_assets() {
    wp_enqueue_style('tvt-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css', [], null);
  }
  add_action('wp_enqueue_scripts', 'tvt_enqueue_assets');
  