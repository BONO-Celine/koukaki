<?php

get_header();
?>

    <main id="primary" class="site-main">

        <section class="hero-header">
    
        <!-- <section class="banner"> -->
            <div class="banner-container">
                <div class="banner">
                    <!-- ****** Ajout de la video dans le header ***** -->
                    <video id="background-video" class="banner__video" autoplay loop muted poster=<?php echo get_template_directory_uri() . '/assets/images/banner.png'?>>
                    <source src="./wp-content/themes/foce-child/assets/video/Studio-Koukaki-video-header-sans-son.mp4" type="video/mp4">
                    </video>
                    <!-- ********************************************* -->
                </div>
            </div>
            <div class="hero-header__logo">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
            </div>    
        </section>

        <section id="#story" class="story">

            <!--<h2>L'histoire</h2> -->

            <article id="story__article" class="story__article element-to-animate">

            <h2 class="observed-element"><span class="story__title">L'histoire</span></h2>
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>

    <!-- Appel du code de la section personnages déplacé dans le sous template "characters" -->
                <?php get_template_part( 'parts/characters' ); ?>
    <!-- ********************************************* -->

            <article id="place" class="place element-to-animate">

                <div class="place__text">
                    <!--<h3>Le Lieu</h3> -->
                    <h3><span class="place__title">Le Lieu</span></h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>

    <!-- **************Ajout des nuages*************** -->
                <div class="place__clouds">
                    <img class="place__clouds-big-cloud" src="<?php echo get_theme_file_uri() . '/assets/images/big_cloud.png'; ?>" alt="Image d'un gros nuage">
                    <img class="place__clouds-little-cloud"
                    src="<?php echo get_theme_file_uri() . '/assets/images/little_cloud.png'; ?>" alt="Image d'un petit nuage">
                </div>
    <!-- ********************************************* -->
            </article>
        </section>


        <section id="studio" class="element-to-animate">
            <h2 class="observed-element"><span class="studio__title">Studio Koukaki</span></h2>
            <!-- <h2>Studio Koukaki</h2> -->
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>

<!-- ********** Ajout de la section nomination *********************** -->
    <!-- Appel du code de la section nomination du sous template "nomination" -->
    <?php get_template_part( 'parts/nomination' ); ?>
    <!-- ********************************************* -->

    </main><!-- #main -->

<?php
get_footer();
