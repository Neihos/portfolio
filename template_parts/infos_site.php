<?php
// Récupérer le champ personnalisé 'photo principale' avec les vérifications
$photo_principale = get_field('photo_principale');
$image_url = null;

if (!empty($photo_principale)) {
    $sizes = $photo_principale['sizes'];
    $image_url = $sizes['full'] ?? $sizes['large'] ?? $sizes['medium'] ?? $sizes['thumbnail'] ?? $photographie['url'];
}