<?php 

/*
Plugin Name: SHD Plugin Challenge
Plugin URI:  http://link to your plugin homepage
Description: This plugin was built to complete a code challenge.
Version:     1.0
Author:      Tyler Hueter
Author URI:  https://github.com/ethueter/SHD-Plugin-Challenge
License:     GPL2 etc
License URI: https://link to your plugin license

Copyright 2020 SHD Plugin Challenge (email : tylerhueter08@gmail.com)
SHD Plugin Challenge is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
SHD Plugin Challenge is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with SHD Plugin Challenge. If not, see (http://link to your plugin license).
*/

function shdpc_custom_post_type() {

    $labels = array(
        'name'              => _x( 'Players', 'Post Type General Name' ),
        'singular_name'     => _x( 'Player', 'Post Type Singular Name' ),
        'menu_name'         => __( 'Players' ),
        'parent_item_colon' => __( 'Parent Player' ),
        'all_items'         => __( 'All Players' ),
        'view_item'         => __( 'View Player' ),
        'add_new_item'      => __( 'Add New Player' ),
        'add_new'           => __( 'Add New' ),
        'edit_item'         => __( 'Edit Player' ),
        'update_item'       => __( 'Update Player' ),
        'search_items'      => __( 'Search Player' ),
        'not_found'         => __( 'Not Found' ),
        'not_found_in_trash'=> __( 'Not Found in Trash' ),

    );

    $args = array(
        'label'             => __( 'players' ),
        'labels'            => $labels,
        'description'       => __( 'Player info and stats' ),
        'public'            => true,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position'     => 4,
        'can_export'        => true,
        'has_archive'       => true,
        'exclude_from_search'=> false,
        'publicly_queryable'=> true,
        'cabability_type'   => 'page',
    );

    register_post_type( 'players', $args );
}

add_action('init', 'shdpc_custom_post_type');

function shdpc_shortcode() {
    
    $url = 'http://bot.whatismyipaddress.com/';

    $request = wp_remote_get( $url );
    $public_ip = wp_remote_retrieve_body( $request );

    return $body;
}

add_shortcode('testing', 'shdpc_shortcode');





?>