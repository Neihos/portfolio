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

    <div class="singleContent">

        <section class="siteOnPage">
            <h1 class="post-title"><?php the_title(); ?></h1>
            <div class="single-content"> 
               
                <div class="smartphoneContainer">             
                    <img class="smartphoneImg" src="/wp-content/themes/novaneos/assets/images/smartphone.webp" alt="smartphone">
                    <div class="inSmartphone">
                        <img src="<?php echo esc_url( $img_smartphone_url ); ?>" alt="aperçu du site en mode smartphone">
                    </div>
                </div> 
                <div class="computerContainer"> 
                    <img class="computerImg" src="/wp-content/themes/novaneos/assets/images/laptop.webp" alt="Ordinateur">
                    <div class="inComputer">
                        <img src="<?php echo esc_url( $image_url ); ?>" alt="aperçu du site en mode desktop">
                    </div>
                </div>  
                <div class="tabletteContainer">         
                    <img class="tabletteImg" src="/wp-content/themes/novaneos/assets/images/tablette.webp" alt="tablette">
                    <div class="inTablette">
                        <img src="<?php echo esc_url( $img_tablette_url ); ?>" alt="aperçu du site en mode tablette">
                    </div>
                </div>

            </div>
                 
        </section>

        <section class="infoSite">
            <span>Description :</span>
            <div class="description"><?php echo get_field('description'); ?></div>
            <div class="publication-year">Date : <?php echo get_the_date('j F Y'); ?></div>
            <a class="linkToSite" href="<?php echo get_field('lien_vers_le_site'); ?>"><i class="fa-solid fa-globe"></i>  Voir le site <i class="fa-solid fa-globe"></i></a> 
        </section>
        
        <div class="sliderContainer">
            <div class="arrows">
                <a class="arrow-left" href="<?php echo $previousPostUrl; ?>">
                    <i class="fa-solid fa-arrow-left-long"></i>
                </a>                
            </div>
            <div class="changeSitePrevious">
                <img class="ecranPrevious" src="/wp-content/themes/novaneos/assets/images/ecranpc.webp" alt="écran de pc">
                <div class="imgPrevious">
                    <img src="<?php echo esc_url($previousMediumUrl); ?>" alt="Image précédente">
                </div>
            </div>  
            <div class="changeSiteNext">  
                <img class="ecranNext" src="/wp-content/themes/novaneos/assets/images/ecranpc.webp" alt="écran de pc">
                <div class="imgNext">
                    <img src="<?php echo esc_url($nextMediumUrl); ?>" alt="Image suivante">
                </div>                    
            </div>                
                        
            <div class="arrows">
                <a class="arrow-right" href="<?php echo $nextPostUrl; ?>">
                    <i class="fa-solid fa-arrow-right-long"></i>
                </a>                 
            </div>
        </div>
    
    </div>

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
