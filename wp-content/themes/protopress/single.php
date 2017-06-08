<?php
/**
 * The template for displaying all single posts.
 *
 * @package protopress
 */

get_header(); ?>

	<header class="entry-header">
		<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php $thumb_id = get_post_thumbnail_id(); ?>
		<?php if ($thumb_id) { ?>
			<?php $category = get_the_category(); ?>
			<?php if ($category[0]->term_id != 19) { ?>
				<div class="cur_thumbnail" style="background-image: url(<?php
			$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
			echo $thumb_url[0]; ?>);">
			<?php } ?>
		<?php } ?>
		<!--		<div class="entry-meta">-->
<!--			--><?php //protopress_posted_on(); ?>
<!--		</div>--> <!--entry-meta -->
	</header><!-- .entry-header -->

	<div id="primary-mono" class="content-area col-md-12">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php //protopress_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>