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
