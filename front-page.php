<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner animation-dowm">
            <div id="parallax">
                <img class="fix" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">                
            </div>
            <video autoplay muted loop playsinline>
                <source src="<?php echo get_stylesheet_directory_uri() . "/video/video.mp4" ?>" type="video/mp4">
            </video>
        </section>
        <section id="story" class="story">
            <h2>L'histoire</h2>
            <article class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>

            <article id="characters">
                <div class="main-character animation-up">
                    <h3>Les personnages</h3>
                </div>

                <?php get_template_part('sliderpersonnages'); ?>

            </article>
          
            <article id="place" class="animation-up">
                <div>
                    <h3>Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
                <div id="nuages">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nuages.svg" alt="Image nuages Studio Koukaki">
                </div>
            </article>
        </section>


        <section id="studio">
            <h2 class="fadeIn animation-up">Studio Koukaki</h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>

    </main>
    <!-- #main -->

<?php
get_footer();
