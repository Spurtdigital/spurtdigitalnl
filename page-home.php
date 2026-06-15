<?php
/* Template Name: Page - Home */

get_header();
?>

<section class="home-hero position-relative mb-lg-10 mb-5">
	<div class="container z-3 position-relative">
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

<section>
	<div class="container mb-lg-5 mb-3">
		<div class="row align-items-end">
			<div class="col-lg-6">
				<h2 class="display-2"><?php echo wp_kses_post((string) get_field('home_services_title')); ?></h2>
			</div>
			<div class="col-lg-5 offset-lg-1">
				<p class="lead mb-0"><?php echo wp_kses_post((string) get_field('home_services_text')); ?></p>
			</div>
		</div>
		<div class="row g-lg-3 g-2 mt-lg-6 mt-3">
			<?php if (get_field('home_services_featured_title') || get_field('home_services_featured_text') || get_field('home_services_featured_image') || get_field('home_services_featured_link')) : ?>
				<div class="col-12">
					<div class="block-service-featured d-flex align-items-stretch h-100">
						<div class="block-service-featured__content">
							<h3 class="display-3 mb-2 fw-semibold"><?php echo esc_html((string) get_field('home_services_featured_title')); ?></h3>
							<p><?php echo wp_kses_post((string) get_field('home_services_featured_text')); ?></p>
							<?php if (get_field('home_services_featured_link')) : ?>
								<a href="<?php echo esc_url((string) (get_field('home_services_featured_link')['url'] ?? '#')); ?>" target="<?php echo esc_attr((string) (get_field('home_services_featured_link')['target'] ?: '_self')); ?>" class="block-service__link"><?php echo esc_html((string) (get_field('home_services_featured_link')['title'] ?? 'Meer hierover')); ?> <i class="fa-sharp fa-light fa-arrow-right ms-1 small"></i></a>
							<?php endif; ?>
						</div>
						<?php if (get_field('home_services_featured_image')) : ?>
							<div class="block-service-featured__media position-relative overflow-hidden">
								<img class="img-abs-center" src="<?php echo esc_url((string) (get_field('home_services_featured_image')['url'] ?? '')); ?>" alt="<?php echo esc_attr((string) (get_field('home_services_featured_image')['alt'] ?? '')); ?>">
							</div>
						<?php endif; ?>
					</div>
				</div>
			<?php endif; ?>

			<?php if (have_rows('home_services_cards')) : ?>
				<?php while (have_rows('home_services_cards')) : the_row(); ?>
					<div class="col-lg-4">
						<div class="block-service h-100">
							<?php if (get_sub_field('image')) : ?>
								<div class="block-service__media">
									<img class="img-abs-center" src="<?php echo esc_url((string) (get_sub_field('image')['url'] ?? '')); ?>" alt="<?php echo esc_attr((string) (get_sub_field('image')['alt'] ?? '')); ?>">
								</div>
							<?php endif; ?>
							<div class="block-service__content">
								<h3 class="display-5 fw-semibold"><?php echo esc_html((string) get_sub_field('title')); ?></h3>
								<p><?php echo wp_kses_post((string) get_sub_field('text')); ?></p>

								<?php if (have_rows('links')) : ?>
									<ul class="reset-list">
										<?php while (have_rows('links')) : the_row(); ?>
											<?php if (get_sub_field('link')) : ?>
												<li><a href="<?php echo esc_url((string) (get_sub_field('link')['url'] ?? '#')); ?>" target="<?php echo esc_attr((string) (get_sub_field('link')['target'] ?: '_self')); ?>"><?php echo esc_html((string) (get_sub_field('link')['title'] ?? '')); ?></a></li>
											<?php endif; ?>
										<?php endwhile; ?>
									</ul>
								<?php endif; ?>

								<?php if (get_sub_field('cta_link')) : ?>
									<a href="<?php echo esc_url((string) (get_sub_field('cta_link')['url'] ?? '#')); ?>" target="<?php echo esc_attr((string) (get_sub_field('cta_link')['target'] ?: '_self')); ?>" class="block-service__link"><?php echo esc_html((string) (get_sub_field('cta_link')['title'] ?? 'Meer hierover')); ?> <i class="fa-sharp fa-light fa-arrow-right ms-1 small"></i></a>
								<?php endif; ?>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>

<section class="home-partners bg-light py-xl-14 py-5">
	<div class="container mb-lg-8">
		<div class="col-xl-6 mx-auto text-center">
			<h4 class="display-3"><?php echo function_exists('creators_markdown') ? creators_markdown((string) get_field('partners_title', 'option')) : wp_kses_post((string) get_field('partners_title', 'option')); ?></h4>
		</div>
	</div>
	<div class="partner-slide-one js-partner-marquee js-partner-marquee--left">
		<?php if (have_rows('partners_logos', 'option')) : ?>
			<?php while (have_rows('partners_logos', 'option')) : the_row(); ?>
				<div class="partner__slide">
					<?php if (get_sub_field('logo_link')) : ?>
						<a href="<?php echo esc_url((string) (get_sub_field('logo_link')['url'] ?? '#')); ?>" target="<?php echo esc_attr((string) (get_sub_field('logo_link')['target'] ?: '_self')); ?>">
							<img src="<?php echo esc_url((string) (get_sub_field('logo_image')['url'] ?? '')); ?>" alt="<?php echo esc_attr((string) (get_sub_field('logo_image')['alt'] ?? '')); ?>">
						</a>
					<?php else : ?>
						<img src="<?php echo esc_url((string) (get_sub_field('logo_image')['url'] ?? '')); ?>" alt="<?php echo esc_attr((string) (get_sub_field('logo_image')['alt'] ?? '')); ?>">
					<?php endif; ?>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
	<div class="partner-slide-one js-partner-marquee js-partner-marquee--right">
		<?php if (have_rows('partners_logos', 'option')) : ?>
			<?php while (have_rows('partners_logos', 'option')) : the_row(); ?>
				<div class="partner__slide">
					<?php if (get_sub_field('logo_link')) : ?>
						<a href="<?php echo esc_url((string) (get_sub_field('logo_link')['url'] ?? '#')); ?>" target="<?php echo esc_attr((string) (get_sub_field('logo_link')['target'] ?: '_self')); ?>">
							<img src="<?php echo esc_url((string) (get_sub_field('logo_image')['url'] ?? '')); ?>" alt="<?php echo esc_attr((string) (get_sub_field('logo_image')['alt'] ?? '')); ?>">
						</a>
					<?php else : ?>
						<img src="<?php echo esc_url((string) (get_sub_field('logo_image')['url'] ?? '')); ?>" alt="<?php echo esc_attr((string) (get_sub_field('logo_image')['alt'] ?? '')); ?>">
					<?php endif; ?>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>

<section class="bg-dark py-lg-10 py-5">
	<div class="container">
		<div class="row align-items-lg-end text-center text-lg-start">
			<div class="col-lg-4">
				<span class="text-uppercase fw-semibold text-primary"><?php echo esc_html((string) get_field('home_cases_label')); ?></span>
				<h3 class="display-3 text-white mb-0"><?php echo wp_kses_post((string) get_field('home_cases_title')); ?></h3>
			</div>
			<div class="offset-lg-4 col-lg-4 text-md-end text-center mt-lg-0 mt-2">
				<?php if (get_field('home_cases_link')) : ?>
					<a href="<?php echo esc_url((string) (get_field('home_cases_link')['url'] ?? '#')); ?>" target="<?php echo esc_attr((string) (get_field('home_cases_link')['target'] ?: '_self')); ?>" class="btn btn-dark btn-icon">
						<?php echo esc_html((string) (get_field('home_cases_link')['title'] ?? 'Bekijk alles')); ?>
						<span class="btn-icon__icon">
							<i class="fa-sharp fa-light fa-arrow-right"></i>
							<i class="fa-sharp fa-light fa-arrow-right"></i>
						</span>
					</a>
				<?php endif; ?>
			</div>
		</div>
		<div class="row g-3 mt-lg-4 mt-0">
			<?php $loop = new WP_Query( array(
					'post_type' => 'case',
					'posts_per_page' => get_field('home_cases_count') ? (int) get_field('home_cases_count') : -1
				) ); 	?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="col-lg-6">
					<?php get_template_part( 'template-parts/blocks/block', 'case' ); ?>
				</div>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>
</section>


<section class="my-lg-10 my-5">
	<div class="container">
		 <div class="d-flex align-items-center justify-content-between mb-4">
			<h3 class="display-4 fw-semibold"><?php echo wp_kses_post((string) get_field('home_articles_title')); ?></h3>
			<?php if (get_field('home_articles_link')) : ?>
				<a class="default-link" href="<?php echo esc_url((string) (get_field('home_articles_link')['url'] ?? '#')); ?>" target="<?php echo esc_attr((string) (get_field('home_articles_link')['target'] ?: '_self')); ?>"><?php echo esc_html((string) (get_field('home_articles_link')['title'] ?? 'Bekijk alle artikelen')); ?></a>
			<?php endif; ?>
		</div>
		<div class="row">
			<?php $loop = new WP_Query( array(
					'post_type' => 'post',
					'posts_per_page' => get_field('home_articles_count') ? (int) get_field('home_articles_count') : -1
				) ); 	?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="col-lg-4">
					<?php get_template_part( 'template-parts/blocks/block', 'post' ); ?>
				</div>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
