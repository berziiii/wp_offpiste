<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Off_Piste
 * @since Off_Piste 1.0
 */

define('WP_USE_THEMES', true); get_header(); ?>

	<main>
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
				<h1 class="text-center"><?php the_title(); ?></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-2">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="row">
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
