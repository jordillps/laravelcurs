<?php

return [
    //traducir al català
    'label' => 'Apagar',

    'modal' => [

        'heading' => 'Deshabilitar codis de verificació per correu',

        'description' => '¿Segur que voleu deixar de rebre codis de verificació per correu? Desactivar aquesta opció eliminarà una capa addicional de seguretat del vostre compte.',

        'form' => [

            'code' => [

                'label' => 'Insereix el codi de 6 dígits que t\'hem enviat per correu electrònic',

                'validation_attribute' => 'codi',

                'actions' => [

                    'resend' => [

                        'label' => 'Enviar un nou codi per correu electrònic',

                        'notifications' => [

                            'resent' => [
                                'title' => 'Us hem enviat un nou codi per correu electrònic.',
                            ],

                        ],

                    ],

                ],

                'messages' => [

                    'invalid' => 'El codi introduït no és vàlid.',

                ],

            ],

        ],

        'actions' => [

            'submit' => [
                'label' => 'Deshabilitar codis de verificació per correu',
            ],

        ],

    ],

    'notifications' => [

        'disabled' => [
            'title' => 'Els codis de verificació per correu han estat deshabilitats',
        ],

    ],

];
