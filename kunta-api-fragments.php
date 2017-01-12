<?php
/*
 * Created on Jan 12, 2017
 * Plugin Name: Kunta API Fragments
 * Description: Kunta API Fragments plugin for Wordpress
 * Version: 0.1
 * Author: Antti Leppä / Metatavu Oy
 */
defined ( 'ABSPATH' ) || die ( 'No script kiddies please!' );

require_once ('constants.php');

add_action ('init', function () {
  register_post_type ( 'fragment', [
    'labels' => [
      'name'               => __( 'Fragments', KUNTA_API_FRAGMENTS_I18N_DOMAIN ),
      'singular_name'      => __( 'Fragment', KUNTA_API_FRAGMENTS_I18N_DOMAIN ),
      'add_new'            => __( 'Add Fragment', KUNTA_API_FRAGMENTS_I18N_DOMAIN ),
      'add_new_item'       => __( 'Add New Fragment', KUNTA_API_FRAGMENTS_I18N_DOMAIN ),
      'edit_item'          => __( 'Edit Fragment', KUNTA_API_FRAGMENTS_I18N_DOMAIN ),
      'new_item'           => __( 'New Fragment', KUNTA_API_FRAGMENTS_I18N_DOMAIN ),
      'view_item'          => __( 'View Fragment', KUNTA_API_FRAGMENTS_I18N_DOMAIN ),
      'search_items'       => __( 'Search Fragments', KUNTA_API_FRAGMENTS_I18N_DOMAIN ),
      'not_found'          => __( 'No Fragments found', KUNTA_API_FRAGMENTS_I18N_DOMAIN ),
      'not_found_in_trash' => __( 'No Fragments in trash', KUNTA_API_FRAGMENTS_I18N_DOMAIN ),
      'menu_name'          => __( 'Fragments', KUNTA_API_FRAGMENTS_I18N_DOMAIN ),
      'all_items'          => __( 'Fragments', KUNTA_API_FRAGMENTS_I18N_DOMAIN )
    ],
    'public' => true,
    'has_archive' => true,
    'show_in_rest' => true,
    'supports' => [
      'title',
      'editor'
    ]
  ]);
});

add_action ('plugins_loaded', function () {
  load_plugin_textdomain(KUNTA_API_FRAGMENTS_I18N_DOMAIN);
});

?>