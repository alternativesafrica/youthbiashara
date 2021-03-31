<?php
/**
 * Hero setup
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
	?>

		<div class="container-fluid p-0" id="wrapper-static-content" tabindex="-1">

			<div class="row hero-header">
				<div class="col-sm-6 hero-text">
					<div class="slider-text">
						<h1 class="big-heading">How do I make money in this economy?</h1>
						<div class="slider-body">
							<p class="">Be part of the ecosystem and enjoy benefits from today</p>
							<a href="<?php echo esc_url(home_url('join-iyepa')); ?>" class="btn btn-lg btn-primary">Join today</a>
						</div>
						<h4 class="small-heading"><?php echo get_option('hero_intro_subheading');?></h4>
					</div>
				</div>
				<div class="col-sm-6 hero-image">
					<div class="slider-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/hero-slider-jayfu-iregi-yed-2018.jpg"alt="" />
					</div>
					<div class="slider-link">
						Stories of resilience <span class="material-icons">arrow_right_alt</span>
					</div>
				</div>
			</div>

	</div>
