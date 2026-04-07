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
class Register_Testimonials_Post_Type {

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
			'name'                  => __( 'Testimonials', 'idocs-block-theme' ),
			'singular_name'         => __( 'Testimonial', 'idocs-block-theme' ),
			'menu_name'             => __( 'Testimonials', 'idocs-block-theme' ),
			'name_admin_bar'        => __( 'Testimonial', 'idocs-block-theme' ),
			'add_new'               => __( 'Add New', 'idocs-block-theme' ),
			'add_new_item'          => __( 'Add New Testimonial', 'idocs-block-theme' ),
			'new_item'              => __( 'New Testimonial', 'idocs-block-theme' ),
			'edit_item'             => __( 'Edit Testimonial', 'idocs-block-theme' ),
			'view_item'             => __( 'View Testimonial', 'idocs-block-theme' ),
			'all_items'             => __( 'All Testimonials', 'idocs-block-theme' ),
			'search_items'          => __( 'Search Testimonials', 'idocs-block-theme' ),
			'not_found'             => __( 'No testimonials found.', 'idocs-block-theme' ),
			'not_found_in_trash'    => __( 'No testimonials found in Trash.', 'idocs-block-theme' ),
			'filter_items_list'     => __( 'Filter testimonials list', 'idocs-block-theme' ),
			'items_list_navigation' => __( 'Testimonials list navigation', 'idocs-block-theme' ),
			'items_list'            => __( 'Testimonials list', 'idocs-block-theme' ),
		);

		$args = array(
			'labels'             => $labels,
			'public'             => false,
			'publicly_queryable' => false,
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
