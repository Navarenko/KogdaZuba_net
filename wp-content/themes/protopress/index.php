<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package protopress
 */

get_header(); ?>

	<div id="primary" class="content-areas col-md-12 <?php /*do_action('protopress_primary-width') */?>">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header articles-header">
				<div class="breadcrumbs"><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="https://kogdazuba.net/" itemprop="url"><span itemprop="title">Главная</span></a></span> <span class="sep">›</span> <span class="current">Статьи</span></div>
				<h1 class="entry-title" id="header-title">Статьи</h1>
			</header><!-- .page-header -->

			<div class="content">
				<div class="grid">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php if (get_the_category()[0]->term_id == 13) { ?>
					<div class="col-md-4">
						<figure class="effect-julia">
							<?php
							if (get_the_post_thumbnail() == "") {
								echo "<img src=\"https://kogdazuba.net/wp-content/uploads/2017/01/no-photo.png\"/>";
							} else {
								the_post_thumbnail();
							}?>
							<figcaption>
								<h2 class="entry-title title-font title_in_articles_feed"><?php echo get_the_title(); ?></h2>
								<div>
									<?php
									$str_arr = explode('.', get_the_excerpt());
									$i = 0;
									foreach ($str_arr as $str) {
										if (++$i == count($str_arr)) {
											if (strlen($str) > 5)
												echo '<p>' . $str . '…</p>';
										} else {
											if (strlen($str) > 5)
												echo '<p>' . $str . '</p>';
										}
									} ?>
								</div>
								<a href="<?php echo get_permalink(); ?>">View more</a>
							</figcaption>
						</figure>
					</div>
				<?php } ?>
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