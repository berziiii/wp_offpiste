<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Off_Piste
 * @since Off_Piste 1.0
 */

define('WP_USE_THEMES', true); get_header(); ?>


	<main>
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2 work-title">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-2">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="row">
					<h3><?php the_title(); ?></h3>
					<article>
						<?php the_content(); ?>
					</article>
					<?php endwhile; else: ?>
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</main>

<?php get_footer(); ?>
