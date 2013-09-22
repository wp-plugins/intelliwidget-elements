<?php
/**
 * @package IntelliWidget_Elements
 * @version 1.0.0
 */
/*
Plugin Name: IntelliWidget Elements Post Type
Plugin URI: http://www.lilaeamedia.com/plugins/intelliwidget-elements
Description: Adds generic non-searchable post type to be used for content areas
Author: Lilaea Media
Version: 1.0.0
Author URI: http://www.lilaeamedia.com
*/

if ( !defined('ABSPATH')) exit;

/* Add non-searchable content elements.
 * Use with IntelliWidget for maximum flexibility
 * http://www.lilaeamedia.com/plugins/intelliwidget
 */
function intelliwidget_register_elements() {
    register_post_type( 'element',
        array(
            'labels' => array(
                'name'    => __('Elements',     'tiberius'),
                'singular_name'   => __('Element',      'tiberius'),
                'add_new_item'    => __('Add Element',  'tiberius'),
                'edit_item'       => __('Edit Element', 'tiberius'),
                'new_item'    => __('New Element',  'tiberius'),
                'view_item'       => __('View Element', 'tiberius'),
            ),
            'public'      => true,
            'has_archive'     => false,
            'exclude_from_search' => true,
            'publicly_queryable'  => false,
            'show_ui'     => true,
            'show_in_nav_menus'   => false,
            'supports'    => array (
                'title',
                'editor',
                'thumbnail',
                'excerpt',
                'page-attributes',
                'custom-fields',
            ),
        )
    );
}

add_action('init', 'intelliwidget_register_elements');
?>
