<?php 
/*
Plugin Name: CustomPostTypeTemplate
Plugin URI: http://shumpeikishi.com/
Description: This plugin creates custom post type in WordPress backend.
Author: Shumpei Kishi 
Version: 0.0
Author URI: http://shumpeikishi.com
License: CC0
*/
class CustomPostTypes {
	function __construct () {
		add_action('init', array($this, 'create_post_types'));
	}
	function create_post_types () {
		register_post_type ('products',
			array(
				'labels' => array(
					'name' => __( 'Products' ),
					'singular_name' => __( 'products' )
					),
				'public' => true,
				'has_archive' => true,
				'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'), // Enabling thumbnail requires add_theme_support('post_thumbnails') to current theme;
				'taxonomies' => array('category')
				));

		register_post_type ('services',
			array(
				'labels' => array(
					'name' => __( 'Services' ),
					'singular_name' => __( 'services' )
					),
				'public' => true,
				'has_archive' => true,
				'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'), // Enabling thumbnail requires add_theme_support('post_thumbnails') to current theme;
				));
		register_post_type ('gallery',
			array(
				'labels' => array(
					'name' => __( 'Gallery Images' ),
					'singular_name' => __( 'gallery Image' )
					),
				'public' => true,
				'has_archive' => true,
				'supports' => array('title', 'editor', 'thumbnail'), // Enabling thumbnail requires add_theme_support('post_thumbnails') to current theme;
				));

	}
}
$customPostTypes = new CustomPostTypes(); ?>