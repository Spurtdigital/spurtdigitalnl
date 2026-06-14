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

<section>
	<div class="container mb-lg-5">
		<div class="row align-items-end">
			<div class="col-lg-6">
				<h2 class="display-2">Alles onder 1 dak</h2>
			</div>
			<div class="col-lg-5 offset-lg-1">
				<p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec suscipit auctor dui, at convallis nisl. Donec in semper nunc. Donec suscipit auctor dui, at conv</p>
			</div>
		</div>
		<!-- ACF repeater -->
		<div class="row g-3 mt-lg-6">
			<div class="col-12">
				<div class="block-service-featured d-flex align-items-stretch h-100">
					<div class="block-service-featured__content">
						<h3 class="display-3 mb-2 fw-semibold">Maatwerk websites</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, provident, vel unde veritatis delectus non assumenda eum itaque commodi qui aliquam similique, rem perferendis alias harum iusto. Natus, aliquam totam.</p>
						<a href="#" class="block-service__link">Meer hierover <i class="fa-sharp fa-light fa-arrow-right ms-1 small"></i></a>
					</div>
					<div class="block-service-featured__media position-relative overflow-hidden">
						<img class="img-abs-center" src="https://placeholdit.com/600x400/dddddd/999999" alt="">
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="block-service">
					<div class="block-service__media">
						<img src="" alt="">
					</div>
					<div class="block-service__content">
						<h3 class="display-5 fw-semibold">Webshops</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.  Autem vel quibusdam iure sint necessitatibus praesentium explicabo mollitia </p>

						<ul class="reset-list">
							<li><a href="#">Shopify</a></li>
							<li><a href="#">Shopify</a></li>
						</ul>
						<a href="#" class="block-service__link">Meer hierover <i class="fa-sharp fa-light fa-arrow-right ms-1 small"></i></a>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="block-service">
					<div class="block-service__media">
						<img src="" alt="">
					</div>
					<div class="block-service__content">
						<h3 class="display-5 fw-semibold">Webshops</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.  Autem vel quibusdam iure sint necessitatibus praesentium explicabo mollitia </p>

						<ul class="reset-list">
							<li><a href="#">Shopify</a></li>
							<li><a href="#">Shopify</a></li>
						</ul>
						<a href="#" class="block-service__link">Meer hierover <i class="fa-sharp fa-light fa-arrow-right ms-1 small"></i></a>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="block-service">
					<div class="block-service__media">
						<img src="" alt="">
					</div>
					<div class="block-service__content">
						<h3 class="display-5 fw-semibold">Webshops</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.  Autem vel quibusdam iure sint necessitatibus praesentium explicabo mollitia </p>

						<ul class="reset-list">
							<li><a href="#">Shopify</a></li>
							<li><a href="#">Shopify</a></li>
						</ul>
						<a href="#" class="block-service__link">Meer hierover <i class="fa-sharp fa-light fa-arrow-right ms-1 small"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="home-partners bg-light py-xl-14">
	<div class="container mb-lg-8">
		<div class="col-xl-6 mx-auto text-center">
			<h4 class="display-3">
				Wij werken samen met ruim <strong>100</strong> partners
			</h4>
		</div>
	</div>
	<div class="partner-slide-one js-partner-marquee js-partner-marquee--left">
		<div class="partner__slide">
			<img src="https://t4.ftcdn.net/jpg/06/96/89/13/360_F_696891328_utj80ZwXsdy8SloC9IBaFGDIcGNBrEze.jpg" alt="">
		</div>
		<div class="partner__slide">
			<img src="https://t4.ftcdn.net/jpg/06/96/89/13/360_F_696891328_utj80ZwXsdy8SloC9IBaFGDIcGNBrEze.jpg" alt="">
		</div>
		<div class="partner__slide">
			<img src="https://t4.ftcdn.net/jpg/06/96/89/13/360_F_696891328_utj80ZwXsdy8SloC9IBaFGDIcGNBrEze.jpg" alt="">
		</div>
		<div class="partner__slide">
			<img src="https://t4.ftcdn.net/jpg/06/96/89/13/360_F_696891328_utj80ZwXsdy8SloC9IBaFGDIcGNBrEze.jpg" alt="">
		</div>
		<div class="partner__slide">
			<img src="https://t4.ftcdn.net/jpg/06/96/89/13/360_F_696891328_utj80ZwXsdy8SloC9IBaFGDIcGNBrEze.jpg" alt="">
		</div>
		<div class="partner__slide">
			<img src="https://t4.ftcdn.net/jpg/06/96/89/13/360_F_696891328_utj80ZwXsdy8SloC9IBaFGDIcGNBrEze.jpg" alt="">
		</div>
	</div>
	<div class="partner-slide-one js-partner-marquee js-partner-marquee--right">
		<div class="partner__slide">
			<img src="https://t4.ftcdn.net/jpg/06/96/89/13/360_F_696891328_utj80ZwXsdy8SloC9IBaFGDIcGNBrEze.jpg" alt="">
		</div>
		<div class="partner__slide">
			<img src="https://t4.ftcdn.net/jpg/06/96/89/13/360_F_696891328_utj80ZwXsdy8SloC9IBaFGDIcGNBrEze.jpg" alt="">
		</div>
		<div class="partner__slide">
			<img src="https://t4.ftcdn.net/jpg/06/96/89/13/360_F_696891328_utj80ZwXsdy8SloC9IBaFGDIcGNBrEze.jpg" alt="">
		</div>
		<div class="partner__slide">
			<img src="https://t4.ftcdn.net/jpg/06/96/89/13/360_F_696891328_utj80ZwXsdy8SloC9IBaFGDIcGNBrEze.jpg" alt="">
		</div>
		<div class="partner__slide">
			<img src="https://t4.ftcdn.net/jpg/06/96/89/13/360_F_696891328_utj80ZwXsdy8SloC9IBaFGDIcGNBrEze.jpg" alt="">
		</div>
		<div class="partner__slide">
			<img src="https://t4.ftcdn.net/jpg/06/96/89/13/360_F_696891328_utj80ZwXsdy8SloC9IBaFGDIcGNBrEze.jpg" alt="">
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
