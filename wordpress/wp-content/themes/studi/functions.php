<?php

// CPT = Custom Post-Type

/*
Création de mon Custom Post-type : Courses
*/
function create_custom_posttype() {

    // Fonction proposée par WP pour créer des Custom Post-type
    register_post_type(
        'races', 
        array(
            'label' => 'Courses',
            'description' => 'Un Grand-Prix de formule 1',
            'public' => true,
            'show_ui' => true,
        )
    );
}

add_action( 'init', 'create_custom_posttype' );


/*
Création de la catégorie associée à mon CPT : Championnat
*/

function create_taxonomy_races(){

    // Fonction WP
    register_taxonomy(
        'tax_races_championship',
        'races',
        array(
            'labels' => array(
                'name' => 'Championnats',
                'singular_name' => 'Championnat'
            ),
            'description' => 'Saison',
            'public' => false,
            'show_ui' => true,
            'hierarchical' => true,
        )
    );
}

add_action('init', 'create_taxonomy_races');



/*
Exemple Portfolio
*/

function create_custom_posttype_project() {

    register_post_type(
        'project',
        array(
            'label' => 'Projets',
            'public' => true,
        )
    );
}

add_action('init', 'create_custom_posttype_project');

function create_taxo_project() {

    register_taxonomy(
        'tax_project_type',
        'project',
        array(
            'hierarchical' => true,
            'labels' => array(
                'name' => 'Types',
                'singular_name' => 'Type'
            )
        ),
    );

    register_taxonomy(
        'tax_project_clients',
        'project',
        array(
            'hierarchical' => true,
            'labels' => array(
                'name' => 'Clients',
                'singular_name' => 'Client'
            ) 
        )
    );
};

add_action('init', 'create_taxo_project');