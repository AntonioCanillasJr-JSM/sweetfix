<?php

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 780; /* pixels */
}

/**
 * Customizer additions.
 */
require_once get_template_directory() . '/inc/customizer.php';

/**
 * Custom template tags for this theme.
 */
require_once get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require_once get_template_directory() . '/inc/extras.php';

/**
 * Load Jetpack compatibility file.
 */
require_once get_template_directory() . '/inc/jetpack.php';


if ( ! function_exists( 'undiscovered_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function undiscovered_setup() {

	/* 
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Undiscovered, use a find and replace
	 * to change 'undiscovered' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'undiscovered', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'undiscovered' ),
		'second' => __( 'Second Menu', 'undiscovered' ),
		'third' => __( 'Third Menu', 'undiscovered' ),
		'sitemap' => __( 'Sitemap Menu', 'undiscovered' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'image', 'gallery', 'video', 'quote', 'link' ) );
}
endif; // undiscovered_setup
add_action( 'after_setup_theme', 'undiscovered_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function undiscovered_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar left', 'undiscovered' ),
		'id'            => 'sidebar-left',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar right', 'undiscovered' ),
		'id'            => 'sidebar-right',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'undiscovered_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function undiscovered_scripts() {
	wp_enqueue_style( 'undiscovered-slicknav-style', get_template_directory_uri() . '/css/slicknav.css' );
	wp_enqueue_style( 'undiscovered-bxslider-style', get_template_directory_uri() . '/css/jquery.bxslider.css' );
	wp_enqueue_style( 'undiscovered-boostrap-style', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'undiscovered-animate-style', get_template_directory_uri() . '/css/animate.css' );
	wp_enqueue_style( 'undiscovered-boostrap-min-style', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'undiscovered-boostrap-theme-style', get_template_directory_uri() . '/css/bootstrap-theme.css' );
	wp_enqueue_style( 'undiscovered-custom-style', get_template_directory_uri() . '/css/custom.css' );
	wp_enqueue_style( 'undiscovered-responsive-style', get_template_directory_uri() . '/css/responsive.css' );
	wp_enqueue_style( 'undiscovered-owl-carousel-min-style', get_template_directory_uri() . '/css/dist/assets/owl.carousel.min.css' );
	wp_enqueue_style( 'undiscovered-owl-theme-defaul-min-style', get_template_directory_uri() . '/css/dist/assets/owl.theme.default.min.css' );
	wp_enqueue_style( 'undiscovered-font-awesome-min-style', get_template_directory_uri() . '/css/font-awesome.min.css' );


	// $font = str_replace("+", " ", undiscovered_options('font', 'Rokkitt'));
	// $protocol = is_ssl() ? 'https' : 'http';
	// $query_args = array(
	// 	'family' =>	$font.':400,700'
	// );
	//wp_enqueue_style('undiscovered-fonts',
	//	add_query_arg($query_args, "$protocol://fonts.googleapis.com/css" ),
	// array(), null);
	
	wp_enqueue_style( 'undiscovered-style', get_stylesheet_uri() );
	

	wp_enqueue_style( 'undiscovered-theme-settings-css', get_template_directory_uri() . '/custom.css', array(), null ); 
	$main_color      = undiscovered_options('primary_color', '#E83D52');
	$secondary_color = undiscovered_options('secondary_color', '#BE3243');
	$css = "
		body, button, input {
			font-family: '{$font}', serif;
		}



		.slicknav_menu, #main #infinite-handle span, .comment-form .form-submit input {
			background: {$main_color};
		}
		.slicknav_btn, .slicknav_menu li a:hover, .slicknav_nav .slicknav_item:hover {
			background: {$secondary_color};
		}

		.main-navigation a {
			text-shadow: 2px -1px 1px {$secondary_color};
			color: #fff;
		}
		.main-navigation ul ul {
			border-color: {$secondary_color};
		}
		.main-navigation > div > ul > li > a {
			border-bottom: 1px solid {$main_color};
		}
		.main-navigation > div > ul > li:hover > a {
			border-bottom: 1px solid {$secondary_color};
		}
		.main-navigation ul ul a:hover {
			color: {$secondary_color};
		}

		.entry-content blockquote, 
		.format-link .entry-content p:first-child,
		#main #infinite-handle span,
		.comment-form .form-submit input {
			border-color: {$secondary_color};
		}
		.entry-content blockquote:before {
			color: {$secondary_color};
		}

		#main #infinite-handle span, .comment-form .form-submit input {
			text-shadow: 2px -1px 1px {$secondary_color};
		}

		#site-navigation {
			background: {$main_color};
			border-top-color: {$secondary_color};
		}
	";
	wp_add_inline_style( 'undiscovered-theme-settings-css', $css );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'undiscovered-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	wp_enqueue_script(
		'undiscovered-bxslider',
		get_template_directory_uri() . '/js/jquery.bxslider.min.js',
		array( 'jquery' )
	);

	wp_enqueue_script(
		'undiscovered-owl-carousel-min',
		get_template_directory_uri() . '/css/dist/owl.carousel.min.js',
		array( 'jquery' )
	);

	wp_enqueue_script(
		'undiscovered-custom',
		get_template_directory_uri() . '/js/custom.js',
		array( 'jquery' )
	);



	wp_enqueue_script(
		'undiscovered-owl-autoplay',
		get_template_directory_uri() . '/js/owl.autoplay.js',
		array( 'jquery' )
	);


	wp_enqueue_script(
		'undiscovered-slicknav-script',
		get_template_directory_uri() . '/js/jquery.slicknav.min.js',
		array( 'jquery' )
	);
	wp_enqueue_script(
		'undiscovered-uitotop-script',
		get_template_directory_uri() . '/js/jquery.ui.totop.js',
		array( 'jquery' )
	);
	wp_enqueue_script(
		'undiscovered-main-script',
		get_template_directory_uri() . '/js/main.js',
		array( 'jquery' )
	);

	wp_enqueue_script(
		'undiscovered-bootstrap-min-script',
		get_template_directory_uri() . '/js/bootstrap.min.js',
		array( 'jquery' )
	);


	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'undiscovered_scripts' );

add_filter( 'use_default_gallery_style', '__return_false' );

add_filter('body_class', 'add_logged_out_body_class');
function add_logged_out_body_class($classes) {
	if (! is_user_logged_in())
		$classes[] = 'logged-out';

	return $classes;
}


if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );

}



add_filter( 'comment_form_fields', 'move_comment_field' );
function move_comment_field( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}

function comment_validation_init() {
 if(is_single() && comments_open() ) { ?>
		<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$('#commentform').validate({

					rules: {
						author: {
							required: true,
							minlength: 2
						},

						email: {
							required: true,
							email: true
						},

						comment: {
							required: true,
							minlength: 20
						}
					},

					messages: {
						author: "Please fill the required field",
						email: "Please enter a valid email address.",
						 comment: "Please fill the required field"
					},

					errorElement: "div",
					errorPlacement: function(error, element) {
						element.after(error);
					}

				});
			});
		</script>
		<?php
	}
}
add_action('wp_footer', 'comment_validation_init');


function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );