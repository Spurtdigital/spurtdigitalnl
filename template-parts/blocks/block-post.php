<div class="block-post position-relative">
    <div class="block-post__media position-relative overflow-hidden">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('medium', ['class' => 'img-abs-center', 'alt' => get_the_title()]); ?>
        <?php endif; ?>
    </div>
    <div class="block-post__content">
        <h4 class="display-6"><?php the_title(); ?></h4>
    </div>
    <a href="<?php the_permalink(); ?>" class="stretched-link"></a>
</div>
