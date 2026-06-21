<?php
/**
 * Testimonials block.
 *
 * Registers a PHP-only dynamic block that queries the testimonial CPT,
 * shuffles the results, and renders up to 3 testimonial cards. The
 * render_callback runs on every frontend request so the shuffle produces
 * a fresh random order each page view.
 *
 * @package IDOCS
 */

namespace IDOCS;

/**
 * Class Testimonials_Block
 */
class Testimonials_Block {

	/**
	 * Initialize the module.
	 */
	public function init(): void {
		add_action( 'init', array( $this, 'register' ) );
	}

	/**
	 * Register the dynamic block.
	 */
	public function register(): void {
		register_block_type(
			'idc/testimonials',
			array(
				'title'           => __( 'Testimonials', 'idc-block-theme' ),
				'render_callback' => array( $this, 'render' ),
				'supports'        => array( 'autoRegister' => true ),
			)
		);
	}

	/**
	 * Render the testimonial card grid.
	 *
	 * Queries all published testimonials, shuffles in PHP (bypassing any
	 * SQL/object cache), slices to 3, then builds the card HTML. Post
	 * properties are accessed directly so no global $post / setup_postdata
	 * is required.
	 *
	 * @return string Block HTML.
	 */
	public function render(): string {
		$query = new \WP_Query(
			array(
				'post_type'      => 'testimonial',
				'posts_per_page' => -1,
				'post_status'    => 'publish',
				'no_found_rows'  => true,
			)
		);

		$posts = $query->posts;

		if ( empty( $posts ) ) {
			return '';
		}

		shuffle( $posts );
		$posts = array_slice( $posts, 0, 3 );

		$output = '<div class="wp-block-group alignwide is-testimonial-grid">';

		foreach ( $posts as $index => $post ) {
			$word_count = 1 === $index ? 40 : 20;
			$excerpt    = '<p>' . wp_trim_words( wp_strip_all_tags( $post->post_content ), $word_count, '&hellip;' ) . '</p>';
			$name      = esc_html( $post->post_title );
			$image_id  = get_post_thumbnail_id( $post->ID );
			$image_url = esc_url( get_the_post_thumbnail_url( $post->ID, 'thumbnail' ) );
			$image_alt = esc_attr( get_post_meta( $image_id, '_wp_attachment_image_alt', true ) );

			$output .= '<article class="wp-block-group is-card is-card--testimonial has-global-padding is-layout-constrained wp-block-group-is-layout-constrained">';
            $output .= wp_kses_post( $excerpt );
			
            $output .= '<div class="wp-block-group alignfull is-card__footer is-nowrap is-layout-flex wp-block-group-is-layout-flex">';
			if ( $image_url ) {
				$output .= '<figure class="wp-block-image size-full has-custom-border is-style-rounded wp-container-content-82ea18c2 is-style-rounded--6">';
				$output .= '<img src="' . $image_url . '" alt="' . $image_alt . '" class="has-border-color has-grey-light-border-color" style="border-width:1px;aspect-ratio:1;object-fit:cover;width:60px;height:60px"/>';
				$output .= '</figure>';
			}
			$output .= '<p style="font-style:italic;font-weight:400">' . $name . '</p>';
			$output .= '</div></article>';
		}

		$output .= '</div>';

		return $output;
	}
}
