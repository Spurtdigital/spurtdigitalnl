<?php get_header();?>

<section class="bg-light pt-24 pb-16">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <?php if (get_field('case_related_content')) : ?>
                        <ul class="case__list reset-list d-flex gap-1 mb-1">
                            <?php foreach (get_field('case_related_content') as $related_post) : ?>
                                <li>
                                    <a href="<?php echo esc_url(get_permalink($related_post)); ?>"><?php echo esc_html(get_the_title($related_post)); ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <h1 class="case__title"><?php echo esc_html(get_the_title()); ?></h1>
                    <p class="case__intro lead mb-lg-8"><?php echo wp_kses_post((string) get_field('case_intro_text')); ?></p>
                </div>
                <div class="col-xl-11">
                    <div class="case__media position-relative overflow-hidden">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large', ['class' => 'img-abs-center', 'alt' => get_the_title()]); ?>
                        <?php endif; ?>
                    </div>
                    <?php if (have_rows('case_meta_items')) : ?>
                        <ul class="reset-list d-flex gap-2 justify-content-between mt-lg-8">
                            <?php while (have_rows('case_meta_items')) : the_row(); ?>
                                <li>
                                    <span class="text-uppercase small fw-semibold text-muted d-block lh-1"><?php echo esc_html((string) get_sub_field('label')); ?></span>
                                    <?php if (get_sub_field('link') && get_sub_field('value')) : ?>
                                        <a class="text-dark text-decoration-none" href="<?php echo esc_url((string) (get_sub_field('link')['url'] ?? '')); ?>" target="<?php echo esc_attr((string) (get_sub_field('link')['target'] ?? '_self')); ?>" rel="noopener noreferrer"><strong><?php echo esc_html((string) get_sub_field('value')); ?></strong></a>
                                    <?php else : ?>
                                        <strong><?php echo esc_html((string) get_sub_field('value')); ?></strong>
                                    <?php endif; ?>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                    <hr>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</section>

<?php get_template_part( 'template-parts/layouts/layout', 'builder' ); ?>

<?php
$previous_case = get_previous_post(false);
$next_case = get_next_post(false);
$case_archive_url = get_post_type_archive_link('case');
?>

<section class="bg-light pb-16">
    <div class="container">
        <div class="case-nav">
            <div class="row g-2 g-lg-3">
                <div class="col-lg-6">
                    <?php if ($previous_case) : ?>
                        <a class="case-nav__card case-nav__card--previous" href="<?php echo esc_url(get_permalink($previous_case)); ?>">
                            <span class="case-nav__kicker">Vorige case</span>
                            <span class="case-nav__title"><?php echo esc_html(get_the_title($previous_case)); ?></span>
                            <span class="case-nav__icon" aria-hidden="true">
                                <i class="fa-sharp fa-light fa-arrow-left"></i>
                                <i class="fa-sharp fa-light fa-arrow-left"></i>
                            </span>
                        </a>
                    <?php else : ?>
                        <a class="case-nav__card case-nav__card--empty" href="<?php echo esc_url($case_archive_url ?: home_url('/')); ?>">
                            <span class="case-nav__kicker">Vorige case</span>
                            <span class="case-nav__title">Bekijk alle cases</span>
                            <span class="case-nav__icon" aria-hidden="true">
                                <i class="fa-sharp fa-light fa-grid-2"></i>
                                <i class="fa-sharp fa-light fa-grid-2"></i>
                            </span>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="col-lg-6">
                    <?php if ($next_case) : ?>
                        <a class="case-nav__card case-nav__card--next" href="<?php echo esc_url(get_permalink($next_case)); ?>">
                            <span class="case-nav__kicker">Volgende case</span>
                            <span class="case-nav__title"><?php echo esc_html(get_the_title($next_case)); ?></span>
                            <span class="case-nav__icon" aria-hidden="true">
                                <i class="fa-sharp fa-light fa-arrow-right"></i>
                                <i class="fa-sharp fa-light fa-arrow-right"></i>
                            </span>
                        </a>
                    <?php else : ?>
                        <a class="case-nav__card case-nav__card--empty" href="<?php echo esc_url($case_archive_url ?: home_url('/')); ?>">
                            <span class="case-nav__kicker">Volgende case</span>
                            <span class="case-nav__title">Bekijk alle cases</span>
                            <span class="case-nav__icon" aria-hidden="true">
                                <i class="fa-sharp fa-light fa-grid-2"></i>
                                <i class="fa-sharp fa-light fa-grid-2"></i>
                            </span>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_template_part('template-parts/layouts/layout', 'partners'); ?>

<?php get_footer();?>