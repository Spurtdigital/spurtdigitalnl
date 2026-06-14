<div class="block-dienst position-relative">
    <div class="block-dienst__media position-relative overflow-hidden">
        <?php
        $icoon = get_field('icoon'); // Zorg dat 'icoon' een ACF afbeeldingsveld is
        if (!empty($icoon)) :
        ?>
            <img src="<?php echo $icoon['url']; ?>" alt="<?php echo $icoon['alt']; ?>" class="img-abs-center img-abs-center--contain" />
        <?php endif; ?>
    </div>
    <div class="block-dienst__content d-flex justify-content-between align-items-center">
        <h4 class="display-6"><?php the_title(); ?></h4>
        <i class="fa-sharp fa-solid fa-arrow-right"></i>
    </div>
    <a href="<?php the_permalink(); ?>" class="stretched-link"></a>
</div>
