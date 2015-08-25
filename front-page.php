<?php define('USE_WP_THEMES', true); get_header(); ?>

	<main>
		<div class="main-container">
			<div class="hero-container">
				<img src="<?php bloginfo('template_directory'); ?>/images/tahoe-background.png" alt="Tahoe Image">
				<div class="hero-curtain">
					<div class="hero-content">
						<div class="rotating-sentence">
							Hi, I'm Brian.<br>
							I'm a Front-End Developer,<br>
							Career Coach,<br>
							&amp;&nbsp;<span class="rotating-words" id="rotateWord">
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="work-container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2 work-title">
						<h1 class="work-title">Work</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-8 col-xs-offset-2">
						<div class="row sample-container">
							<div class="col-lg-3 col-md-3 col-sm-6 work-sample">
								<a href="jba-financial-advisors"><img src="<?php bloginfo('template_directory'); ?>/images/JBA-logo.png" alt="JBA Logo">
									<span class="sample-caption center">
										<h5>JBA Financial Advisors</h5>
										<h6>Corporate Site Redesign</h6>
									</span>
								</a>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 work-sample">
								<a href="Admon-Wedding"><img src="<?php bloginfo('template_directory'); ?>/images/Admon-logo.png" alt="Admon Logo">
									<span class="sample-caption center">
										<h5>Admon Wedding</h5>
										<h6>Website Design &amp; development</h6>
									</span>
								</a>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 work-sample">
								<a href="Vitamin-T"><img src="<?php bloginfo('template_directory'); ?>/images/vitamin-t-logo.png" alt="Vitamin T Logo">
									<span class="sample-caption center">
										<h5>Vitamin T Talent Portal</h5>
										<h6>Beta Web Application</h6>
									</span>
								</a>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 work-sample">
								<a href="Curious-Alums"><img src="<?php bloginfo('template_directory'); ?>/images/curiousalums-logo.png" alt="Curious Alums Logo">
									<span class="sample-caption center">
										<h5>The Curious Alum</h5>
										<h6>GA Alumni Community</h6>
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="service-container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2 service-title">
						<h1 class="service-title">Services</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 service-wrapper">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-6">
								<span class="glyphicons glyphicons-pencil"></span>
								<h4>Design</h4>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6">
								<span class="glyphicons glyphicons-embed-close"></span>
								<h4>Development</h4>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6">
								<span class="glyphicons glyphicons-cogwheels"></span>
								<h4>Strategy</h4>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6">
								<span class="glyphicons glyphicons-fire"></span>
								<h4>Branding</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

<?php get_footer(); ?>
