<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage novaneos theme
 * @since novaneos 1.0
 */

get_header(); ?>

<div class="page-container">
    <?php 
    // Vérifie s'il y a des posts/pages à afficher
    if ( have_posts() ) :
        while ( have_posts() ) : the_post(); 
    ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class('page-content'); ?>>
            <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>

            <div class="entry-content">
                <?php the_content(); ?> 
            </div>

        </article>

    <?php
        endwhile;
    endif;
    ?>
</div>

<?php get_footer(); ?>