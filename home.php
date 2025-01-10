<?php
/**
 * The template for home page
 *
 * This is the template that displays home by default.
 *
 * @package WordPress
 * @subpackage novaneos theme
 * @since novaneos 1.0
 */

get_header(); 
?>

<div class="main-container">
  

    <header id="heroHeader">
        <h2 class="titleMove" data-0="top: 4vh" data-800="top: 100vh">WordPress</h2>
        <div class="hero">
            <article class="textArea">
                <div class="inTextArea">
                    <h1 class="theTitle">Bonjour! Je suis Nathanael</h1>
                    <p class="slogan">"Expert WordPress et développeur front-end"</p>
                </div>                 
            </article>  
            <figure class="picture">
                <div class="photo">
                    <img src="/wp-content/themes/novaneos/assets/images/nathanaelDetourbe.webp" alt="nathanael detourbe">
                </div>
            </figure>
        </div>   
    </header>

    <section id="dream">
        <div class="overlay"></div>
        <figure class="dreamPicture">
                <div class="dreamPhoto">
                </div>
        </figure>
    </section>


    
</div>

<?php get_footer(); ?>