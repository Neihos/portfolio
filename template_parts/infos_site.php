<?php
// Récupérer le champ personnalisé 'photo principale' avec les vérifications
$photo_principale = get_field('photo_principale');
$image_url = null;

if (!empty($photo_principale)) {
    $sizes = $photo_principale['sizes'];
    $image_url = $sizes['full'] ?? $sizes['large'] ?? $sizes['medium'] ?? $sizes['thumbnail'] ?? $photo_principale['url'];
}

// Récupérer le champ personnalisé 'tablette' avec les vérifications
$tablette = get_field('tablette');
$img_tablette_url = null;

if (!empty($tablette)) {
    $sizes = $tablette['sizes'];
    $img_tablette_url = $sizes['full'] ?? $sizes['large'] ?? $sizes['medium'] ?? $sizes['thumbnail'] ?? $tablette['url'];
}

// Récupérer le champ personnalisé 'smartphone' avec les vérifications
$smartphone = get_field('smartphone');
$img_smartphone_url = null;

if (!empty($smartphone)) {
    $sizes = $smartphone['sizes'];
    $img_smartphone_url = $sizes['full'] ?? $sizes['large'] ?? $sizes['medium'] ?? $sizes['thumbnail'] ?? $smartphone['url'];
}

// Récupérer tous les posts
$site_posts = get_posts(['post_type' => 'site', 'numberposts' => -1]);
$current_site_id = get_the_ID();

// Initialiser les URLs par défaut
$previousPostUrl = $nextPostUrl = '#';
$previousThumbnailUrl = $nextThumbnailUrl = '';

// Trouver la position du post actuel dans la liste des posts
$current_key = null;
foreach ($site_posts as $key => $post) {
    if ($post->ID === $current_site_id) {
        $current_key = $key;
        break;
    }
}

// Si un post actuel est trouvé, définir précédent et suivant de manière cyclique
if ($current_key !== null) {
    $total_posts = count($site_posts);

    // Calcul cyclique pour les indices précédent et suivant
    $previous_key = ($current_key - 1 + $total_posts) % $total_posts; // Si au premier, revient au dernier
    $next_key = ($current_key + 1) % $total_posts; // Si au dernier, revient au premier

    // Récupérer les posts précédent et suivant
    $previous_post = $site_posts[$previous_key];
    $next_post = $site_posts[$next_key];

    // Définir les URLs
    $previousPostUrl = esc_url(get_permalink($previous_post->ID));
    $nextPostUrl = esc_url(get_permalink($next_post->ID));

    // Définir les miniatures
    $previous_site = get_field('photo_principale', $previous_post->ID);
    $previousMediumUrl = !empty($previous_site['sizes']['medium_large']) ? $previous_site['sizes']['medium_large'] : '';

    $next_site = get_field('photo_principale', $next_post->ID);
    $nextMediumUrl = !empty($next_site['sizes']['medium_large']) ? $next_site['sizes']['medium_large'] : '';
}
