<?php

return [

    'title' => 'Inici de sessió',

    'heading' => 'Accediu al vostre compte',


    'actions' => [

        'register' => [
            'before' => 'o',
            'label' => 'obrir un compte',
        ],

        'request_password_reset' => [
            'label' => 'Heu oblidat la vostra contrasenya?',
        ],

        'authenticate' => 'Confirma per accedir',

    ],

    'form' => [

        'email' => [
            'label' => 'Adreça de correu electrònic',
        ],

        'password' => [
            'label' => 'Contrasenya',
        ],

        'remember' => [
            'label' => 'Recorda\'m',
        ],

        'actions' => [

            'authenticate' => [
                'label' => 'Accedir',
            ],

        ],

    ],

    'multi_factor' => [
        //traducir al català
        'heading' => 'Verifica la teva identitat',

        'subheading' => 'Per continuar amb l\'inici de sessió, hauràs de verificar la teva identitat.',

        'form' => [

            'provider' => [
                'label' => 'Com t\'agradaria verificar-te?',
            ],

            'actions' => [

                'authenticate' => [
                    'label' => 'Confirma per accedir',
                ],

            ],

        ],

    ],

    'messages' => [

        'failed' => 'Aquestes credencials no coincideixen amb els nostres registres',

    ],

    'notifications' => [

        'throttled' => [
            'title' => 'Massa intents de connexió',
            'body' => 'Si us plau, torneu-ho a provar en :seconds segons.',
        ],

    ],

];
