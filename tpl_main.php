<?php
/**
 * Template Name: Main Layout
 *
 * @package WordPress
 * @subpackage Off_Piste
 * @since Off_Piste 1.0
 */

define('WP_USE_THEMES', true); get_header(); ?>

	<main>
		<?php get_template_part( 'page' ); ?>
	</main>

<?php get_footer(); ?>
