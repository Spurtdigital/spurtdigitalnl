<?php get_header(); ?>

<section class="pt-28 pb-xl-20 pb-lg-16 pb-10 bg-light">
    <div class="container">
        <div class="col-xl-8 mx-auto text-center">
        <h1 class="display-3 mb-lg-3 mb-2"><?php _e('Sorry, we kunnen deze pagina niet meer vinden', 'creators'); ?></h1>
        <p><?php echo sprintf(__('We hebben ons best gedaan, maar het lijkt erop dat deze pagina niet (meer) bestaat of misschien verhuisd is. Je kunt natuurlijk altijd naar de <a href="%s">homepage</a>.', 'creators'), home_url()); ?></p>
    </div>
    </div>
</section>

<?php get_footer(); ?>