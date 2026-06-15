<?php /* Template Name: Page - Contact */ get_header(); ?>

<section class="pt-md-24 pt-18 bg-light pb-lg-14 pb-5">
    <div class="container">
        <div class="row gy-3 align-items-center">
            <div class="col-lg-5">
                <h1 class="display-2">
                    <?php echo function_exists('creators_markdown') ? creators_markdown((string) (get_field('contact_intro_title') ?: get_the_title())) : wp_kses_post((string) (get_field('contact_intro_title') ?: get_the_title())); ?>
                </h1>
                <p class="mb-lg-3"><?php echo wp_kses_post((string) get_field('contact_intro_text')); ?></p>
                <?php if (get_field('algemeen_telefoonnummer', 'option')) : ?>
                    <div class="contact-item d-flex align-items-center gap-2 py-lg-2 py-1 border-top">
                        <i class="fa-regular fa-phone"></i>
                        <div>
                            <span class="text-uppercase"><?php echo esc_html((string) get_field('contact_phone_label')); ?></span>
                            <strong><a href="tel:<?php echo esc_attr(preg_replace('/[^0-9\+]/', '', (string) get_field('algemeen_telefoonnummer', 'option'))); ?>"><?php echo esc_html((string) get_field('algemeen_telefoonnummer', 'option')); ?></a></strong>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (get_field('algemeen_mailadres', 'option')) : ?>
                    <div class="contact-item d-flex align-items-center gap-2 py-lg-2 py-1 border-top">
                        <i class="fa-regular fa-envelope"></i>
                        <div>
                            <span class="text-uppercase"><?php echo esc_html((string) get_field('contact_mail_label')); ?></span>
                            <strong><a href="mailto:<?php echo esc_attr((string) get_field('algemeen_mailadres', 'option')); ?>"><?php echo esc_html((string) get_field('algemeen_mailadres', 'option')); ?></a></strong>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (get_field('algemeen_whatsapp', 'option')) : ?>
                    <div class="contact-item d-flex align-items-center gap-2 py-lg-2 py-1 border-top">
                        <i class="fa-brands fa-whatsapp"></i>
                        <div>
                            <span class="text-uppercase"><?php echo esc_html((string) get_field('contact_whatsapp_label')); ?></span>
                            <strong><a href="https://wa.me/<?php echo esc_attr(preg_replace('/[^0-9]/', '', (string) get_field('algemeen_whatsapp', 'option'))); ?>" target="_blank" rel="noopener"><?php echo esc_html((string) get_field('algemeen_whatsapp', 'option')); ?></a></strong>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="social-media mt-lg-3 mt-2">
                    <?php spurt_social(); ?>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <div class="bg-white px-lg-5 px-3 pt-lg-6 pt-4 pb-3 rounded-3">
                    <span class="text-label"><?php echo esc_html((string) get_field('contact_form_label')); ?></span>
                    <span class="display-4 d-block mb-lg-3 mb-1"><?php echo esc_html((string) get_field('contact_intro_subtitle')); ?></span>
                    <?php if (get_field('contact_form_shortcode')): ?>
                        <?php echo do_shortcode((string) get_field('contact_form_shortcode')); ?>
                    <?php endif; ?>
                    <span class="d-block text-center mt-lg-2 mt-1 small text-muted"><?php echo esc_html((string) get_field('contact_form_response_text')); ?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-lg-16 mt-8">
        <div class="row">
            <div class="col-xl-8 mx-auto">
                <div class="text-center mb-lg-8 mb-4">
                    <span class="text-uppercase text-green fw-semibold"><?php echo esc_html((string) get_field('contact_faq_kicker')); ?></span>
                    <h4 class="display-4"><?php echo esc_html((string) get_field('contact_faq_title')); ?></h4>
                </div>
                <?php if (have_rows('contact_faq_items')) : ?>
                    <?php while (have_rows('contact_faq_items')) : the_row(); ?>
                        <div class="faq-item">
                            <div class="js-faq-header faq-header">
                                <?php echo esc_html((string) get_sub_field('question')); ?>
                                <span class="faq-header__icon" aria-hidden="true">+</span>
                            </div>
                            <div class="faq-content">
                                <p><?php echo wp_kses_post((string) get_sub_field('answer')); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>