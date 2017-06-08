<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package protopress
 */

get_header(); ?>

	<div id="primary" class="content-area col-md-12 <?php //do_action('protopress_primary-width') ?>">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<div class="breadcrumbs"><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="https://kogdazuba.net/" itemprop="url"><span itemprop="title">Главная</span></a></span> <span class="sep">›</span> <span class="current">Клиники</span></div>
				<h1 class="entry-title" id="header-title">Стоматологические клиники г.<?php
//					the_archive_title( '<h1 class="page-title">', '</h1>' );
					echo single_cat_title();
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
				</h1>
			</header><!-- .page-header -->

			<?php /*while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" class="col-md-6 col-sm-6 grid post-<?php the_ID(); the_category(' '); ?>">

					<div class="featured-thumb col-md-4 col-sm-4">

						<?php the_post_thumbnail(); ?>
					</div><!--.featured-thumb-->

					<div class="out-thumb col-md-8 col-sm-8">
						<header class="entry-header">
							<h2 class="entry-title title-font title_in_articles_feed"><a href="<?php echo get_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
							<?php the_excerpt(); ?>
						</header><!-- .entry-header -->
					</div>
					<!--.out-thumb-->
				</article>
				<!-- begin post
				<div class="blogPost clearfix">
					<div class="metaLeft">

						...

						<?php the_excerpt(); ?>
					</div>
				</div>
				 end post -->
			<?php endwhile; */?>


			<div class="container-oscar">
				<div class="grid">
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="col-md-4">
							<figure class="effect-oscar">
								<?php
								if (get_the_post_thumbnail() == "") {
									echo "<img src=\"https://kogdazuba.net/wp-content/uploads/2017/01/no-photo.png\"/>";
								} else {
									the_post_thumbnail();
								}?>
								<figcaption>
									<h2 class="entry-title title-font title_in_articles_feed"><?php echo get_the_title(); ?></h2>
									<p><?php echo get_the_excerpt(); ?></p>
									<a href="<?php echo get_permalink(); ?>">View more</a>
								</figcaption>
							</figure>
						</div>
					<?php endwhile; ?>
				</div>
			</div>

			<?php protopress_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
