<div class="block-post position-relative">
    <div class="block-post__media position-relative overflow-hidden">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('medium', ['class' => 'img-abs-center', 'alt' => get_the_title()]); ?>
        <?php endif; ?>
    </div>
    <div class="block-post__content">
        <?php if (get_field('leestijd') || get_the_category_list(', ')) : ?>
            <ul class="reset-list d-flex align-items-center gap-2 mb-2">
                <?php if (get_field('leestijd')) : ?>
                    <li><?php echo esc_html(get_field('leestijd')); ?> minuten</li>
                <?php endif; ?>
                <?php if (get_the_category_list(', ')) : ?>
                    <li><?php echo wp_kses_post(get_the_category_list(', ')); ?></li>
                <?php endif; ?>
            </ul>
        <?php endif; ?>
        <h4 class="display-6 fw-semibold"><?php the_title(); ?></h4>
    </div>
    <a href="<?php the_permalink(); ?>" class="stretched-link"></a>
</div>
