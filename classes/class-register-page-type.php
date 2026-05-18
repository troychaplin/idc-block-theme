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
class Register_Page_Type {

	/**
	 * Initialize the module.
	 */
	public function init(): void {
		add_action( 'init', array( $this, 'register_page_type_taxonomy' ) );
	}

	/**
	 * Registers a custom taxonomy for page types.
	 *
	 * This function is responsible for creating and registering a taxonomy
	 * that categorizes pages into different types. It is typically used
	 * to organize and manage pages more effectively within the WordPress
	 * admin interface.
	 *
	 * @return void
	 */
	public function register_page_type_taxonomy() {
		$labels = array(
			'name'                       => 'Page Categories',
			'singular_name'              => 'Page Category',
			'menu_name'                  => 'Categories',
			'all_items'                  => 'All Page Categories',
			'parent_item'                => 'Parent Page Category',
			'parent_item_colon'          => 'Parent Page Category:',
			'new_item_name'              => 'New Page Category Name',
			'add_new_item'               => 'Add New Page Category',
			'edit_item'                  => 'Edit Page Category',
			'update_item'                => 'Update Page Category',
			'view_item'                  => 'View Page Category',
			'separate_items_with_commas' => 'Separate page categories with commas',
			'add_or_remove_items'        => 'Add or remove page categories',
			'choose_from_most_used'      => 'Choose from the most used',
			'popular_items'              => 'Popular page categories',
			'search_items'               => 'Search Page Categories',
			'not_found'                  => 'Not Found',
			'no_terms'                   => 'No page categories',
			'items_list'                 => 'Page categories list',
			'items_list_navigation'      => 'Page categories list navigation',
		);

		$rewrite = array(
			'slug'         => 'page-type',
			'with_front'   => true,
			'hierarchical' => false,
		);

		$args = array(
			'labels'            => $labels,
			'hierarchical'      => true,
			'public'            => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => false,
			'show_tagcloud'     => true,
			'rewrite'           => $rewrite,
			'show_in_rest'      => true,
			'default_term'      => array(
				'name'        => 'General',
				'slug'        => 'general',
				'description' => 'Default term for pages',
			),
		);

		register_taxonomy( 'idc_page_type', array( 'page' ), $args );
	}
}
