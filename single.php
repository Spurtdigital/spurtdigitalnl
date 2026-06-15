<?php get_header(); ?>

<section class="bg-light pt-24 pb-16">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <?php
            $post_categories = get_the_category();
            $single_intro = get_field('case_intro_text');
            $single_read_time = get_field('leestijd');

            if (!$single_read_time) {
                $content_word_count = str_word_count(wp_strip_all_tags(get_the_content()));
                $single_read_time = max(1, (int) ceil($content_word_count / 200));
            }

            if (!$single_intro) {
                $single_intro = get_the_excerpt();
            }
            ?>
            <div class="row justify-content-center">
                <div class="col-xl-10 text-center">
                    <?php if (!empty($post_categories)) : ?>
                        <ul class="single-header__list reset-list justify-content-center d-flex gap-1 mb-1 flex-wrap">
                            <?php foreach ($post_categories as $post_category) : ?>
                                <li>
                                    <a href="<?php echo esc_url(get_category_link($post_category->term_id)); ?>"><?php echo esc_html($post_category->name); ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <h1 class="single-header__title"><?php echo esc_html(get_the_title()); ?></h1>
                    <?php if ($single_intro) : ?>
                        <p class="single-header__intro lead mb-3"><?php echo wp_kses_post((string) $single_intro); ?></p>
                    <?php endif; ?>

                    <ul class="single-header__meta reset-list justify-content-center d-flex gap-2 small mb-lg-4 flex-wrap">
                        <li><?php echo esc_html__('Door', 'spurtdigitalnl'); ?> <?php echo esc_html(get_the_author()); ?></li>
                        <li aria-hidden="true">&middot;</li>
                        <li><?php echo esc_html(get_the_date('j F Y')); ?></li>
                        <li aria-hidden="true">&middot;</li>
                        <li><?php echo esc_html((string) $single_read_time); ?> <?php echo esc_html__('min lezen', 'spurtdigitalnl'); ?></li>
                    </ul>
                </div>
                <div class="col-xl-12">
                    <div class="single-header__media position-relative overflow-hidden">
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


<?php get_template_part('template-parts/layouts/layout', 'builder', ['alt' => true]); ?>

<?php
$single_post_id = get_queried_object_id();
$related_category_ids = wp_list_pluck(get_the_category($single_post_id), 'term_id');

$related_posts_args = [
    'post_type' => 'post',
    'posts_per_page' => 3,
    'post__not_in' => [$single_post_id],
    'ignore_sticky_posts' => true,
];

if (!empty($related_category_ids)) {
    $related_posts_args['category__in'] = $related_category_ids;
}

$related_posts_query = new WP_Query($related_posts_args);

if (!$related_posts_query->have_posts()) {
    $related_posts_query = new WP_Query([
        'post_type' => 'post',
        'posts_per_page' => 3,
        'post__not_in' => [$single_post_id],
        'ignore_sticky_posts' => true,
    ]);
}
?>

<?php if ($related_posts_query->have_posts()) : ?>
    <section class="single-related bg-light pb-16">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="single-related__head d-flex align-items-end justify-content-between mb-3">
                        <h3 class="display-4 mb-0"><?php echo esc_html__('Gerelateerde berichten', 'spurtdigitalnl'); ?></h3>
                    </div>

                    <div class="js-single-related-slider single-related__slider">
                        <?php while ($related_posts_query->have_posts()) : $related_posts_query->the_post(); ?>
                            <div class="single-related__slide">
                                <?php get_template_part('template-parts/blocks/block', 'post', ['alt' => true]); ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>



<?php get_footer(); ?>