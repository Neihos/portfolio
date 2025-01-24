<?php
// =================================================================================================================
//                                              Custom AJAX Functions
// =================================================================================================================

function load_more_sites_ajax() {
    // Jeton temporaire de sécurité
    if (!isset($_POST['security']) || !wp_verify_nonce($_POST['security'], 'novaneos-script-main')) {
    wp_send_json_error('Requête non sécurisée', 403);
}

    // Vérifie la page de la requête Ajax
    $paged = (isset($_POST['page'])) ? intval($_POST['page']) : 1;

    $args = array(
        'post_type' => 'site',
        'posts_per_page' => 2,
        'paged' => $paged,
        'orderby' => 'date',
        'order' => 'DESC',
    );

    // Exécute la requête
    $home_site_query = new WP_Query($args);

    if ($home_site_query->have_posts()) {
        while ($home_site_query->have_posts()) {
            $home_site_query->the_post();
            $site_preview = get_field('tablette');
            $post_link = get_permalink(get_the_ID());; // Récupère le lien de la page

            if (!empty($site_preview['sizes'])) {
                // Sélectionne la meilleure qualité disponible
                $site_preview_url = $site_preview['sizes']['full'] ?? 
                                  $site_preview['sizes']['large'] ?? 
                                  $site_preview['sizes']['medium'] ?? 
                                  $site_preview['sizes']['thumbnail'] ?? 
                                  $site_preview['url'];

                if ($site_preview_url) {
                    // Génère le code HTML pour chaque site avec les attributs data
                    echo '<a href="' . esc_url($post_link) . '" class="container-preview">';
                    echo '<div class="site-preview">';
                    echo '<img class="imgTablette" src="/wp-content/themes/novaneos/assets/images/tablette.webp" alt="Tablette">';
                    echo '<div class="imgInTablette">';
                    echo '<img src="' . esc_url($site_preview_url) . '"
                                        alt="' . esc_attr(get_the_title()) . '" 
                                        data-link="' . esc_url($post_link) . '">';
                    echo '</div>';
                    echo '</div>';
                    echo '<h3>' . esc_attr(get_the_title()) . '</h3>';
                    echo '</a>';
                }
            }
        }
        wp_reset_postdata();
    } else {
        echo 0; // Indique qu'il n'y a plus de sites à charger
    }

    wp_die(); // Terminer la requête
}

add_action('wp_ajax_load_more_sites', 'load_more_sites_ajax');
add_action('wp_ajax_nopriv_load_more_sites', 'load_more_sites_ajax'); // Permet l'accès aux utilisateurs non connectés
?>
