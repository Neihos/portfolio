<?php 
function get_image_html($image_id) {
    $image_url = wp_get_attachment_image_url($image_id, 'full'); 
    $srcset = wp_get_attachment_image_srcset($image_id, 'full');
    $sizes = '(max-width: 2560px) 100vw, 1200px';
    $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true);

    if ($image_url) {
        return '<img src="' . esc_url($image_url) . '" 
        srcset="' . esc_attr($srcset) . '" 
        sizes="' . esc_attr($sizes) . '" 
        alt="' . esc_attr($alt_text) . '">';
    }
    return '';
}
?>