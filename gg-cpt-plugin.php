<?php
/*
Plugin Name: P.M.S. Custom Post Types
Description: Custom Post Types for "P.M.S." project management theme.
Author: Jen Huls
Author URI: https://jenhuls.com
*/

function pms_register_pms_cpts() {

	/**
	 * Post Type: Invoices.
	 */

	$labels = array(
		"name" => __( "Invoices", "" ),
		"singular_name" => __( "Invoice", "" ),
	);

	$args = array(
		"label" => __( "Invoices", "" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "invoice",
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array( "slug" => "invoice", "with_front" => true ),
		"query_var" => "invoice_query",
		"menu_position" => 5,
		"menu_icon" => "http://pms.dev/wp-content/uploads/invoices-dashboard-icon.png",
		"supports" => array( "title" ),
		"taxonomies" => array( "category", "post_tag" ),
	);

	register_post_type( "invoice", $args );

	/**
	 * Post Type: Clients.
	 */

	$labels = array(
		"name" => __( "Clients", "" ),
		"singular_name" => __( "Client", "" ),
	);

	$args = array(
		"label" => __( "Clients", "" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "client",
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array( "slug" => "client", "with_front" => true ),
		"query_var" => "client_query",
		"menu_position" => 5,
		"menu_icon" => "http://pms.dev/wp-content/uploads/client-dashboard-icon.png",
		"supports" => array( "title" ),
		"taxonomies" => array( "category", "post_tag" ),
	);

	register_post_type( "client", $args );

	/**
	 * Post Type: Projects.
	 */

	$labels = array(
		"name" => __( "Projects", "" ),
		"singular_name" => __( "Project", "" ),
	);

	$args = array(
		"label" => __( "Projects", "" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "project",
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array( "slug" => "project", "with_front" => true ),
		"query_var" => "project_query",
		"menu_position" => 5,
		"menu_icon" => "http://pms.dev/wp-content/uploads/project-dashboard-icon.png",
		"supports" => array( "title" ),
		"taxonomies" => array( "category", "post_tag" ),
	);

	register_post_type( "project", $args );

	/**
	 * Post Type: Estimates.
	 */

	$labels = array(
		"name" => __( "Estimates", "" ),
		"singular_name" => __( "Estimate", "" ),
	);

	$args = array(
		"label" => __( "Estimates", "" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "estimate",
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "estimate", "with_front" => true ),
		"query_var" => "estimate_query",
		"menu_position" => 5,
		"menu_icon" => "http://pms.dev/wp-content/uploads/estimate-dashboard-icon.png",
		"supports" => array( "title" ),
		"taxonomies" => array( "category", "post_tag" ),
	);

	register_post_type( "estimate", $args );
}

add_action( 'init', 'pms_register_pms_cpts' );
