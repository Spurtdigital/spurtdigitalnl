<div class="block-case position-relative">
    <div class="block-case__media position-relative overflow-hidden">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('medium', ['class' => 'img-abs-center', 'alt' => get_the_title()]); ?>
        <?php endif; ?>
    </div>
    <div class="block-case__content">
        <span class="block-case__label">Platform</span>
        <h4 class="display-5 fw-semibold"><?php the_title(); ?></h4>
        <i class="fa-light fa-arrow-up-right"></i>
    </div>
    <a href="<?php the_permalink(); ?>" class="stretched-link"></a>
</div>
