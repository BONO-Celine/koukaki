
   <!-- -------------code d'origine------------------------ -->
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',
            );
            $characters_query = new WP_Query($args);
            ?>
            <article id="characters" class="element-to-animate">
                <!--<h3 class="">Les personnages</h3> -->
                <h3><span class="characters__title">Les personnages</span></h3> 

                <!-- Le conteneur principal du Carrousel -->
                <div class="swiper swiper-main-container">
                    <!-- Le conteneur secondaire à l'interieur du principal -->
                    <div class="swiper-wrapper">

                    <?php
                    while ( $characters_query->have_posts() ) {
                        $characters_query->the_post();
                        // Les différents Slides dans le conteneur
                        echo '<div class="swiper-slide">';
                        //-----------
                        echo '<figure>';
                        echo get_the_post_thumbnail( get_the_ID(), 'full' );
                        echo '<figcaption>';
                        the_title();
                        echo'</figcaption>';
                        echo '</figure>';
                        echo '</div>';
                    }

                    ?>
                    </div>
                </div>              
            </article>