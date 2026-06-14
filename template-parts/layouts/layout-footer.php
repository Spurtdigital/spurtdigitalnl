<footer class="footer">
    <div class="footer-top bg-dark py-lg-15 py-lg-10 py-5 text-white">
        <div class="container">
            <strong class="display-4 mb-lg-2"><?php echo esc_html((string) get_field('footer_top_title', 'option')); ?></strong>
            <p class="lead"><?php echo wp_kses_post((string) get_field('footer_top_text', 'option')); ?></p>
            <div class="d-flex align-items-center">
                <div class="nav-btn__image">
					<img  class="img-abs-center" src="<?php echo esc_url((string) (get_field('footer_cta_image', 'option')['url'] ?? '')); ?>" alt="<?php echo esc_attr((string) (get_field('footer_cta_image', 'option')['alt'] ?? '')); ?>">
				</div>
				<a href="<?php echo esc_url((string) (get_field('footer_cta_link', 'option')['url'] ?? '#')); ?>" class="btn btn-primary btn-icon">
                    <?php echo esc_html((string) (get_field('footer_cta_link', 'option')['title'] ?? '')); ?>
					<span class="btn-icon__icon">
						<i class="fa-sharp fa-light fa-arrow-right"></i>
						<i class="fa-sharp fa-light fa-arrow-right"></i>
					</span>
				</a>
			</div>
        </div>
    </div>
    <div class="footer-mid pt-lg-9 pb-lg-5 py-5">
        <div class="container">
            <div class="row gy-2">
                <div class="col-lg-5">
                    <strong class="footer__title"><?php echo esc_html((string) get_field('footer_about_title', 'option')); ?></strong>
                    <p><?php echo wp_kses_post((string) get_field('footer_about_text', 'option')); ?></p>
                    <?php
                    if (get_field('footer_about_button_link', 'option') && function_exists('spurt_add_btns')) {
                        spurt_add_btns([
                            [
                                'link' => get_field('footer_about_button_link', 'option'),
                                'color' => (string) get_field('footer_about_button_color', 'option') ?: 'primary',
                                'icon' => (string) get_field('footer_about_button_icon', 'option') ?: 'arrow-right',
                            ],
                        ]);
                    }
                    ?>
                    <div class="social-media">
                        <?php spurt_social();?>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="row gy-2">
                        <div class="col-lg-4">
                            <button class="footer__title footer__toggle js-footer-toggle" type="button" aria-expanded="false">
                                <span><?php echo esc_html(creators_menu_name('footermenu')); ?></span>
                                <span class="footer__toggle-icon" aria-hidden="true"></span>
                            </button>
                            <nav class="footer__nav">
                                <?php creators_footermenu(); ?>
                            </nav>
                        </div>
                        <div class="col-lg-4">
                            <button class="footer__title footer__toggle js-footer-toggle" type="button" aria-expanded="false">
                                <span><?php echo esc_html(creators_menu_name('footermenu2')); ?></span>
                                <span class="footer__toggle-icon" aria-hidden="true"></span>
                            </button>
                            <nav class="footer__nav">
                                <?php creators_footermenu2(); ?>
                            </nav>
                        </div>
                        <div class="col-lg-4">
                            <button class="footer__title footer__toggle js-footer-toggle" type="button" aria-expanded="false">
                                <span><?php echo esc_html(creators_menu_name('footermenu3')); ?></span>
                                <span class="footer__toggle-icon" aria-hidden="true"></span>
                            </button>
                            <nav class="footer__nav">
                                <?php creators_footermenu3(); ?>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-end mt-lg-10 mt-3">
            <div class="container d-flex flex-wrap justify-content-between ">

                <span><?php echo esc_html((string) get_field('footer_copyright', 'option')); ?></span>
                <nav>
                    <?php creators_privacymenu(); ?>
                </nav>
            </div>
            
        </div>
    </div>
</footer>