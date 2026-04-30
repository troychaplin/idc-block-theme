<?php
/**
 * Language toggle block.
 *
 * Registers a dynamic block that links to the current page in the opposite
 * language. Renders nothing when no translation exists for the queried object,
 * or when WPML is not active.
 *
 * @package IDOCS
 */

namespace IDOCS;

/**
 * Class Language_Toggle_Block
 */
class Language_Toggle_Block {

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
			'idc/language-toggle',
			array(
				'api_version'     => 3,
				'render_callback' => array( $this, 'render' ),
			)
		);
	}

	/**
	 * Render the toggle button to the opposite language.
	 *
	 * Uses `skip_missing=1` so WPML omits any language without a translation
	 * of the current queried object, which lets us hide the button entirely
	 * rather than falling back to the language home page.
	 *
	 * @return string Block HTML, or an empty string when the toggle should be hidden.
	 */
	public function render(): string {
		if ( ! has_filter( 'wpml_current_language' ) ) {
			return '';
		}

		$languages = apply_filters( 'wpml_active_languages', null, 'skip_missing=1' );
		$current   = apply_filters( 'wpml_current_language', 'en' );
		$other     = 'en' === $current ? 'fr' : 'en';

		if ( ! isset( $languages[ $other ]['url'] ) ) {
			return '';
		}

		return sprintf(
			'<div class="is-language-toggle"><a id="language-toggle" href="%s">%s</a></div>',
			esc_url( $languages[ $other ]['url'] ),
			esc_html( ucfirst( $other ) )
		);
	}
}