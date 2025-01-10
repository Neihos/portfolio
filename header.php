<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bienvenue sur le site de Novaneos, entreprise spécialisée dans la création de sites internet sur mesure, le développement web et l'accompagnement en stratégie digitale. Notre équipe de développeurs experts crée des solutions web performantes, adaptées à vos besoins. De la conception de sites vitrines à l'e-commerce, en passant par l'optimisation SEO et la gestion des réseaux sociaux, Novaneos vous aide à booster votre présence en ligne.">
    <meta name="keywords" content="création de site internet, développement web, développement de sites, conception de site sur mesure, stratégie digitale, SEO, réseaux sociaux, e-commerce, développement front-end, développement back-end, optimisation web, web design, responsive design, référencement SEO, développement WordPress, stratégie de communication digitale, marketing digital">
    <meta name="author" content="Neihos">
    <meta name="title" content="Novaneos - Création de Sites Internet & Développement Web | Stratégie Digitale et Réseaux Sociaux">
    <meta name="robots" content="index, follow">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <title>Novaneos</title>
    <?php wp_head(); ?>
</head>
    
<header>
  <nav id="menuHeader">
    <ul>
      <li>  
          <a href="<?php echo home_url(); ?>" alt="Acceuil">
            <i class="fa-solid fa-house-chimney"></i>
          </a> 
      </li>
      <li>      
          <a href="#dream" alt="profil">
            <i class="fa-solid fa-user"></i>
          </a>
      </li>
      <li>      
          <a href="<?php echo home_url(); ?>">
            <i class="fa-solid fa-laptop-file"></i>
          </a>
      </li>
      <li>      
          <a href="<?php echo home_url(); ?>">
            <i class="fa-solid fa-envelopes-bulk"></i>
          </a>
      </li>
      <li>      
          <a href="<?php echo home_url(); ?>">
            <i class="fa-brands fa-microblog"></i>
          </a>
      </li>
    </ul>
  </nav>

  <nav id="mobileNav">
    <section class="burgerMenu">
      <img class="burgerIcon" src="<?php echo get_template_directory_uri(); ?>/assets/images/burgerIcone.svg" alt="icone burger menu">
      <img class="crossIcon hiddenNow" src="<?php echo get_template_directory_uri(); ?>/assets/images/crossIcone.svg" alt="Icone croix">
    </section>
    
  </nav>
    <section class="mobileContent">
      <ul>
      <li>  
          <a href="<?php echo home_url(); ?>" alt="Acceuil">
            <i class="fa-solid fa-house-chimney"><p>Accueil</p></i>
          </a> 
      </li>
      <li>      
          <a href="#dream" alt="profil">
            <i class="fa-solid fa-user"><p>Skills</p></i>
          </a>
      </li>
      <li>      
          <a href="<?php echo home_url(); ?>">
            <i class="fa-solid fa-laptop-file"><p>Portfolio</p></i>
          </a>
      </li>
      <li>      
          <a href="<?php echo home_url(); ?>">
            <i class="fa-solid fa-envelopes-bulk"><p>Contact</p></i>
          </a>
      </li>
      <li>      
          <a href="<?php echo home_url(); ?>">
            <i class="fa-brands fa-microblog"><p>Blog</p></i>
          </a>
      </li>
    </ul>
    </section>
  
</header>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>