<?php
/**
 * This is the template for the Sample pages
 *
 * @package WordPress
 * @subpackage Off_Piste
 * @since Off_Piste 1.0
 */


define('WP_USE_THEMES', true); get_header(); ?>


	<main>
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
				<h1 class="text-center sample-title"><?php the_title(); ?></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 sample-controls">
				<a href=''>
					<span class="glyphicons glyphicons-left-arrow">
						<p class="direction work-title">Prev</p>
					</span>
				</a>
				<a href="../">
					<span class="glyphicons glyphicons-home">
						<p class="direction work-title">Home</p>
					</span>
				</a>
				<a href="">
					<span class="glyphicons glyphicons-right-arrow">
						<p class="direction work-title">Next</p>
					</span>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-2">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="row">
					<article class="sample-content">
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