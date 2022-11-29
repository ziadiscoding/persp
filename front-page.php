<?php get_header(); ?> 
<div class="landingContent">
    <div class="content">
        <?= the_content(); ?>
    </div>
    <div class="thumbnail" style="background-image: url('<?= get_the_post_thumbnail_url(); ?>');">

    </div>
</div>
<?php get_footer(); ?>