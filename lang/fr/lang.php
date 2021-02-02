<?php return [
    'plugin' => [
        'description' => 'Ajoute l\'API Unsplash API au widget FileUpload'
    ],

    'permission' => [
        'label' => 'Peut accéder et modifier les identifiants Unsplash'
    ],

    'settings' => [
        'description' => 'Gérer les identifiants',

        'fields' => [
            'api_key' => [
                'label' => 'Clé API'
            ],
            'api_secret' => [
                'label' => 'Mot de passe API'
            ],
        ]
    ],

    'misc' => [
        'search' => 'Rechercher',
        'load_more' => 'Voir plus',
        'photo_by' => 'Photo par',
        'on' => 'sur',
    ]
];
