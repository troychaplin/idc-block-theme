<?php
/**
 * Block-related filters and functions.
 *
 * @package IDOCS
 */

namespace IDOCS;

/**
 * Class Block_Functions
 */
class Block_Functions {

	/**
	 * Initialize the module.
	 */
	public function init(): void {
		add_filter( 'query_loop_block_query_vars', array( $this, 'filter_related_posts_query' ), 10, 2 );
		add_action( 'init', array( $this, 'register_pattern_categories' ) );
	}

    /**
    * Filter query vars for related posts block.
    *
    * @param array $query  The query vars.
    * @param WP_Block_Template $block The block instance.
    * @return array Modified query vars.
    */
    public function filter_related_posts_query( $query, $block ) {
        $classes = $block->attributes['className'] ?? '';

        if ( ! str_contains( $classes, 'is-recent-posts' ) ) {
            return $query;
        }

        if ( is_singular() ) {
            $query['post__not_in'] = array_merge(
                $query['post__not_in'] ?? [],
                [ get_the_ID() ]
            );
        }

        return $query;
    }

	/**
	 * Register a custom block pattern category for the theme.
	 */
	public function register_pattern_categories(): void {
        register_block_pattern_category(
            'idocs-sections-en',
            array( 'label' => __( 'IDC Sections (EN)', 'idc-block-theme' ) )
        );
        register_block_pattern_category(
            'idocs-sections-fr',
            array( 'label' => __( 'IDC Sections (FR)', 'idc-block-theme' ) )
        );
        register_block_pattern_category(
            'idocs-headings-en',
            array( 'label' => __( 'IDC Headings (EN)', 'idc-block-theme' ) )
        );
        register_block_pattern_category(
            'idocs-headings-fr',
            array( 'label' => __( 'IDC Headings (FR)', 'idc-block-theme' ) )
        );
		register_block_pattern_category(
            'idocs-layouts-en',
			array( 'label' => __( 'IDC Layouts (EN)', 'idc-block-theme' ) )
        );
		register_block_pattern_category(
            'idocs-layouts-fr',
			array( 'label' => __( 'IDC Layouts (FR)', 'idc-block-theme' ) )
        );
        register_block_pattern_category(
            'idocs-footers',
            array( 'label' => __( 'IDC Footers', 'idc-block-theme' ) )
        );
    }
}
