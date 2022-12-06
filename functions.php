<?php

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'menus' );

function register_assets(){
	
    wp_enqueue_style(
          'reset-css',
          get_template_directory_uri().'/assets/styles/reset.css',
          array(),
          '1.0'
    );
	
    wp_enqueue_style(
          'main-css',
          get_template_directory_uri().'/assets/styles/main.css',
          array(),
          '1.0'
    );
	
    wp_enqueue_style(
          'content-css',
          get_template_directory_uri().'/assets/styles/content.css',
          array(),
          '1.0'
    );
	
    wp_enqueue_style(
          'nav-css',
          get_template_directory_uri().'/assets/styles/nav.css',
          array(),
          '1.0'
    );
	
    wp_enqueue_style(
          'footer-css',
          get_template_directory_uri().'/assets/styles/footer.css',
          array(),
          '1.0'
    );
	
    wp_enqueue_style(
          'form-css',
          get_template_directory_uri().'/assets/styles/form.css',
          array(),
          '1.0'
    );
	
    wp_enqueue_style(
          'sliderTemoignage-css',
          get_template_directory_uri().'/assets/styles/sliderTemoignage.css',
          array(),
          '1.0'
    );
    
}
add_action('wp_enqueue_scripts', 'register_assets');


// suppression de la balise title dans la function wp_head
// remove_action( 'wp_head', '_wp_render_title_tag', 1 );

// suppression des attributs type sur les balises script et style (w3c)
add_action(
  'after_setup_theme',
  function() {
      add_theme_support( 'html5', [ 'script', 'style' ] );
  }
);

/*
* On utilise une fonction pour créer notre custom post type 'Séries TV'
*/

function temoignages_custom_post_type() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Témoignages', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Témoignages', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Témoignages'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Tous les Témoignages'),
		'view_item'           => __( 'Voir les Témoignages'),
		'add_new_item'        => __( 'Ajouter un nouveau Témoignages'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer le Témoignages'),
		'update_item'         => __( 'Modifier le Témoignages'),
		'search_items'        => __( 'Rechercher un Témoignages'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Témoignages'),
		'description'         => __( 'Témoignages'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'revisions', 'custom-fields', ),
		/* 
		* Différentes options supplémentaires
		*/
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'temoignages'),

	);
	
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'temoignages', $args );

}

add_action( 'init', 'temoignages_custom_post_type', 0 );

add_filter('enter_title_here', 'my_title_place_holder' , 20 , 2 );
    function my_title_place_holder($title , $post){

        if( $post->post_type == 'temoignages' ){
            $my_title = "Signature du témoignage";
            return $my_title;
        }

        return $title;

    }