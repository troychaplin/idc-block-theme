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
}
