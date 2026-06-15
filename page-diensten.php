<?php /* Template Name: Page - Diensten */ get_header();?>
<section class="bg-light pt-24">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-5">  
                <h1 class="display-1"><?php echo function_exists('creators_markdown') ? creators_markdown((string) (get_field('diensten_intro_title') ?: get_the_title())) : wp_kses_post((string) (get_field('diensten_intro_title') ?: get_the_title())); ?></h1>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <p><?php echo wp_kses_post((string) get_field('diensten_intro_text')); ?></p>
            </div>
        </div>
    </div>
</section>

<section class="bg-light py-14">
    <div class="container">
        <?php if (have_rows('diensten_sections')) : ?>
            <?php $diensten_index = 0; ?>
            <?php while (have_rows('diensten_sections')) : the_row(); ?>
                <?php $diensten_index++; ?>
                <div class="service-row row<?php echo $diensten_index > 1 ? ' mt-lg-18 mt-5' : ''; ?> align-items-stretch">
                    <div class="col-lg-5 py-lg-3 <?php echo 0 === $diensten_index % 2 ? ' offset-lg-1 order-lg-2' : ''; ?>">
                        <h2 class="display-4 mb-lg-2 mb-1"><?php echo esc_html((string) get_sub_field('title')); ?></h2>
                        <p class="mb-0"><?php echo wp_kses_post((string) get_sub_field('text')); ?></p>
                        <?php if (have_rows('benefits')) : ?>
                            <ul class="reset-list service-row__benefits my-lg-2 my-1">
                                <?php while (have_rows('benefits')) : the_row(); ?>
                                    <li><?php echo esc_html((string) get_sub_field('text')); ?></li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                        <?php if (have_rows('pills')) : ?>
                            <ul class="service-row__pills mb-lg-2 mb-1 reset-list">
                                <?php while (have_rows('pills')) : the_row(); ?>
                                    <?php if (get_sub_field('link')) : ?>
                                        <li><a href="<?php echo esc_url((string) (get_sub_field('link')['url'] ?? '#')); ?>" target="<?php echo esc_attr((string) (get_sub_field('link')['target'] ?: '_self')); ?>"><?php echo esc_html((string) (get_sub_field('link')['title'] ?? '')); ?></a></li>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                        <?php if (get_sub_field('button_link') && function_exists('spurt_add_btns')) : ?>
                            <?php spurt_add_btns([[
                                'link' => get_sub_field('button_link'),
                                'color' => (string) get_sub_field('button_color') ?: 'dark',
                                'icon' => (string) get_sub_field('button_icon') ?: 'arrow-right',
                            ]]); ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-6<?php echo 0 === $diensten_index % 2 ? ' order-lg-1' : ' offset-lg-1'; ?>">
                        <div class="service-row__media position-relative ">

                            <?php if (get_sub_field('stat_value') || get_sub_field('stat_label')) : ?>
                                <span><?php echo esc_html((string) get_sub_field('stat_value')); ?> <small><?php echo esc_html((string) get_sub_field('stat_label')); ?></small></span>
                                <?php endif; ?>
                                <?php if (get_sub_field('image')) : ?>
                                    <img class="img-abs-center" src="<?php echo esc_url((string) (get_sub_field('image')['url'] ?? '')); ?>" alt="<?php echo esc_attr((string) (get_sub_field('image')['alt'] ?? get_sub_field('title'))); ?>" class="img-fluid rounded-3">
                                    <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>
