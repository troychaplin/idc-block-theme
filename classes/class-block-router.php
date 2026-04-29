<?php
/**
 * Block-related filters and functions.
 *
 * @package IDOCS
 */

namespace IDOCS;

/**
 * Class Block_Router
 */
class Block_Router {

	/**
	 * Initialize the module.
	 */
	public function init(): void {
		add_action( 'init', array( $this, 'register_template_part_routers' ) );
	}

	/**
	 * Register PHP-only router blocks for each language-aware template part.
	 */
	public function register_template_part_routers(): void {
		$this->register_template_part_router(
			'footer',
			array(
				'en' => 'footer-en',
				'fr' => 'footer-fr',
			)
		);

		$this->register_template_part_router(
			'header',
			array(
				'en' => 'header-en',
				'fr' => 'header-fr',
			)
		);
	}

	/**
	 * Register a single PHP-only router block for a language-aware template part.
	 *
	 * @param string $name     Slot name (e.g. 'footer'). Used to derive the block name.
	 * @param array  $slug_map Map of language codes to template part slugs.
	 */
	private function register_template_part_router( string $name, array $slug_map ): void {
		register_block_type(
			"idocs/{$name}-router",
			array(
				'title'           => sprintf(
					/* translators: %s: template part slot name, e.g. "Footer". */
					__( '%s Router', 'idocs-block-theme' ),
					ucfirst( $name )
				),
				'description'     => sprintf(
					/* translators: %s: template part slot name, e.g. "footer". */
					__( 'Renders the language-appropriate %s template part.', 'idocs-block-theme' ),
					$name
				),
				'category'        => 'theme',
				'icon'            => 'translation',
				'supports'        => array(
					'autoRegister' => true,
					'html'         => false,
					'inserter'     => true,
				),
				'render_callback' => function () use ( $slug_map, $name ) {
                    $lang = apply_filters( 'wpml_current_language', 'en' );
                    $slug = $slug_map[ $lang ] ?? reset( $slug_map );

                    $tag_map = array(
                        'header' => 'header',
                        'footer' => 'footer',
                    );
                    $tag = $tag_map[ $name ] ?? 'div';

                    ob_start();
                    block_template_part( $slug );
                    $inner = ob_get_clean();

                    return sprintf(
                        '<%1$s class="wp-block-template-part">%2$s</%1$s>',
                        $tag,
                        $inner
                    );
                },
			)
		);
	}
}