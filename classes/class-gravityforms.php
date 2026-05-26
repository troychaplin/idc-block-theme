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
		// add_filter( 'gform_default_styles', array( $this, 'set_default_styles' ) );
		// add_filter( 'gform_pre_render', array( $this, 'enforce_global_styles' ) );
	}

	/**
	 * Canonical style values shared between the default-styles filter and the
	 * render-time override. Excludes 'theme', which is a separate form property.
	 *
	 * @return array
	 */
	private function get_styles(): array {
        // {"theme":"orbital","inputSize":"sm","inputBorderRadius":"4","inputBorderColor":"#DCD6CC","inputBackgroundColor":"#FFFFFF","inputColor":"#191919","inputPrimaryColor":"#b3472d","inputImageChoiceAppearance":"card","inputImageChoiceStyle":"square","inputImageChoiceSize":"md","labelFontSize":"13","labelColor":"#112337","descriptionFontSize":"12","descriptionColor":"#585e6a","buttonPrimaryBackgroundColor":"#1F3A5B","buttonPrimaryColor":"#FFFFFF"}
		return array(
			'inputSize'                    => 'sm',
			'inputBorderRadius'            => '4',
			'inputBorderColor'             => '#DCD6CC',
			'inputBackgroundColor'         => '#FFFFFF',
			'inputColor'                   => '#191919',
			'inputPrimaryColor'            => '#b3472d',
			'inputImageChoiceAppearance'   => 'card',
			'inputImageChoiceStyle'        => 'square',
			'inputImageChoiceSize'         => 'md',
			'labelFontSize'                => '13',
			'labelColor'                   => '#112337',
			'descriptionFontSize'          => '12',
			'descriptionColor'             => '#585e6a',
			'buttonPrimaryBackgroundColor' => '#1F3A5B',
			'buttonPrimaryColor'           => '#FFFFFF',
		);
	}

	/**
	 * Set block attribute defaults for the sidebar and new form placements.
	 *
	 * @param mixed $styles Existing default styles (array or false).
	 * @return array
	 */
	public function set_default_styles( $styles ): array {
		return array_merge( array( 'theme' => 'orbital' ), $this->get_styles() );
	}

	/**
	 * Force global styles on every rendered form, overriding per-block saved
	 * attributes. Runs after set_form_styles() merges block attributes, so this
	 * is the only reliable place to enforce theme-level defaults.
	 *
	 * @param array $form The form object.
	 * @return array
	 */
	public function enforce_global_styles( array $form ): array {
		$form['styles'] = $this->get_styles();
		$form['theme']  = 'orbital';
		return $form;
	}
}