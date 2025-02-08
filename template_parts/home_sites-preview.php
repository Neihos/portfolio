<?php
// =================================================================================================================
//                                          Gestions de l'affichage des visuels des sites
// =================================================================================================================

// ----->  Fonction pour gérer les previews des sites de la page d'accueil  <-----

function siteDisplay_event() {

    $home_site_query = new WP_Query(array(
        'post_type' => 'site',
        'posts_per_page' => 2,
        'order' => 'DESC',
        'orderby' => 'date',
    ));

    $site_html = ''; // Variable pour stocker le code HTML des sites
    $displayed_site = []; // Tableau pour stocker les URLs des sites déjà affichées

    if ($home_site_query->have_posts()) {
        while ($home_site_query->have_posts()) {
            $home_site_query->the_post();
            $site_preview = get_field('tablette');
            $post_link = get_permalink(get_the_ID()); // Récupère le lien vers la page du post associé au site

            if (!empty($site_preview['sizes'])) {
                // Sélectionne la meilleure qualité disponible
                $site_preview_url = $site_preview['sizes']['full'] ?? 
                                  $site_preview['sizes']['large'] ?? 
                                  $site_preview['sizes']['medium'] ?? 
                                  $site_preview['sizes']['thumbnail'] ?? 
                                  $site_preview['url'];

               // Vérifie si $displayed_images est défini et est un tableau, sinon l'initialise
                if (!isset($displayed_images) || !is_array($displayed_images)) {
                    $displayed_images = [];
                }

                // Vérifie si le site a déjà été affiché
                if ($site_preview_url && !in_array($site_preview_url, $displayed_images)) {
                    // Ajoute l'URL du site au tableau des sites affichés
                    $displayed_images[] = $site_preview_url;

                    // Crée le code HTML pour chaque site avec les attributs data
                    $site_html .= '<a href="' . esc_url($post_link) . '" class="container-preview">';
                    $site_html .= '<div class="site-preview">';
                    $site_html .= '<img class="imgTablette" src="/wp-content/themes/novaneos/assets/images/tablette.webp" alt="Tablette">';
                    $site_html .= '<div class="imgInTablette">';
                    $site_html .= '<img src="' . esc_url($site_preview_url) . '"
                                        alt="illustration du site nommé : ' . esc_attr(get_the_title()) . '" 
                                        data-link="' . esc_url($post_link) . '">';
                    $site_html .= '</div>';
                    $site_html .= '</div>';
                    $site_html .= '<h3>' . esc_attr(get_the_title()) . '</h3>';
                    $site_html .= '</a>';
                }

            }
        }
        wp_reset_postdata(); // On réinitialise les données
    }

    return $site_html; // Retourne le code HTML des sites
}
?>