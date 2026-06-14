<!-- nav--alt -->
<?php
$header_cta_image = get_field('header_cta_image', 'option');
$header_cta_link = get_field('header_cta_link', 'option');

$header_cta_url = !empty($header_cta_link['url']) ? $header_cta_link['url'] : '#';
$header_cta_text = !empty($header_cta_link['title']) ? $header_cta_link['title'] : 'contact opnemen';
$header_cta_image_url = !empty($header_cta_image['url']) ? $header_cta_image['url'] : 'https://media.licdn.com/dms/image/v2/D4E22AQGQKPQvLULf6g/feedshare-shrink_800/feedshare-shrink_800/0/1700141583585?e=2147483647&v=beta&t=HInqZzfB3pWNLx6NZiW2IydLsa5YGaXlU1v9e5efSdI';
$header_cta_image_alt = !empty($header_cta_image['alt']) ? $header_cta_image['alt'] : '';
?>
<header class="nav">
	<div class="container">
		<div class="nav__wrapper d-flex justify-content-between align-items-center">
		<div class="d-flex gap-10">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav__logo">
				<svg xmlns="http://www.w3.org/2000/svg" width="324.122" height="44.76" viewBox="0 0 324.122 44.76">
					<g id="spurt_logo_letters" data-name="spurt_logo_letters" transform="translate(-44.149 -43.59)">
					<path id="Path_1" data-name="Path 1" pathLength="100" d="M106.6,61.28a1.494,1.494,0,0,0-.24-.68.667.667,0,0,0-.59-.28H74.25c-.38-.11-.59-.29-.62-.56l-.02-.16c-.03-.26,0-.42.1-.48l.68-3.02a1.256,1.256,0,0,1,1.3-1.11h31.28a1.4,1.4,0,0,0,1.53-1.19l2.03-8.99c.1-.05.13-.21.1-.48l-.02-.16c-.04-.37-.33-.56-.86-.56H55.71A1.591,1.591,0,0,0,54.1,44.8L48.16,70.51c-.1.05-.13.21-.1.48l.02.16c.04.37.36.56.94.56H80.46c.49.11.75.32.79.64l.02.16-.81,3.26a1.343,1.343,0,0,1-1.45,1.19H47.74a1.422,1.422,0,0,0-1.45,1.19l-2.03,8.99c-.1.05-.13.21-.1.48l.02.16c.04.37.36.56.94.56H99.16a1.462,1.462,0,0,0,1.53-1.19l5.97-25.47Z"></path>
					<path id="Path_2" data-name="Path 2" pathLength="100" d="M175.87,44.49a.3.3,0,0,0,.02-.16l-.02-.16c-.04-.37-.33-.56-.86-.56H118.66a1.292,1.292,0,0,0-1.23,1.03l-9.99,42.5c-.07.32-.11.45-.11.4l.02.16c.05.43.37.64.95.64h20.53a1.223,1.223,0,0,0,1.39-1.03l7.47-31.52a1.175,1.175,0,0,1,1.32-.95h10.43c.48,0,.74.21.79.64l.02.16a.125.125,0,0,1-.03.12.335.335,0,0,0-.02.2l-2.64,11.3a1.264,1.264,0,0,1-1.33.88h-5.89a1.181,1.181,0,0,0-1.32.96l-2.18,9.79c.04.37.36.56.94.56h28.65a1.3,1.3,0,0,0,1.38-1.11l8.02-33.59A1.8,1.8,0,0,1,175.87,44.49Z"></path>
					<path id="Path_3" data-name="Path 3" pathLength="100" d="M240.99,44.25c-.05-.42-.39-.64-1.03-.64H219.5a1.256,1.256,0,0,0-1.3,1.11l-7.36,31.12a1.462,1.462,0,0,1-1.54,1.11H199.03c-.58,0-.9-.21-.95-.64l-.02-.16,7.4-31.44-.06-.48c-.05-.42-.39-.64-1.03-.64H183.92a1.256,1.256,0,0,0-1.3,1.11l-10,42.42c-.1.05-.13.21-.1.48l.02.16c.04.37.36.56.94.56h27.78l3.82-3.46,4.07,3.26,20.45.2a1.422,1.422,0,0,0,1.45-1.19l10-42.42Z"></path>
					<path id="Path_4" data-name="Path 4" pathLength="100" d="M305.37,43.61H249.02a1.292,1.292,0,0,0-1.23,1.03l-9.99,42.5c-.07.32-.11.45-.11.4l.02.16c.05.43.37.64.95.64h20.53a1.223,1.223,0,0,0,1.39-1.03l7.47-31.52a1.175,1.175,0,0,1,1.32-.95H279.8c.48,0,.74.21.79.64l.02.16a.125.125,0,0,1-.03.12.335.335,0,0,0-.02.2l-2.65,11.22c-.09.58-.51.88-1.25.88h-7.72a1.021,1.021,0,0,0-1.16.95l5.75,18.23a1.09,1.09,0,0,0,1.17,1.11h20.14a1.1,1.1,0,0,0,1.09-.88l-2.79-8.04h3.66a1.3,1.3,0,0,0,1.38-1.11l8.02-33.59a.578.578,0,0,1,.01-.24.3.3,0,0,0,.02-.16l-.02-.16C306.19,43.8,305.9,43.61,305.37,43.61Z"></path>
					<path id="Path_5" data-name="Path 5" pathLength="100" d="M367.29,43.61H314.36a1.55,1.55,0,0,0-1.53,1.19l-2.15,9.39.02.16c.05.43.34.64.87.64l27.24.1-13.08,5.25-6.42,26.88.06.48c.05.43.39.64,1.03.64h20.9l3.84-15.57,4.04-16.9a1.264,1.264,0,0,1,1.33-.88h14.17a1.35,1.35,0,0,0,1.45-1.19l2.03-8.99c.1-.05.13-.21.1-.48l-.02-.16C368.19,43.8,367.88,43.61,367.29,43.61Z"></path>
					</g>
				</svg>
			</a>
			<nav class="nav__nav">
				<?php echo creators_hoofdmenu();?>
			</nav>
		</div>
		<div>
			<div class="d-flex align-items-center">
                <div class="nav-btn__image">
					<img  class="img-abs-center" src="<?php echo esc_url($header_cta_image_url); ?>" alt="<?php echo esc_attr($header_cta_image_alt); ?>">
				</div>
				<a href="<?php echo esc_url($header_cta_url); ?>" class="btn btn-primary btn-icon">
					<?php echo esc_html($header_cta_text); ?>
					<span class="btn-icon__icon">
						<i class="fa-sharp fa-light fa-arrow-right"></i>
						<i class="fa-sharp fa-light fa-arrow-right"></i>
					</span>
				</a>
			</div>
			<div class="nav-bar__toggle js-toggle-panel">
				<span></span>
			</div>
		</div>
	</div>
	</div>	
</header>