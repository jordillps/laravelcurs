<?php

return [
    //traducir al català    
    'label' => 'Apagar',

    'modal' => [

        'heading' => 'Deshabilitar l\'aplicació d\'autenticació',

        'description' => 'Està segur que vol deixar d\'utilitzar l\'aplicació d\'autenticació? Deshabilitar-la eliminarà una capa addicional de seguretat del seu compte.',

        'form' => [

            'code' => [

                'label' => 'Insereix el codi de 6 dígits de l\'aplicació d\'autenticació',

                'validation_attribute' => 'codi',

                'actions' => [

                    'use_recovery_code' => [
                        'label' => 'Use un codi de recuperació en el seu lloc',
                    ],

                ],

                'messages' => [

                    'invalid' => 'El codi introduït no és vàlid.',

                ],

            ],

            'recovery_code' => [

                'label' => 'O bien, ingrese un código de recuperación',

                'validation_attribute' => 'código de recuperación',

                'messages' => [

                    'invalid' => 'El código de recuperación ingresado no es válido.',

                ],

            ],

        ],

        'actions' => [

            'submit' => [
                'label' => 'Deshabilitar aplicación de autenticación',
            ],

        ],

    ],

    'notifications' => [

        'disabled' => [
            'title' => 'La aplicación de autenticación ha sido deshabilitada',
        ],

    ],

];
