<?php get_header();?>

<section class="bg-light py-24">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <div class="row">
                <div class="col-lg-8">
                    <?php if (get_field('case_related_content')) : ?>
                        <ul class="reset-list d-flex gap-1">
                            <?php foreach (get_field('case_related_content') as $related_post) : ?>
                                <li>
                                    <a href="<?php echo esc_url(get_permalink($related_post)); ?>"><?php echo esc_html(get_the_title($related_post)); ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <h1 class="display-2"><?php echo esc_html(get_the_title()); ?></h1>
                    <p><?php echo wp_kses_post((string) get_field('case_intro_text')); ?></p>
                </div>
                <div class="col-lg-8">
                    <div class="case__media">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large', ['class' => 'img-fluid', 'alt' => get_the_title()]); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</section>

<?php get_footer();?>