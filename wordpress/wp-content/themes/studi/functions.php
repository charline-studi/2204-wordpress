<?php

function create_custom_posttype() {

    // Fonction proposée par WP pour créer des Custom Post-type
    register_post_type(
        'races', 
        array(
            'label' => 'Courses',
            'description' => 'Un Grand-Prix de formule 1',
            'public' => false,
            'show_ui' => true,
        )
    );
}

add_action( 'init', 'create_custom_posttype' );