<?php
$category = get_queried_object();
$this_slug = $category->slug;  // renvoi le slug DE LA PAGE
$this_id = $category->term_id; // renvoi l'ID DE LA PAGE
$this_name = $category->name;  // renvoi le name DE LA PAGE
if (!isset($this_name)||empty($this_name)) {
    $this_name = get_the_title();
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $this_name; ?> | <?= get_bloginfo( 'name' ); ?></title>
    <meta name="description" content="Marie-Aline GAVAND - La fabrique de perspectives - Cabinet de thérapie et de coaching. Psychothérapie / Thérapie brève / Soutien psychologique / Coaching de projets d'orientation et professionnels / Bilan de compétences / Analyse des pratiques professionnelles.  &#171;Psychopraticienne et coach professionnelle certifiée, j’accompagne jeunes et adultes, selon leurs besoins, à « se fabriquer des perspectives » personnelles et professionnelles&#187;." />
    
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GM48LBFTK7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GM48LBFTK7');
</script>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php get_template_part( 'template-parts/nav' ); ?>
    <!-- <div class="content"> -->
