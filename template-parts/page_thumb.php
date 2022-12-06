<?php get_header(); ?> 
<div class="landingContent <?= $GLOBALS["flexdirection"]; ?>">
    <div class="content">
        <?= the_content(); ?>
    </div>
    <!-- <div class="thumbnail" style="background-image: url('<?= get_the_post_thumbnail_url(); ?>');"> -->
    <div class="thumbnail">
        <img src="<?= get_the_post_thumbnail_url(); ?>" alt="image d'illustration de la page">
    </div>
</div>
<?php get_footer(); ?>