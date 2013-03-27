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
 * @package Toolbox
 * @since Toolbox 0.1 
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

			<?php if ( have_posts() ) : ?>

				<?php toolbox_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post();
				$id = get_the_ID();
				?>
				<div class="post">
				<div class="get_post">
				
				<a class="shake" href="?p=<?php echo $id ?>">
				<h2><img src="http://www.alohastone.com/hawaiifm/play.png" style="width: 25px; vertical-align: middle;" /> <?php the_title() ?></h2>	
				</a>
				<span class="meta">
				<?php 
				echo "by ".get_the_author().", ";
				echo the_date()." // ";
			 comments_number( ' no comments', 'one comment', '% comments' ); 
				?>
				</span></div>
				<?php echo the_content() ?>
				</div>
				<?php endwhile; ?>

				<?php toolbox_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'toolbox' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'toolbox' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>