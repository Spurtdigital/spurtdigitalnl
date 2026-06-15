<?php get_header(); ?>

<section class="bg-light pt-24 pb-16">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <?php
            $dienst_id = get_the_ID();
            $dienst_title = get_field('dienst_title', $dienst_id);

            if (!$dienst_title) {
                $dienst_title = get_the_title($dienst_id);
            }

            $contact_page = get_page_by_path('contact');
            $cases_page = get_page_by_path('cases');
            $contact_url = $contact_page ? get_permalink($contact_page) : home_url('/contact/');
            $cases_url = $cases_page ? get_permalink($cases_page) : home_url('/cases/');
            ?>
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <h1 class="dienst-header__title"><?php echo function_exists('creators_markdown') ? creators_markdown((string) $dienst_title) : wp_kses_post((string) $dienst_title); ?></h1>

                    <?php if (get_field('dienst_intro_text')) : ?>
                        <p class="dienst-header__intro lead mb-lg-8"><?php echo wp_kses_post((string) get_field('dienst_intro_text')); ?></p>
                    <?php endif; ?>

                    <?php if (function_exists('spurt_add_btns')) : ?>
                        <?php spurt_add_btns([
                            [
                                'link' => [
                                    'url' => $contact_url,
                                    'title' => __('Contact opnemen', 'spurtdigitalnl'),
                                    'target' => '_self',
                                ],
                                'color' => 'primary',
                                'icon' => 'arrow-right',
                            ],
                            [
                                'link' => [
                                    'url' => $cases_url,
                                    'title' => __('Bekijk cases', 'spurtdigitalnl'),
                                    'target' => '_self',
                                ],
                                'color' => 'dark',
                                'icon' => 'arrow-right',
                            ],
                        ], 'd-flex flex-wrap gap-2 mt-4'); ?>
                    <?php endif; ?>
                </div>

                <div class="col-xl-11">
                    <div class="dienst-header__media position-relative overflow-hidden">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large', ['class' => 'img-abs-center', 'alt' => get_the_title()]); ?>
                        <?php endif; ?>
                    </div>
                    <hr>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</section>

<?php get_template_part('template-parts/layouts/layout', 'builder'); ?>

<?php get_template_part('template-parts/layouts/layout', 'partners'); ?>

<?php get_footer(); ?>