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

<section class="bg-dark py-lg-10 py-5">
	<div class="container">
		<div class="row align-items-end">
			<div class="col-lg-4">
				<span class="text-uppercase fw-semibold text-primary">Cases</span>
				<h3 class="display-3 text-white mb-0">Werk waar we trots op zijn</h3>
			</div>
			<div class="offset-lg-4 col-lg-4 text-end">
				<a href="#" class="btn btn-dark btn-icon">
					Bekijk alles
					<span class="btn-icon__icon">
						<i class="fa-sharp fa-light fa-arrow-right"></i>
						<i class="fa-sharp fa-light fa-arrow-right"></i>
					</span>
				</a>
			</div>
		</div>
		<div class="row g-3 mt-lg-4 mt-3">
			<?php $loop = new WP_Query( array(
					'post_type' => 'case',
					'posts_per_page' => -1
				) ); 	?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="col-lg-6">
					<?php get_template_part( 'template-parts/blocks/block', 'case' ); ?>
				</div>
			<?php endwhile; wp_reset_query(); ?>
		</div>
	</div>
</section>


<section class="my-lg-10 my-5">
	<div class="container">
		 <div class="d-flex align-items-center justify-content-between mb-4">
			<h3 class="display-4 fw-semibold">Artikelen</h3>
			<a class="default-link" href="/">Bekijk alle artikelen</a>
		</div>
		<div class="row">
			<?php $loop = new WP_Query( array(
					'post_type' => 'post',
					'posts_per_page' => -1
				) ); 	?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="col-lg-4">
					<?php get_template_part( 'template-parts/blocks/block', 'post' ); ?>
				</div>
			<?php endwhile; wp_reset_query(); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
