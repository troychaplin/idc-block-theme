<?php
/**
 * Gravity Forms integration: default styles and form args.
 *
 * @package IDOCS
 */

namespace IDOCS;

/**
 * Class Gravityforms
 */
class Gravityforms {

	/**
	 * Initialize the module.
	 */
	public function init(): void {
		add_filter( 'gform_default_styles', array( $this, 'set_default_styles' ) );
	}

	/**
	 * Provide default style settings for all Gravity Forms, sourced from theme.json
	 * palette slugs so colors stay aligned with the design system.
	 *
	 * @param mixed $styles Existing default styles (array or false).
	 * @return array Default styles array.
	 */
	public function set_default_styles( $styles ): array {
		// return '{"theme":"orbital","inputSize":"sm","inputBorderRadius":"4","inputBorderColor":"#DCD6CC","inputBackgroundColor":"#FFFFFF","inputColor":"#191919","inputPrimaryColor":"#b3472d","inputImageChoiceAppearance":"card","inputImageChoiceStyle":"square","inputImageChoiceSize":"md","labelFontSize":"12","labelColor":"#112337","descriptionFontSize":"12","descriptionColor":"#585e6a","buttonPrimaryBackgroundColor":"#1F3A5B","buttonPrimaryColor":"#FFFFFF"}';

		return array(
			'theme'                        => 'orbital',
			'inputSize'                    => 'sm',
			'inputBorderRadius'            => '4',
			'inputBorderColor'             => '#DCD6CC',
			'inputBackgroundColor'         => '#FFFFFF',
			'inputColor'                   => '#191919',
			'inputPrimaryColor'            => '#b3472d',
			'inputImageChoiceAppearance'   => 'card',
			'inputImageChoiceStyle'        => 'square',
			'inputImageChoiceSize'         => 'md',
			'labelFontSize'                => '12',
			'labelColor'                   => '#112337',
			'descriptionFontSize'          => '12',
			'descriptionColor'             => '#585e6a',
			'buttonPrimaryBackgroundColor' => '#1F3A5B',
			'buttonPrimaryColor'           => '#FFFFFF',
		);
	}
}