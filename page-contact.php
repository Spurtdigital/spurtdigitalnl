<?php /* Template Name: Page - Contact */ get_header(); ?>

<section class="pt-xl-20 bg-light pb-lg-9">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <h1 class="display-2">
                    <?php echo function_exists('creators_markdown') ? creators_markdown((string) (get_field('contact_intro_title') ?: get_the_title())) : wp_kses_post((string) (get_field('contact_intro_title') ?: get_the_title())); ?>
                </h1>
                <p class="mb-lg-3"><?php echo wp_kses_post((string) get_field('contact_intro_text')); ?></p>
                <div class="contact-item d-flex align-items-center gap-2 py-lg-2 py-1border-top">
                    <i class="fa-regular fa-phone"></i>
                    <div>
                        <span class="text-uppercase">Bellen</span>
                        <strong>0592 201 141</strong>
                    </div>
                </div>
                <div class="contact-item d-flex align-items-center gap-2 py-lg-2 py-1 border-top">
                    <i class="fa-regular fa-phone"></i>
                    <div>
                        <span class="text-uppercase">Mailen</span>
                        <strong>0592 201 141</strong>
                    </div>
                </div>
                <div class="contact-item d-flex align-items-center gap-2 py-lg-2 py-1 border-top">
                    <i class="fa-regular fa-phone"></i>
                    <div>
                        <span class="text-uppercase">Appen</span>
                        <strong>0592 201 141</strong>
                    </div>
                </div>
                <?php spurt_social(); ?>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <div class="bg-white px-5 pt-6 pb-3 rounded-3">
                    <span
                        class="text-uppercase text-green d-block fw-semibold lh-1"><?php echo esc_html((string) get_field('contact_form_label')); ?></span>
                    <span
                        class="display-3 fw-bold"><?php echo esc_html((string) get_field('contact_intro_subtitle')); ?></span>
                    <?php if (get_field('contact_form_shortcode')): ?>
                        <?php echo do_shortcode((string) get_field('contact_form_shortcode')); ?>
                    <?php endif; ?>
                    <span class="d-block text-center mt-lg-2">We reageren binnen één werkdag</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-lg-10">
        <div class="row">
            <div class="col-xl-8 mx-auto">
                <div class="text-center">
                    <span class="text-uppercase text-green fw-semibold">Veelgestelde vragen</span>
                    <h4 class="display-4">Misschien staat je antwoord er al.</h4>
                </div>
                <div class="faq-item">
                    <div class="js-faq-header faq-header">
                        Wat kost een maatwerk website?
                        <!-- Hier een plus icoon toevoegen -->
                    </div>
                    <div class="faq-content">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut, aspernatur modi. Molestias iusto praesentium, exercitationem sequi, enim expedita, totam pariatur id rerum debitis odit ullam sit veritatis. Corporis, fugit sapiente!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>