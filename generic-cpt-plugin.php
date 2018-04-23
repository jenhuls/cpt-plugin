<?php
/*
Plugin Name: GENERIC Custom Post Types
Description: Custom Post Types for GENERIC project management theme.
Author: Jen Huls
Author URI: https://jenhuls.com

====== CHANGE 'GENERIC' to site specific name
*/

function generic_register_generic_cpts() {

	/**
	 * Post Type: Name.
	 */

	$labels = array(
		"name" => __( "POST TYPE NAME", "" ),
		"singular_name" => __( "POST TYPE NAME", "" ),
	);

	$args = array(
		"label" => __( "POST TYPE NAME", "" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "post_type_name",
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array( "slug" => "post_type_slug", "with_front" => true ),
		"query_var" => "invoice_query",
		"menu_position" => 5,
		"menu_icon" => "/wp-content/uploads/invoices-dashboard-icon.png",
		"supports" => array( "title" ),
		"taxonomies" => array( "category", "post_tag" ),
	);

	register_post_type( "post_type_name", $args );

add_action( 'init', 'generic_register_generic_cpts' );
