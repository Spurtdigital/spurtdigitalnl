<?php /* Template Name: Page - Cases */ get_header();?>
<section class="bg-light pt-20">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-5">  
                <h1 class="display-1"><?php echo esc_html((string) (get_field('cases_intro_title') ?: get_the_title())); ?></h1>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <p><?php echo wp_kses_post((string) get_field('cases_intro_text')); ?></p>
            </div>
        </div>
    </div>
</section>

<section class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                $loop = new WP_Query( array(
                    'post_type' => 'case',
                    'posts_per_page' => -1,
                ) );
                if ( $loop->have_posts() ) :
                    echo '<div class="row g-3">';
                    $case_index = 0;
                    while ( $loop->have_posts() ) : $loop->the_post();
                        $case_index++;
                        echo '<div class="' . esc_attr(1 === $case_index ? 'col-12' : 'col-12 col-lg-6') . '">';
                        get_template_part('template-parts/blocks/block', 'case', [
                            'alt' => 1 === $case_index,
                            'extra_class' => 1 === $case_index ? '' : 'block-case--dark',
                        ]);
                        echo '</div>';
                    endwhile;
                    echo '</div>';
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
