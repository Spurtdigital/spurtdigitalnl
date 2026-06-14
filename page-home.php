<?php
/* Template Name: Page - Home */

get_header();
?>

<section class="home-hero position-relative mb-lg-10">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-10 text-center">
				<h1 class="display-1 text-uppercase text-white"><?php echo function_exists('creators_markdown') ? creators_markdown((string) get_field('home_hero_title')) : wp_kses_post((string) get_field('home_hero_title')); ?></h1>
				<div class="row mx-auto justify-content-center">
					<div class="col-xl-9">
						<p class="lead text-white"><?php echo wp_kses_post((string) get_field('home_hero_text')); ?></p>
					</div>
				</div>
				<?php spurt_render_btns('home_hero_btns', 'd-flex flex-wrap justify-content-center gap-2 mt-4'); ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
