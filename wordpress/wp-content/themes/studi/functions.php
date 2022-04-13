<?php

// CPT = Custom Post-Type

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

function load_styles() {

    wp_enqueue_style(
        'main',
        get_template_directory_uri() . '/css/style.css',
        array(),
        '',
        false
    );
}

add_action('wp_enqueue_scripts', 'load_styles');