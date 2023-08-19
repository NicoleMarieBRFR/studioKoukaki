<?php
$args = array(
    'post_type' => 'characters',
    'posts_per_page' => -1,
    'meta_key'  => '_main_char_field',
    'orderby'   => 'meta_value_num',

);
$characters_query = new WP_Query($args);
?>

<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <?php
        $main_character = $characters_query->posts[0];
        echo '<div class="swiper-slide"><figure>';
        echo get_the_post_thumbnail( $main_character->ID, 'full' );
        echo '<figcaption>'. $main_character->post_title . '</figcaption>';
        echo '</figure></div>';
        $characters_query->next_post();
        ?>
        <?php
        while ( $characters_query->have_posts() ) {
            $characters_query->the_post();
            echo '<div class="swiper-slide"><figure>';
            echo get_the_post_thumbnail( get_the_ID(), 'full' );
            echo '<figcaption>';
            the_title();
            echo'</figcaption>';
            echo '</figure></div>';
        }
        ?>
    </div>
</div>