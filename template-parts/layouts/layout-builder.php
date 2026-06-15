<?php
$is_alt_builder = !empty($args['alt']);
$builder_col_class = $is_alt_builder ? 'col-xl-7' : 'col-xl-11';
?>
<main class="builder bg-light <?php echo $is_alt_builder ? 'builder--alt' : ''; ?>">
<?php if ( have_rows( 'builder' ) ) : ?>
    <?php while ( have_rows('builder' ) ) : the_row(); ?>
        <?php if ( get_row_layout() == 'textarea' ) : ?>
            <section class="builder-row">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="<?php echo esc_attr($builder_col_class); ?>">
                            <?php if (get_sub_field('title_left')) : ?>
                                <div class="row g-4 align-items-start">
                                    <div class="col-lg-5">
                            <?php endif; ?>
                          <?php if (get_sub_field('label')) : ?>
                                <span class="text-label"><?php echo esc_html((string) get_sub_field('label')); ?></span>
                            <?php endif; ?>
                            <?php if (get_sub_field('title')) : ?>
                                <h2 class="display-4"><?php echo esc_html((string) get_sub_field('title')); ?></h2>
                            <?php endif; ?>
                            <?php if (get_sub_field('title_left')) : ?>
                                    </div>
                                    <div class="col-lg-6 offset-lg-1">
                            <?php endif; ?>
                            <?php echo wp_kses_post((string) get_sub_field('content')); ?>
                            <?php if (function_exists('spurt_render_btns')) : ?>
                                <?php spurt_render_btns('buttons', 'd-flex flex-wrap gap-2 mt-3', true); ?>
                            <?php endif; ?>

                            <?php if (get_sub_field('title_left')) : ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if ( get_row_layout() == 'images' ) : ?>
            <?php if (get_sub_field('images')) : ?>
                <section class="builder-row">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="<?php echo esc_attr($builder_col_class); ?>">
                                <div class="row g-3 g-lg-4">
                                    <?php foreach (get_sub_field('images') as $item) : ?>
                                        <div class="<?php echo count(get_sub_field('images')) === 1 ? 'col-lg-12' : 'col-lg-6'; ?>">
                                            <div class="builder__media <?php echo count(get_sub_field('images')) === 1 ? 'builder__media--single' : 'builder__media--double'; ?> position-relative overflow-hidden">
                                                <img class="img-abs-center" src="<?php echo esc_url((string) ($item['image']['url'] ?? '')); ?>" alt="<?php echo esc_attr((string) ($item['image']['alt'] ?? '')); ?>">
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>

        <?php elseif ( get_row_layout() == 'quote' ) : ?>
            <section class="builder-row">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="<?php echo esc_attr($builder_col_class); ?>">
                            <div class="builder-quote position-relative">
                                <div class="col-xl-7">
                                    <?php if (get_sub_field('quote')) : ?>
                                        <blockquote class="builder-quote__text mb-lg-7 mb-4"><?php echo esc_html((string) get_sub_field('quote')); ?></blockquote>
                                    <?php endif; ?>
                                    <?php if (get_sub_field('author') || get_sub_field('author_role') || get_sub_field('author_image')) : ?>
                                        <div class="d-flex align-items-center gap-2">
                                            <?php if (get_sub_field('author_image')) : ?>
                                                <div class="builder-quote__media position-relative overflow-hidden">
                                                    <img class="img-abs-center" src="<?php echo esc_url((string) (get_sub_field('author_image')['url'] ?? '')); ?>" alt="<?php echo esc_attr((string) (get_sub_field('author_image')['alt'] ?? get_sub_field('author'))); ?>">
                                                </div>
                                            <?php endif; ?>
                                           <div class="text-light">
                                                <?php if (get_sub_field('author')) : ?>
                                                    <cite class="builder-quote__author fw-bold"><?php echo esc_html((string) get_sub_field('author')); ?></cite>
                                                <?php endif; ?>
                                                <?php if (get_sub_field('author_role')) : ?>
                                                    <span class="d-block"><?php echo esc_html((string) get_sub_field('author_role')); ?></span>
                                                <?php endif; ?>
                                           </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php elseif ( get_row_layout() == 'split_content' ) : ?>
                <section class="builder-row">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="<?php echo esc_attr($builder_col_class); ?>">
                                <div class="row g-lg-5 g-3 align-items-stretch builder-split">
                                    <div class="col-lg-6 <?php echo get_sub_field('image_left') ? 'order-lg-2' : ''; ?>">
                                        <div class="builder-split__content py-lg-6">
                                            <?php if (get_sub_field('content')) : ?>
                                                <?php echo wp_kses_post((string) get_sub_field('content')); ?>
                                            <?php endif; ?>
                                            <?php if (function_exists('spurt_render_btns')) : ?>
                                                <?php spurt_render_btns('buttons', 'd-flex flex-wrap gap-2 mt-3', true); ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 <?php echo get_sub_field('image_left') ? 'order-lg-1' : ''; ?>">
                                        <?php if (get_sub_field('image')) : ?>
                                            <div class="builder__media builder-split__media position-relative overflow-hidden h-100">
                                                <img class="img-abs-center" src="<?php echo esc_url((string) (get_sub_field('image')['url'] ?? '')); ?>" alt="<?php echo esc_attr((string) (get_sub_field('image')['alt'] ?? '')); ?>">
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            <?php elseif ( get_row_layout() == 'faq' ) : ?>
                <section class="builder-row">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="<?php echo esc_attr($builder_col_class); ?>">
                                <?php if (get_sub_field('faq_kicker') || get_sub_field('faq_title')) : ?>
                                    <div class="col-xl-5 mb-lg-8 mb-4">
                                        <?php if (get_sub_field('faq_kicker')) : ?>
                                            <span class="text-uppercase text-green fw-semibold"><?php echo esc_html((string) get_sub_field('faq_kicker')); ?></span>
                                        <?php endif; ?>
                                        <?php if (get_sub_field('faq_title')) : ?>
                                            <h4 class="display-4"><?php echo esc_html((string) get_sub_field('faq_title')); ?></h4>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>

                                <?php if (have_rows('faq_items')) : ?>
                                    <?php while (have_rows('faq_items')) : the_row(); ?>
                                        <div class="faq-item faq-item--alt">
                                            <div class="js-faq-header faq-header">
                                                <h4 class="mb-0"><?php echo esc_html((string) get_sub_field('question')); ?></h4>
                                                <span class="faq-header__icon" aria-hidden="true">+</span>
                                            </div>
                                            <div class="faq-content">
                                                <p class="mb-0 text-gray-500"><?php echo wp_kses_post((string) get_sub_field('answer')); ?></p>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </section>

            <?php elseif ( get_row_layout() == 'cta' ) : ?>
                <section class="builder-row">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="<?php echo esc_attr($builder_col_class); ?>">
                                <div class="builder-cta position-relative text-center <?php echo esc_attr((string) (get_sub_field('cta_background') ?: get_field('builder_cta_background', 'option') ?: 'bg-dark')); ?>">
                                    <?php if (get_sub_field('cta_title') || get_field('builder_cta_title', 'option')) : ?>
                                        <h3 class="display-3 builder-cta__title"><?php echo esc_html((string) (get_sub_field('cta_title') ?: get_field('builder_cta_title', 'option'))); ?></h3>
                                    <?php endif; ?>

                                    <?php if (get_sub_field('cta_subtitle') || get_field('builder_cta_subtitle', 'option')) : ?>
                                        <p class="builder-cta__subtitle mb-0"><?php echo wp_kses_post((string) (get_sub_field('cta_subtitle') ?: get_field('builder_cta_subtitle', 'option'))); ?></p>
                                    <?php endif; ?>

                                    <?php if ((get_sub_field('cta_button_link') || get_field('builder_cta_button_link', 'option')) && function_exists('spurt_add_btns')) : ?>
                                        <?php spurt_add_btns([[
                                            'link' => get_sub_field('cta_button_link') ?: get_field('builder_cta_button_link', 'option'),
                                            'color' => (string) (get_sub_field('cta_button_color') ?: get_field('builder_cta_button_color', 'option') ?: 'primary'),
                                            'icon' => (string) (get_sub_field('cta_button_icon') ?: get_field('builder_cta_button_icon', 'option') ?: 'arrow-right'),
                                        ]], 'justify-content-center d-flex mt-4'); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
</main>