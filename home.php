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

 // Inclure le fichier avec les données des sites
include('template_parts/home_sites-preview.php');

get_header(); 
?>

<div class="main-container">
  
    <!-- Accueil Section -->
    <header id="heroHeader">
        <h2 class="titleMove" data-0="top: 4vh" data-800="top: 90vh">WordPress</h2>
        <div class="hero">
            <article class="textArea">
                <div class="inTextArea">
                    <p class="theTitle">Bonjour! Je suis Nathanael</p>
                    <h1 class="slogan">"Expert WordPress et développeur front-end"</h1>
                </div>                 
            </article>  
            <figure class="picture">
                <div class="photo">
                    <img src="/wp-content/themes/novaneos/assets/images/nathanaelDetourbe.webp" alt="nathanael detourbe">
                </div>
            </figure>
        </div>   
    </header>

    <!-- about Me Section -->
    <section id="aboutMe">
        <div class="book" tabindex="0">
            <div class="cover">
                <h2 class="bookTitle"><span>Nathanael</span><br>Qui suis-je ?</h2>
                <p class="bookTitle">Ouvrez-moi !!</p>                
                <p>@Neihos</p>
            </div>
            <div class="content">
                <pre>Bonjour à tous !

Je suis Nathanael Detourbe, développeur web autodidacte passionné par les expériences numériques innovantes.

Ma maîtrise de JavaScript, PHP, HTML, CSS, jQuery et WordPress s’appuie sur des années d’autoformation et de projets concrets, renforcée par une solide base en SQL. Pour affiner mes compétences, j’ai suivi une formation complète chez OpenClassrooms, validée par un diplôme reconnu.

Créatif, rigoureux et orienté solution, je suis prêt à concevoir et réaliser vos projets web avec professionnalisme.</pre>
                
            </div>
        </div>
        
    </section>


    <!-- Skills Section -->
    <section id="mySkills">

        <header class="skillsTitle">
            <h2>Mes Super-pouvoirs</h2>
        </header>

        <div class="skillContainer">

            <div id="skill">

                <!-- Carte Compétence : HTML -->
                <div id="myHtml">
                    <div class="skillBox">
                        <div class="iconCode"></div>                    
                        <div class="skillContent">                
                            <div class="inner">
                                <div id="number">0</div>
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    width="160px" height="160px">
                                    <defs>
                                    <linearGradient id="grandientColor">
                                        <stop offset="0%" stop-color="#e91e63" />
                                        <stop offset="100%" stop-color="#673ab7" />
                                    </linearGradient>
                                    </defs>
                                <circle cx="80" cy="80" r="70" stroke-linecap="round" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <details class="details">
                        <summary class="nameSkill">
                            <span class="skillName">HTML</span>
                            <br>
                            <span><i class="fa-regular fa-hand-pointer"></i>Ici pour en savoir plus</span>
                        </summary>
                        <div class="description">
                            <p>En utilisant les bonnes pratiques du HTML, je développe des structures web claires et sémantiques, qui sont optimisées pour le référencement et l'accessibilité. Je suis en mesure de répondre de manière efficace aux exigences des projets tout en renforçant en permanence mes compétences.</p>
                        </div>
                    </details>
                </div>

                <!-- Carte Compétence : CSS -->
                <div id="myCss">
                    <div class="skillBox">
                        <div class="iconCode"></div>
                        <div class="skillContent">
                            <div class="inner">
                                <div id="number">0</div>
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    width="160px" height="160px">
                                    <defs>
                                    <linearGradient id="grandientColor">
                                        <stop offset="0%" stop-color="#e91e63" />
                                        <stop offset="100%" stop-color="#673ab7" />
                                    </linearGradient>
                                    </defs>
                                    <circle cx="80" cy="80" r="70" stroke-linecap="round" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <details class="details">
                        <summary class="nameSkill">
                            <span class="skillName">CSS</span>
                            <br>
                            <span><i class="fa-regular fa-hand-pointer"></i>Ici pour en savoir plus</span>
                        </summary>
                        <div class="description">
                            <p>Je crée des mises en page dynamiques et élégantes, qui conviennent à tous les écrans, en utilisant les méthodes les plus efficaces du CSS. Je possède une expertise dans les techniques avancées telles que le flexbox, le grid et les animations afin de concevoir des interfaces modernes et dynamiques.</p>
                        </div>
                    </details>
                </div>

                <!-- Carte Compétence : JavaScript -->
                <div id="myJavascript">
                    <div class="skillBox">
                        <div class="iconCode"></div>
                        <div class="skillContent">
                            <div class="inner">
                                <div id="number">0</div>
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    width="160px" height="160px">
                                    <defs>
                                    <linearGradient id="grandientColor">
                                        <stop offset="0%" stop-color="#e91e63" />
                                        <stop offset="100%" stop-color="#673ab7" />
                                    </linearGradient>
                                    </defs>
                                    <circle cx="80" cy="80" r="70" stroke-linecap="round" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <details class="details">
                        <summary class="nameSkill">
                            <span class="skillName">JavaScript</span>
                            <br>
                            <span><i class="fa-regular fa-hand-pointer"></i>Ici pour en savoir plus</span>
                        </summary>
                        <div class="description">
                            <p>En utilisant JavaScript, je développe des interactions dynamiques et des fonctionnalités avancées, ce qui permet d'améliorer l'expérience utilisateur. Je suis capable de maîtriser le DOM de manière efficace, de gérer les événements et d'intégrer des solutions performantes, tout en poursuivant ma progression dans les nouvelles technologies.</p>
                        </div>
                    </details>
                </div>

            <!-- Carte Compétence : WordPress -->
            <div id="myWordpress">
                    <div class="skillBox">
                        <div class="iconCode"></div>
                        <div class="skillContent">
                            <div class="inner">
                                <div id="number">0</div>
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    width="160px" height="160px">
                                    <defs>
                                    <linearGradient id="grandientColor">
                                        <stop offset="0%" stop-color="#e91e63" />
                                        <stop offset="100%" stop-color="#673ab7" />
                                    </linearGradient>
                                    </defs>
                                    <circle cx="80" cy="80" r="70" stroke-linecap="round" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <details class="details">
                        <summary class="nameSkill">
                            <span class="skillName">WordPress</span>
                            <br>
                            <span><i class="fa-regular fa-hand-pointer"></i>Ici pour en savoir plus</span>
                        </summary>
                        <div class="description">
                            <p>En utilisant WordPress, je crée des sites web performants, personnalisés et respectant le SEO, en adaptant des thèmes et en intégrant des fonctionnalités avancées. Je suis capable de créer des templates, d’interagir avec les hooks et d’ajouter des fonctionnalités spécifiques selon les besoins d’un projet.</p>
                        </div>
                    </details>
                </div>
                
                <!-- Carte Compétence : PHP -->
                <div id="myPhp">
                    <div class="skillBox">
                        <div class="iconCode"></div>
                        <div class="skillContent">
                            <div class="inner">
                                <div id="number">0</div>
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    width="160px" height="160px">
                                    <defs>
                                    <linearGradient id="grandientColor">
                                        <stop offset="0%" stop-color="#e91e63" />
                                        <stop offset="100%" stop-color="#673ab7" />
                                    </linearGradient>
                                    </defs>
                                    <circle cx="80" cy="80" r="70" stroke-linecap="round" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <details class="details">
                        <summary class="nameSkill">
                            <span class="skillName">PHP</span>
                            <br>
                            <span><i class="fa-regular fa-hand-pointer"></i>Ici pour en savoir plus</span>
                        </summary>
                        <div class="description">
                            <p>Ma compétence en PHP me permet de concevoir des pages dynamiques et de créer des scripts qui répondent aux exigences d'un projet. Je maîtrise le langage de manière efficace afin de structurer et automatiser les fonctionnalités dans différents environnements.</p>
                        </div>
                    </details>
                </div>

                <!-- Carte Compétence : SQL -->
                <div id="mySql">
                    <div class="skillBox">
                        <div class="iconCode"></div>
                        <div class="skillContent">
                            <div class="inner">
                                <div id="number">0</div>
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    width="160px" height="160px">
                                    <defs>
                                    <linearGradient id="grandientColor">
                                        <stop offset="0%" stop-color="#e91e63" />
                                        <stop offset="100%" stop-color="#673ab7" />
                                    </linearGradient>
                                    </defs>
                                    <circle cx="80" cy="80" r="70" stroke-linecap="round" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <details class="details">
                        <summary class="nameSkill">
                            <span class="skillName">MySQL</span>
                            <br>
                            <span><i class="fa-regular fa-hand-pointer"></i>Ici pour en savoir plus</span>
                        </summary>
                        <div class="description">
                            <p>Je crée des bases de données SQL, les sauvegarde et les importe en utilisant les commandes de base. Je suis capable de gérer de manière efficace des données simples tout en poursuivant mon développement pour des tâches plus complexes.</p>
                        </div>
                    </details> 
                </div>
            </div>
            <h2 class="titleMoveSkill" data-2800="left: 85vw" data-3400="left: 1vw">Skills</h2>
        </div>
        
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio">

        <header class="portfolioTitle">
            <h2>Mon portfolio</h2>
        </header>

        <div class="mySites">
            <?php
                $site_preview_display = siteDisplay_event();
                echo $site_preview_display;
            ?>
        </div>
        <div class="btnload">
            <button id="loadMoreSites">Charger plus</button>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">

        <header class="contactTitle">
            <h2>Contact</h2>
        </header>
        <div class="imgContact">
                <img src="/wp-content/themes/novaneos/assets/images/contactHuman.webp" alt="illustration de contact">
            </div> 
        <div class="contactContainer">               
        <?php 
            // Affiche le formulaire Contact Form 7 avec l'ID ou le titre
            echo do_shortcode('[contact-form-7 id="ae4031d" title="Contact form"]'); 
        ?>
    
    </section>
    
</div>

<?php get_footer(); ?>