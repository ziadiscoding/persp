<?php get_header(); ?>
<div class="content">
    <?= the_content(); ?>
</div>

<?php
$slug = basename(get_permalink());

// EXEMPLE INCLUDE EN FONCTION SLUG
/* if ( $slug === 'agenda' ) {
    get_template_part( 'template-parts/agenda' );
} */
?>

<?php get_footer(); ?>

