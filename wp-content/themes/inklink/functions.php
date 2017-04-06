<?php
/**
 * inklink functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package inklink
 */

if ( ! function_exists( 'inklink_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function inklink_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on inklink, use a find and replace
	 * to change 'inklink' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'inklink', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'inklink' ),
		) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'inklink_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
		) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support( 'custom-logo' );
}
endif;
add_action( 'after_setup_theme', 'inklink_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function inklink_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'inklink_content_width', 640 );
}
add_action( 'after_setup_theme', 'inklink_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function inklink_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'inklink' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'inklink' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
		) );
}
add_action( 'widgets_init', 'inklink_widgets_init' );

//********************************Post social*******************************
register_sidebar( array(
	'name' => __( 'Blog post', 'inklink' ),
	'id' => 'blog_post_area',
	'description' => __( 'Blog post area', 'inklink' ),
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	) );
//**************************************************************************

//******************************Footer sidebar area*************************
register_sidebar( array(
	'name' => __( 'Footer sidebar area 1', 'inklink' ),
	'id' => 'footer_sidebar_area-1',
	'description' => __( 'Footer sidebar area 1', 'inklink' ),
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	) );
register_sidebar( array(
	'name' => __( 'Footer sidebar area 2', 'inklink' ),
	'id' => 'footer_sidebar_area-2',
	'description' => __( 'Footer sidebar area 2', 'inklink' ),
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	) );
//***************************************************************************

//top slider
function slider_post_type() {
	$args = array(
      'label' => 'Head slider',   //название постайпа в меню
      'public' => true,
      'show_ui' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'rewrite' => array('slug' => 'slides'),
      'query_var' => true,
      'taxonomies'          => array( 'category' ),
      'supports' => array(
      	'title',
      	'editor',
      	'excerpt',
      	'trackbacks',
      	'custom-fields',
      	'comments',
      	'revisions',
      	'thumbnail',
      	'author',
      	'page-attributes',)
      );
	register_post_type( 'slides', $args );
}
add_action( 'init', 'slider_post_type' );

//footer gallery
function footer_gallery_post_type() {
	$args = array(
      'label' => 'Footer gallery',
      'public' => true,
      'show_ui' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'rewrite' => array('slug' => 'gallery'),
      'query_var' => true,
      'taxonomies'          => array( 'category' ),
      'supports' => array(
      	'title',
      	'editor',
      	'excerpt',
      	'trackbacks',
      	'custom-fields',
      	'comments',
      	'revisions',
      	'thumbnail',
      	'author',
      	'page-attributes',)
      );
	register_post_type( 'gallery', $args );
}
add_action( 'init', 'footer_gallery_post_type' );


add_filter('excerpt_more', function($more) {
	return '...';
});
/**
 * Enqueue scripts and styles.
 */
function inklink_scripts() {
	wp_enqueue_style( 'inklink-style', get_stylesheet_uri() );


	wp_enqueue_script( 'jQ', get_template_directory_uri() . '/libs/jquery/dist/jquery.min.js', array(), '20151215', true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/libs/slick-carousel/slick/slick.min.js', array(), '20151215', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/libs/bootstrap-sass/assets/javascripts/bootstrap.min.js', array(), '20151215', true );
	wp_enqueue_script( 'inklink-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'inklink-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/custom.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'inklink_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
