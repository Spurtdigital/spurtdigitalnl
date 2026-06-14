<?php
$link = !empty($args['link']) && is_array($args['link']) ? $args['link'] : [];
$linkurl = !empty($link['url']) ? $link['url'] : '#';
$text = !empty($link['title']) ? $link['title'] : '';
$target = !empty($link['target']) ? $link['target'] : '_self';
$color = !empty($args['color']) ? '-' . $args['color'] : '-primary';
$icon_slug = !empty($args['icon']) ? $args['icon'] : '';
$fancybox = preg_match('/youtu\.be/i', $linkurl) || preg_match('/youtube\.com\/watch/i', $linkurl) || preg_match('/vimeo\.com/i', $linkurl);

$icon_map = [
    'arrow-right' => 'fa-sharp fa-light fa-arrow-right',
    'phone' => 'fa-sharp fa-light fa-phone',
    'envelope' => 'fa-sharp fa-light fa-envelope',
    'play' => 'fa-sharp fa-light fa-play',
];

$icon_class = '';
if (!empty($icon_slug) && isset($icon_map[$icon_slug])) {
    $icon_class = $icon_map[$icon_slug];
}

$btn_class = 'btn btn' . $color . (!empty($icon_class) ? ' btn-icon' : '');
?>
<a href="<?php echo esc_url($linkurl); ?>" class="<?php echo esc_attr($btn_class); ?>"<?php echo $fancybox ? ' data-fancybox' : ''; ?> target="<?php echo esc_attr($target); ?>">
    <?php echo $fancybox ? '<i class="fa-regular fa-regular fa-play"></i>' : ''; ?>
    <?php echo esc_html($text); ?>
    <?php if (!empty($icon_class)) : ?>
        <span class="btn-icon__icon" aria-hidden="true">
            <i class="<?php echo esc_attr($icon_class); ?>"></i>
            <i class="<?php echo esc_attr($icon_class); ?>"></i>
        </span>
    <?php endif; ?>
</a>