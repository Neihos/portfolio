<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez le portfolio de Nathanael Detourbe, développeur web spécialisé dans la création de sites WordPress. Explorez mes compétences en développement front-end et mes projets récents. Contactez-moi pour réaliser vos idées !">
    <meta name="keywords" content="développeur web, WordPress, création de sites web, gestion SEO, optimisation SEO, développement front-end, design web, portfolio, services web, développement de thèmes WordPress, plugins WordPress">
    <meta name="author" content="Nathanael Detourbe">
    <meta name="robots" content="index, follow">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <title>Développeur Web Spécialisé WordPress | Portfolio de Nathanael Detourbe</title>

    <?php wp_head(); ?>
</head>
    
<header>

<!-- Pour le menu Desktop -->

  <nav id="menuHeader">
    <ul>
      <li>  
          <a href="<?php echo home_url(); ?>" aria-label="Acceuil">
            <i class="fa-solid fa-house-chimney"><p>Acceuil</p></i>
          </a> 
      </li>
      <li>      
          <a href="<?php echo home_url(); ?>/#aboutMe" aria-label="About me">
            <i class="fa-solid fa-user"><p>Qui suis-je ?</p></i>
          </a>
      </li>
      <li>      
          <a href="<?php echo home_url(); ?>/#mySkills" aria-label="Mes skills">
            <i class="fa-solid fa-toolbox"><p>Skills</p></i>
          </a>
      </li>
      <li>      
          <a href="<?php echo home_url(); ?>/#portfolio" aria-label="Portfolio">
            <i class="fa-solid fa-laptop-file"><p>Portfolio</p></i>
          </a>
      </li>
      <li>      
          <a href="<?php echo home_url(); ?>/#contact" aria-label="Contact">
            <i class="fa-solid fa-envelopes-bulk"><p>Contact</p></i>
          </a>
      </li>
      <li>      
          <a href="https://github.com/neihos" aria-label="Github">
            <i class="fa-brands fa-github"><p>GitHub</p></i>
          </a>
      </li>
    </ul>
  </nav>

  <!-- Pour le menu tablette et mobile -->

  <nav id="mobileNav">
    <section class="burgerMenu">
      <svg class="burgerIcon" width="28" height="19" viewBox="0 0 28 19" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0.856708 1.71342H26.5586C27.0315 1.71342 27.4153 1.32957 27.4153 0.856708C27.4153 0.383774 27.0314 0 26.5586 0H0.856708C0.383845 0 0 0.383774 0 0.856708C0 1.32964 0.383845 1.71342 0.856708 1.71342Z" fill="rgb(31, 186, 224)"/>
        <path d="M26.5586 8.56738H0.856708C0.383774 8.56738 0 8.95123 0 9.42409C0 9.89695 0.383845 10.2808 0.856708 10.2808H26.5586C27.0315 10.2808 27.4153 9.89695 27.4153 9.42409C27.4153 8.95123 27.0315 8.56738 26.5586 8.56738Z" fill="rgb(31, 186, 224)"/>
        <path d="M26.5586 17.1345H0.856708C0.383774 17.1345 0 17.5184 0 17.9912C0 18.4642 0.383845 18.8479 0.856708 18.8479H26.5586C27.0315 18.8479 27.4153 18.4641 27.4153 17.9912C27.4154 17.5183 27.0315 17.1345 26.5586 17.1345Z" fill="rgb(31, 186, 224)"/>
      </svg>
      
      <svg class="crossIcon hiddenNow" width="28" height="20" viewBox="0 0 28 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M23.1905 1.61607L3.86027 17.8361C3.50458 18.1345 3.45818 18.6654 3.7566 19.021C4.05506 19.3767 4.58594 19.4231 4.94157 19.1247L24.2718 2.90472C24.6275 2.60626 24.6739 2.07538 24.3755 1.71974C24.0771 1.36401 23.5462 1.31761 23.1905 1.61607Z" fill="rgb(4, 0, 255)"/>
        <path d="M3.64474 2.82769L22.9778 19.0501C23.3336 19.3486 23.8642 19.3025 24.1622 18.9473C24.4602 18.5921 24.4134 18.0616 24.0577 17.7631L4.72462 1.54073C4.36893 1.24227 3.83833 1.28825 3.54026 1.64348C3.24219 1.9987 3.28905 2.52923 3.64474 2.82769Z" fill="rgb(4, 0, 255)"/>
      </svg>
    </section>
    <section class="mobileContent">
      <ul>
        <li>  
          <a href="<?php echo home_url(); ?>" aria-label="Accueil">
            <i class="fa-solid fa-house-chimney"><p>Accueil</p></i>
          </a> 
        </li>  
          <li>      
           <a href="<?php echo home_url(); ?>/#mySkills" aria-label="Mes skills">
            <i class="fa-solid fa-user"><p>Mes skills</p></i>
          </a>
        </li>
        <li>      
          <a href="<?php echo home_url(); ?>/#portfolio" aria-label="Portfolio">
            <i class="fa-solid fa-laptop-file"><p>Portfolio</p></i>
          </a>
        </li>
        <li>      
          <a href="<?php echo home_url(); ?>/#contact" aria-label="Contact">
            <i class="fa-solid fa-envelopes-bulk"><p>Contact</p></i>
          </a>
        </li>
        <li>      
          <a href="https://github.com/neihos" aria-label="Github">
            <i class="fa-brands fa-github"><p>Github</p></i>
          </a>
        </li>
      </ul>
    </section>    
    
  </nav>    
  
</header>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>