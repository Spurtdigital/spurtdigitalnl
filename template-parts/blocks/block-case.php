<?php
$is_alt = !empty($args['alt']);
$extra_class = !empty($args['extra_class']) ? ' ' . (string) $args['extra_class'] : '';
?>
<div class="block-case<?php echo $is_alt ? ' block-case--alt' : ''; ?><?php echo esc_attr($extra_class); ?> position-relative">
    <div class="block-case__media position-relative overflow-hidden">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('medium', ['class' => 'img-abs-center', 'alt' => get_the_title()]); ?>
        <?php endif; ?>
    </div>
    <div class="block-case__content">
        <span class="text-label">Platform</span>
        <h4 class="display-5 fw-semibold"><?php the_title(); ?></h4>
        <span class="block-case__icon" aria-hidden="true">
            <i class="fa-light fa-arrow-up-right"></i>
            <i class="fa-light fa-arrow-up-right"></i>
        </span>
    </div>
    <a href="<?php the_permalink(); ?>" class="stretched-link"></a>
</div>
