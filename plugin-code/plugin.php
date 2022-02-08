<?php

/**
 * Plugin Name:DreamTeam
 * Description:"plugin permettant de générer les CPT et Champs personnalisés sous wordpress"
 * Author:Epsilon
 */

add_action('init', function () {
    register_post_type('formations', [
        'label' => 'formations',
        'public' => true,
        'menu_icon' => 'dashicons-html'

    ]);
});


acf_add_local_field_group([
    'key' => 'Formation Simplon',
    'title' => 'Formation Simplon',
    'fields' => [
        [
            'key' => 'field_title',
            'label' => 'Title',
            'name' => 'title',
            'type' => 'text',
        ],
        [
            'key' => 'field_description',
            'label' => 'Description',
            'name' => 'description',
            'type' => 'textarea',
        ],
        [
            'key' => 'field_image',
            'label' => 'Image',
            'name' => 'image',
            'type' => 'image',
        ],
        [
            'key' => 'field_link',
            'label' => 'Link',
            'name' => 'image',
            'type' => 'link',
        ]

    ],
    'location' => [
        [
            [
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'formations',
            ],
        ],
    ],
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
]);
