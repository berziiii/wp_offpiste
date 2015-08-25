<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Off_Piste
 * @since Off_Piste 1.0
 */

define('WP_USE_THEMES', true); get_header(); ?>

	<main class="auto-height">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
				<h1 class="text-center"><?php _e( '404', 'off-piste' ); ?></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-2">
				<div class="row">
					<h1 class="text-center">
						<?php _e( 'EKK...It looks like nothing was found. Try again.', 'off-piste' ); ?>
					</h1>
				</div>
			</div>
		</div>
	</main>

<?php get_footer();