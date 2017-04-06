<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package inklink
 */

get_header(); ?>
<div class="col-md-12 col-lg-12">
	<div class="top-carousel">
		<?php
		$query = new WP_Query( array('post_type' => 'slides', 'posts_per_page' => 100 ) );
		if ($query->have_posts()):?>
		<div class="row top-slider">
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="col-md-12 col-lg-12 content-box">
					<?php the_post_thumbnail('full', 'class=img-responsive'); ?>
					<div class="content">
						<div class="box-info">
							<i class="accent-color"><?php the_category(', '); ?></i>
							<h2><?php the_title(); ?></h2>
							<?php the_excerpt(); ?>
							<sapn class="date"><?php the_time('F j Y' ); ?></sapn>
							<a href="<?php the_permalink(); ?>" class="slide-btn">Read More</a>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; wp_reset_postdata(); ?>
	</div>
</div>
</div>
<div class="col-md-9 col-lg-9">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
				<article class="post">
					<div class="row">
						<div class="col-md-5 col-lg-5">
							<a href="<?php the_permalink(); ?>""><?php the_post_thumbnail(); ?></a>
							<?php if ( is_active_sidebar( '' ) ) : ?>
								<div id="primary" role="complementary">
									<?php dynamic_sidebar( '' ); ?>
								</div>
							<?php endif; ?>
						</div>
						<div class="col-md-7 col-lg-7">
							<header>
								<div class="categoty"><?php the_category(', '); ?></div>
								<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<a href="<?php get_posts(); ?>" class="date"><?php the_time('F j Y'); ?></a>
							</header>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>" class="post-btn">Read More</a>
						</div>
						<footer>
							<?php if ( is_active_sidebar( 'blog_post_area' ) ) : ?>
								<div id=f ( $image_src = wp_get_attachment_image_src( $thumbnail_id, 'normal-bg' ) )"primary" role="complementary">
									<span class="post-social">Share: </span><?php dynamic_sidebar( 'blog_post_area' ); ?>
								</div>
							<?php endif; ?>
							<div class="post-comments"><?php comments_number( 'no coments', '1 commtent', '% comments'); ?></div>
						</footer>
					</div>
				</article>
			<?php endwhile; ?>
		<?php endif; ?>
	</main><!-- #main -->
</div><!-- #primary -->
</div>
<?php the_posts_pagination(['mid_size' => 1])?>
<?php
get_sidebar();
get_footer();
