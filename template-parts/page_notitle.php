<?php get_header();
$addContentClass = '';
global $post;
if( $post->ID == 48) { 
    $addContentClass = ' content--noTopMargin';
 }
 ?>

<div class="content<?= $addContentClass; ?>">
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

