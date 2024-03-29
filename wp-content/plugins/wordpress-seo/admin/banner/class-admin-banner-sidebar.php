<?php

/**
 * @package WPSEO\Admin\Banner
 */

/**
 * Represents the render object for generating the html for the given banner.
 */
class WPSEO_Admin_Banner_Sidebar {

	/** @var string */
	protected $title = '';

	/** @var WPSEO_Admin_Banner_Spot[] */
	protected $banner_spots = array();

	/** @var  WPSEO_Admin_Banner_Renderer */
	protected $banner_renderer;

	/**
	 * WPSEO_Admin_Banner_Sidebar constructor.
	 *
	 * @param string                      $title           The title for the sidebar.
	 * @param WPSEO_Admin_Banner_Renderer $banner_renderer The render class for banners.
	 */
	public function __construct( $title, WPSEO_Admin_Banner_Renderer $banner_renderer ) {
		$this->title = $title;
		$this->banner_renderer = $banner_renderer;
	}

	/**
	 * Returns the set title.
	 *
	 * @return string
	 */
	public function get_title() {
		return $this->title;
	}

	/**
	 * Initializes the banner sidebar by setting its banner spots.
	 *
	 * @param WPSEO_Features $features Class regarding WPSEO Features.
	 */
	public function initialize( WPSEO_Features $features ) {
		if ( $features->is_free() ) {
			$this->add_banner_spot( $this->get_premium_spot() );
		}

		$this->add_banner_spot( $this->get_services_spot() );

		$extensions_spot = $this->get_extensions_spot( $this->get_active_extensions() );
		if ( $extensions_spot->has_banners() ) {
			$this->add_banner_spot( $extensions_spot );
		}

		$this->add_banner_spot( $this->get_courses_spot() );
		$this->add_banner_spot( $this->get_remove_banner_spot() );
	}

	/**
	 * Returns array with bannerspots.
	 *
	 * @return WPSEO_Admin_Banner_Spot[]
	 */
	public function get_banner_spots() {
		return $this->banner_spots;
	}

	/**
	 * Adds a banner spot.
	 *
	 * @param WPSEO_Admin_Banner_Spot $spot The spot to add.
	 */
	protected function add_banner_spot( WPSEO_Admin_Banner_Spot $spot ) {
		$this->banner_spots[] = $spot;
	}

	/**
	 * Returns the premium banner spot.
	 *
	 * @return WPSEO_Admin_Banner_Spot
	 */
	protected function get_premium_spot() {
		$premium_spot = new WPSEO_Admin_Banner_Spot( __( 'Premium', 'wordpress-seo' ), $this->banner_renderer );

		$premium_spot->set_description(
			sprintf(
				/* translators: %1$s expands to a link start tag to the Yoast plugin page, %2$s is the link closing tag */
				__( 'Want to get the most out of your SEO-strategy? %1$sGo premium!%2$s.', 'wordpress-seo' ),
				'<a target="_blank" href="https://yoa.st/ji">',
				'</a>'
			)
		);

		$premium_spot->add_banner(
			new WPSEO_Admin_Banner(
				'https://yoa.st/jj',
				'premium-seo.png',
				261,
				152,
				sprintf(
					/* translators: %1$s expands to Yoast SEO Premium. */
					__( 'Buy the %1$s plugin now and get access to extra features and 24/7 support!', 'wordpress-seo' ),
					'Yoast SEO Premium'
				)
			)
		);

		return $premium_spot;
	}

	/**
	 * Returns the services banner spot.
	 *
	 * @return WPSEO_Admin_Banner_Spot
	 */
	protected function get_services_spot() {
		$service_spot = new WPSEO_Admin_Banner_Spot( __( 'Services', 'wordpress-seo' ), $this->banner_renderer );

		$service_spot->set_description(
			sprintf(
				/* translators: %1$s expands to a link start tag to the Yoast Services page, %2$s to Yoast, %3$s is the link closing tag. */
				__( 'Do you want to know how to improve your rankings? %1$sLet team %2$s help you!%3$s', 'wordpress-seo' ),
				'<a target="_blank" href="https://yoa.st/jk">',
				'Yoast',
				'</a>'
			)
		);

		$service_spot->add_banner(
			new WPSEO_Admin_Banner(
				'https://yoa.st/jl',
				'website-review.png',
				261,
				152,
				__( 'Order a Website Review and we will tell you what to improve to attract more visitors!', 'wordpress-seo' )
			)
		);

		$service_spot->add_banner(
			new WPSEO_Admin_Banner(
				'https://yoa.st/jm',
				'configuration-service.png',
				261,
				152,
				sprintf(
				/* translators: %1$s expands to Yoast SEO Premium. */
					__( 'Let our experts set up your %1$s plugin!', 'wordpress-seo' ),
					'Yoast SEO Premium'
				)
			)
		);

		$service_spot->add_banner(
			new WPSEO_Admin_Banner(
				'https://yoa.st/seo-care-banner',
				'seo-care.png',
				261,
				152,
				sprintf(
				/* translators: %1$s expands to Yoast SEO Care. */
					__( 'Let us help you take care of the SEO of your website. Order %1$s now!', 'wordpress-seo' ),
					'Yoast SEO Care'
				)
			)
		);

		return $service_spot;
	}

	/**
	 * Returns an array with the Yoast SEO extensions with the value true when they are active.
	 *
	 * @return array
	 */
	protected function get_active_extensions() {
		return array(
			'video'       => class_exists( 'wpseo_Video_Sitemap' ),
			'woocommerce' => class_exists( 'Woocommerce' ) && class_exists( 'Yoast_WooCommerce_SEO' ),
			'news'        => class_exists( 'WPSEO_News' ),
			'local'       => defined( 'WPSEO_LOCAL_VERSION' ),
		);
	}

	/**
	 * Returns the extensions banner spot.
	 *
	 * @param array $active_extensions The active extensions.
	 *
	 * @return WPSEO_Admin_Banner_Spot
	 */
	protected function get_extensions_spot( array $active_extensions ) {
		$extension_spot = new WPSEO_Admin_Banner_Spot( __( 'Extensions', 'wordpress-seo' ), $this->banner_renderer );

		$extension_spot->set_description(
			sprintf(
				/* translators: %1$s expands to a link start tag to the Yoast plugin page, %2$s is the link closing tag. */
				__( 'Take your SEO to the next level and outrank your competition with our %1$sSEO plugins%2$s.', 'wordpress-seo' ),
				'<a target="_blank" href="https://yoa.st/jn">',
				'</a>'
			)
		);

		if ( empty( $active_extensions['video'] ) ) {
			$extension_spot->add_banner(
				new WPSEO_Admin_Banner(
					'https://yoa.st/jo',
					'video-seo.png',
					261,
					152,
					sprintf(
						/* translators: %1$s expands to Yoast Video SEO. */
						__( 'Buy the %1$s plugin now and optimize your videos for video search results and social media!', 'wordpress-seo' ),
						'Yoast Video SEO'
					)
				)
			);
		}

		if ( empty( $active_extensions['woocommerce'] )  ) {
			$extension_spot->add_banner(
				new WPSEO_Admin_Banner(
					'https://yoa.st/jp',
					'woocommerce-seo.png',
					261,
					152,
					sprintf(
						/* translators: %1$s expands to Yoast WooCommerce SEO. */
						__( 'Buy the %1$s plugin now and optimize your shop today to improve your product promotion!', 'wordpress-seo' ),
						'Yoast WooCommerce SEO'
					)
				)
			);
		}

		if ( empty( $active_extensions['local'] ) ) {
			$extension_spot->add_banner(
				new WPSEO_Admin_Banner(
					'https://yoa.st/jq',
					'local-seo.png', 261,
					152,
					sprintf(
						/* translators: %1$s expands to Yoast Local SEO. */
						__( 'Buy the %1$s plugin now to improve your site&#8217;s Local SEO and ranking in Google Maps!', 'wordpress-seo' ),
						'Yoast Local SEO'
					)
				)
			);
		}

		if ( empty( $active_extensions['news'] ) ) {
			$extension_spot->add_banner(
				new WPSEO_Admin_Banner(
					'https://yoa.st/jr',
					'news-seo.png',
					261,
					152,
					sprintf(
						/* translators: %1$s expands to Yoast News SEO. */
						__( 'Buy the %1$s plugin now and start optimizing to get your site featured in Google News!', 'wordpress-seo' ),
						'Yoast News SEO'
					)
				)
			);
		}

		return $extension_spot;
	}

	/**
	 * Returns the courses banner spot.
	 *
	 * @return WPSEO_Admin_Banner_Spot
	 */
	protected function get_courses_spot() {
		$courses_spot = new WPSEO_Admin_Banner_Spot( __( 'Courses', 'wordpress-seo' ), $this->banner_renderer );

		$courses_spot->set_description(
			sprintf(
				/* translators: %1$s expands to a link start tag to the Yoast Services page, %2$s is the link closing tag. */
				__( 'Do you want to get a grip on your own SEO-strategy? Learn all about it in one of %1$sour courses%2$s.', 'wordpress-seo' ),
				'<a target="_blank" href="https://yoa.st/jt">',
				'</a>'
			)
		);

		$courses_spot->add_banner(
			new WPSEO_Admin_Banner(
				'https://yoa.st/ju',
				'basic-seo-training.png',
				261,
				152,
				__( 'Take the online Basic SEO Training course and learn the fundamentals of SEO!', 'wordpress-seo' )
			)
		);

		$courses_spot->add_banner(
			new WPSEO_Admin_Banner(
				'https://yoa.st/jv',
				'yoast-seo-for-wordpress-training.png',
				261,
				152,
				/* translators: %1$s expands to Yoast SEO for WordPress Training, %2$s to Yoast SEO for WordPress. */
				sprintf(
					__( 'Take the %s course and become a certified %2$s expert!', 'wordpress-seo' ),
					'Yoast SEO for WordPress Training',
					'Yoast SEO for WordPress'
				)
			)
		);

		$courses_spot->add_banner(
			new WPSEO_Admin_Banner(
				'https://yoa.st/jw',
				'seo-copywriting-training.png',
				261,
				152,
				__( 'Take the online SEO Copywriting Training course and learn how to write awesome copy that ranks!', 'wordpress-seo' )
			)
		);

		$courses_spot->add_banner(
			new WPSEO_Admin_Banner(
				'https://yoa.st/jx',
				'keyword-research-training.png',
				261,
				152,
				__( 'Take the online Keyword Research Training course and learn how to rank with your keywords!', 'wordpress-seo' )
			)
		);

		return $courses_spot;
	}

	/**
	 * Returns the remove banner spot.
	 *
	 * @return WPSEO_Admin_Banner_Spot
	 */
	protected function get_remove_banner_spot() {

		$remove_banner_spot = new WPSEO_Admin_Banner_Spot(
			__( 'Remove these ads?', 'wordpress-seo' )
		);

		$remove_banner_spot->set_description(
			'<a target="_blank" href="https://yoa.st/jy">'.
			/* translators: %1$s expands to Yoast SEO Premium */
			sprintf( __( 'Upgrade to %1$s &raquo;', 'wordpress-seo' ), 'Yoast SEO Premium' ) .
			'</a>'
		);

		return $remove_banner_spot;
	}
}
