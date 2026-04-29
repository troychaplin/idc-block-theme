<?php
/**
 * Register the Testimonial custom post type.
 *
 * @package IDOCS
 */

namespace IDOCS;

/**
 * Registers the `testimonial` post type with WordPress.
 */
class Register_Testimonials {

	/**
	 * Post type slug.
	 *
	 * @var string
	 */
	const POST_TYPE = 'testimonial';

	/**
	 * Initialize the module.
	 */
	public function init(): void {
		add_action( 'init', array( $this, 'register_post_type' ) );
	}

	/**
	 * Register the Testimonial post type.
	 */
	public function register_post_type(): void {
		$labels = array(
			'name'                  => __( 'Testimonials', 'idc-block-theme' ),
			'singular_name'         => __( 'Testimonial', 'idc-block-theme' ),
			'menu_name'             => __( 'Testimonials', 'idc-block-theme' ),
			'name_admin_bar'        => __( 'Testimonial', 'idc-block-theme' ),
			'add_new'               => __( 'Add New', 'idc-block-theme' ),
			'add_new_item'          => __( 'Add New Testimonial', 'idc-block-theme' ),
			'new_item'              => __( 'New Testimonial', 'idc-block-theme' ),
			'edit_item'             => __( 'Edit Testimonial', 'idc-block-theme' ),
			'view_item'             => __( 'View Testimonial', 'idc-block-theme' ),
			'all_items'             => __( 'All Testimonials', 'idc-block-theme' ),
			'search_items'          => __( 'Search Testimonials', 'idc-block-theme' ),
			'not_found'             => __( 'No testimonials found.', 'idc-block-theme' ),
			'not_found_in_trash'    => __( 'No testimonials found in Trash.', 'idc-block-theme' ),
			'filter_items_list'     => __( 'Filter testimonials list', 'idc-block-theme' ),
			'items_list_navigation' => __( 'Testimonials list navigation', 'idc-block-theme' ),
			'items_list'            => __( 'Testimonials list', 'idc-block-theme' ),
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'show_in_rest'       => true,
			'menu_position'      => 25,
			'menu_icon'          => 'dashicons-format-quote',
			'capability_type'    => 'post',
			'has_archive'        => false,
			'hierarchical'       => false,
			'supports'           => array( 'title', 'editor', 'thumbnail', 'revisions' ),
			'rewrite'            => false,
		);

		register_post_type( self::POST_TYPE, $args );
	}
}
