<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Off_Piste
 * @since Off_Piste 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html lang="en">

	<head>
	    <title>Off-Piste Designs | <?php wp_title(); ?></title>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="description" content="Off-Piste Designs utilizes unconventional, unusual, and unexpected designs to create unique and modern websites.">
	    <meta name="keywords" content="Unique and Modern Websites, web development, websites, website building, web design, digital design, brian berzellini, berziiii, scratch website builds">
	    <meta name="viewport" content="width=device-width,initial-scale=1">
	    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
	    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css">
	    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bootstrap.min.css">
	    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
	    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript">
	    </script>
	    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-csv/0.71/jquery.csv-0.71.min.js" type="text/javascript">
	    </script>
	    <?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>
		<header>
			<nav>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
						<h5>Off-Piste Designs</h5>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4">
						<a id="top" href="http://www.offpistedesigns.com"><img src="<?php bloginfo('template_directory'); ?>/images/off-piste-logo.png" alt="Off-Piste Logo"></a>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4">
						<?php wp_nav_menu(array( 'theme_location' => 'primarynav-menu') ); ?>
					</div>
				</div>
				<a href="#top" class="top hide" id="scrollTop">
					<span class="glyphicons glyphicons-up-arrow"></span>
				</a>
			</nav>
		</header>