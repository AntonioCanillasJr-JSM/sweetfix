<?php

/**
 * @package WPSEO\Admin\ConfigurationUI
 */

/**
 * Class WPSEO_Config_Field_Upsell_Configuration_Service
 */
class WPSEO_Config_Field_Upsell_Configuration_Service extends WPSEO_Config_Field {

	/**
	 * WPSEO_Config_Field_Upsell_Configuration_Service constructor.
	 */
	public function __construct() {
		parent::__construct( 'upsellConfigurationService', 'HTML' );

		$intro_text = sprintf(
			/* translators: %1$s expands to Yoast SEO. */
			__( 'Welcome to the %1$s configuration wizard. In a few simple steps we\'ll help you configure your SEO settings to match your website\'s needs!', 'wordpress-seo' ),
			'Yoast SEO'
		);

		/* Translators: %1$s expands to Yoast SEO, %2$s expands to Yoast SEO Premium, %3$s opens the link, %4$s closes the link. */
		$upsell_text = sprintf(
			__( 'While we strive to make setting up %1$s as easy as possible, we understand it can be daunting. If you’d rather have us set up %1$s for you (and get a copy of %2$s in the process), order our %3$s%1$s configuration service%4$s here!', 'wordpress-seo' ),
			'Yoast SEO',
			'Yoast SEO Premium',
			'<a target="_blank" href="https://yoa.st/configuration-package">',
			'</a>'
		);

		$html = '<p>' . $intro_text . '</p>';
		$html .= '<p><em>' . $upsell_text . '</em></p>';


		$this->set_property( 'html', $html );
	}
}
