<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage novaneos theme
 * @since novaneos 1.0
 */

get_header(); ?>

<main class="single-container">

<?php 
// Vérifie s'il y a des posts/pages à afficher
if ( have_posts() ) :
    // Boucle à travers les pages et affiche leur contenu
    while ( have_posts() ) : the_post(); 
?>

<?php if ( 'site' === get_post_type() ): ?>

    <article class="preview-site">

        <section class="siteOnTop">
            <div class="single-content">            
                <h1 class="post-title"><?php the_title(); ?></h1>
                <div class="reference">Référence : <?php the_field( 'reference' ); ?></div>
                <div class="publication-year">Année : <?php echo get_the_date('Y'); ?></div>
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