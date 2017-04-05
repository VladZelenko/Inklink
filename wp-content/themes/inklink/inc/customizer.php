<?php
/**
 * inklink Theme Customizer
 *
 * @package inklink
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */




function inklink_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';


	//****************************
	$wp_customize->add_panel( 'blog_panel', array(
		'title' => 'Blog page',
		'priority' => 10,
		));
	$wp_customize->add_section( 'footer_section' , array(
		'title'      => __( 'Footer', 'inklink' ),
		'priority'   => 30,
		'panel'			 => 'blog_panel',
		));
	//****************************


	//background top navmenu
	$wp_customize->add_setting('bg_top_navmenu', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_top_navmenu', array(
		'label'      => __( 'Background header menu', 'inklink' ),
		'section'    => 'colors',
		'settings'   => 'bg_top_navmenu',
		)));
	////background top navmenu - end

	//accent_font_color
	$wp_customize->add_setting('accent_font_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'accent_font_color', array(
		'label'      => __( 'Accent font color', 'inklink' ),
		'section'    => 'colors',
		'settings'   => 'accent_font_color',
		)));
	//accent_font_color - end

	//copyright
	$wp_customize->add_setting('copy_right', array( 'default'=> ''));
	$wp_customize->add_control(
		'copy_right',
		array(
			'label'    => __( 'CopyRight', 'businessplus' ),
			'section'  => 'footer_section',
			'settings' => 'copy_right',
			'type'     => 'textarea',
			));
	//copyright - end

	//background footer
	$wp_customize->add_setting('footer_bg', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_bg', array(
		'label'      => __( 'Background footer', 'inklink' ),
		'section'    => 'colors',
		'settings'   => 'footer_bg',
		)));
	//background footer - end

	//background post
	$wp_customize->add_setting('bg_posts', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_posts', array(
		'label'      => __( 'Background posts', 'inklink' ),
		'section'    => 'colors',
		'settings'   => 'bg_posts',
		)));
	//background post - end

	//Title post color
	$wp_customize->add_setting('title_post_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_post_color', array(
		'label'      => __( 'Title posts color', 'inklink' ),
		'section'    => 'colors',
		'settings'   => 'title_post_color',
		)));
	//Title post color - end

	//paragraph post color
	$wp_customize->add_setting('p_post_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'p_post_color', array(
		'label'      => __( 'Paragraph posts color', 'inklink' ),
		'section'    => 'colors',
		'settings'   => 'p_post_color',
		)));
	//paragraph post color - end

	//Categoty post color
	$wp_customize->add_setting('category_post_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_post_color', array(
		'label'      => __( 'Category posts color', 'inklink' ),
		'section'    => 'colors',
		'settings'   => 'category_post_color',
		)));
	//Categoty post color - end

	//Date post color
	$wp_customize->add_setting('date_post_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'date_post_color', array(
		'label'      => __( 'Date posts color', 'inklink' ),
		'section'    => 'colors',
		'settings'   => 'date_post_color',
		)));
	//Date post color - end

	//color_link
	$wp_customize->add_setting('color_link', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_link', array(
		'label'      => __( 'Post bautton color', 'inklink' ),
		'section'    => 'colors',
		'settings'   => 'color_link',
		)));
	//color_link - end

	//Title socil icons and comments post color
	$wp_customize->add_setting('comments_post_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'comments_post_color', array(
		'label'      => __( 'Comment posts color', 'inklink' ),
		'section'    => 'colors',
		'settings'   => 'comments_post_color',
		)));
	//Title socil icons and comments post color - end
}
add_action( 'customize_register', 'inklink_customize_register' );
function mytheme_customize_css(){
	?>
	<style type="text/css">
		.accent-color, .nav li a:hover, #touch-menu:hover, .nav li:hover, .accent-color a {color: <?php echo get_theme_mod('accent_font_color'); ?>;}
		.post-btn {color: <?php echo get_theme_mod('color_link'); ?>;}
		.post p {color: <?php echo get_theme_mod('p_post_color'); ?>;}
		.post header .date {color: <?php echo get_theme_mod('date_post_color'); ?>;}
		.post header .categoty a {color: <?php echo get_theme_mod('category_post_color'); ?>;}
		.post header .title a {color: <?php echo get_theme_mod('title_post_color'); ?>;}
		.post .post-comments, .post-social {color: <?php echo get_theme_mod('comments_post_color'); ?>;}
		.head-menu, .top-carousel .box-info .slide-btn:hover {background-color: <?php echo get_theme_mod('bg_top_navmenu'); ?>;}
		.copyright {background-color: <?php echo get_theme_mod('footer_bg'); ?>;}
		.post {background-color: <?php echo get_theme_mod('bg_posts'); ?>;}
	</style>
	<?php
}
add_action( 'wp_head', 'mytheme_customize_css');
//background top navmenu - end





/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function inklink_customize_preview_js() {
	wp_enqueue_script( 'inklink_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'inklink_customize_preview_js' );
