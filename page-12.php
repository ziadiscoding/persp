<?php
$GLOBALS["citationOnThumb"] = '';
$GLOBALS["citationOnThumb2"] = '';
/* $img["first"] = get_bloginfo('url').'/wp-content/uploads/2023/01/fabrique02.jpg';
$img["second"] = get_bloginfo('url').'/wp-content/uploads/2023/01/fabrique01.jpg'; */
$img["first"] = get_bloginfo('url').'/wp-content/uploads/2023/01/Fabrique-VosPers-Perso-960x650px.jpg';
$img["second"] = get_bloginfo('url').'/wp-content/uploads/2023/01/Fabrique-VosPers-Pro-960x650px.jpg';
$GLOBALS["flexdirection"] = '';
$GLOBALS["flexdirection2"] = 'landingContent--noreverse';
?>
<?php get_header(); ?> 

<div class="content" style="margin-top:2rem; margin-bottom:2rem;">
    <?= get_the_content(null, false, 500); ?>
</div>






<div class="backWhite landingContent <?= $GLOBALS["flexdirection"]; ?>">
    <div class="content" id="stpd_exep">
        <?= get_the_content(null, false, 506); ?>
    </div>
    <div class="thumbnail">
        <figure>
            <img src="<?= $img["first"]; ?>" alt="image d'illustration de la page">
            <figcaption><?= $GLOBALS["citationOnThumb"]; ?></figcaption>
        </figure>
    </div>
</div>



<div class="backWhite landingContent <?= $GLOBALS["flexdirection2"]; ?>">
    <div class="content">
        <?= get_the_content(null, false, 508); ?>
    </div>
    <div class="thumbnail">
        <figure>
            <img src="<?= $img["second"]; ?>" alt="image d'illustration de la page">
            <figcaption><?= $GLOBALS["citationOnThumb2"]; ?></figcaption>
        </figure>
    </div>
</div>


<div class="content">
    <?= get_the_content(null, false, 504); ?>
</div>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/scripts/puces.js"></script>
<?php get_footer(); ?>