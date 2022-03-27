<?php

add_action( 'wp_enqueue_scripts', 'insert_css' );



function mailtrap($phpmailer) {
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '1b7283414fb582';
    $phpmailer->Password = 'f9102d915b81a4';
}

add_action('phpmailer_init', 'mailtrap');

function insert_css() {

	//########## Import all the stylesheets here like the example below ##########
	//wp_register_style( 'ploume', 'https://source.ploume.io/latest/css/ploume.css' );
	//wp_enqueue_style( 'ploume' );


	// Import the WordPress stylesheet (style.css)
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	//########## Import all the javascript scripts here like the example below ##########
	//wp_register_script( 'jquery2', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js' );
	//wp_enqueue_script( 'jquery2' );
}

add_theme_support( 'menus' );
wp_register_style('bulma', 'https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css')>

register_nav_menus( [
	'main-menu'  => 'Main navigation',
	'footer-menu'     => 'Footer navigation'
] );

add_theme_support( 'post-thumbnails' );

function create_post_type() {
	register_post_type( 'items',
		array(
			'label'              => __( 'Items' ),
			'singular_label'     => __( 'Item' ),
			'add_new_item'       => __( 'Add item' ),
			'edit_item'          => __( 'Edit item' ),
			'new_item'           => __( 'New item' ),
			'view_item'          => __( 'View item' ),
			'search_items'       => __( 'Search items' ),
			'not_found'          => __( 'Not found réalisation trouvée' ),
			'not_found_in_trash' => __( 'Not found in trash' ),
			'public'             => true,
			'show_ui'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => true,
			'menu_icon'          => 'dashicons-screenoptions',
			'taxonomies'         => array( 'types' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' ),
			'rewrite'            => array( 'slug' => 'items', 'with_front' => true )
		)
	);
}

function cptui_register_my_cpts_premier_projet() {

    /**
     * Post Type: Projet.
     */

    $labels = [
        "name" => __( "Projet", "custom-post-type-ui" ),
        "singular_name" => __( "Projet", "custom-post-type-ui" ),
    ];

    $args = [
        "label" => __( "Projet", "custom-post-type-ui" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => [ "slug" => "premier_projet", "with_front" => true ],
        "query_var" => true,
        "supports" => [ "title", "editor", "thumbnail" ],
        "show_in_graphql" => false,
    ];

    register_post_type( "premier_projet", $args );
}

add_action( 'init', 'cptui_register_my_cpts_premier_projet' );


add_action( 'init', 'create_post_type' );

