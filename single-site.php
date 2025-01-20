<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage novaneos theme
 * @since novaneos 1.0
 */

get_header();

include('template_parts/infos_site.php');
?>

<main class="single-container">

<?php 
// Vérifie s'il y a des posts/pages à afficher
if ( have_posts() ) :
    // Boucle à travers les pages et affiche leur contenu
    while ( have_posts() ) : the_post(); 
?>

<?php if ( 'site' === get_post_type() ): ?>

    <article class="preview-site">

        <section class="siteOnPage">
            <div class="single-content">            
                <h1 class="post-title"><?php the_title(); ?></h1>
                <img 
                    src="<?php echo esc_url( $image_url ); ?>"
                >
                <div class="publication-year">Date : <?php echo get_the_date('j F Y'); ?></div>
                <div class="description"><?php echo get_field('description'); ?></div>
                <a class="linkToSite" href="<?php echo get_field('lien_vers_le_site'); ?>">Voir le site</a>           
            </div>        
        </section>
                

    </article>
    
<?php endif; ?>
    

<?php
    endwhile;
endif;
?>

</main>
<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();
?>