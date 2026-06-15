<main class="builder bg-light">
<?php if ( have_rows( 'builder' ) ) : ?>
    <?php while ( have_rows('builder' ) ) : the_row(); ?>
        <?php if ( get_row_layout() == 'textarea' ) : ?>
            <section class="builder-row">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-11">
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
                            <div class="col-xl-11">
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
                        <div class="col-xl-11">
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
                            <div class="col-xl-11">
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
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
</main>