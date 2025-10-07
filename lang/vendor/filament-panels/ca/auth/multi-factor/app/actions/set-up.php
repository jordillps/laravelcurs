<?php

return [
//traduir a catalan
    'label' => 'Configurar',

    'modal' => [

        'heading' => 'Configurar la aplicació d\'autenticació',

        'description' => <<<'BLADE'
            Necessitarà una aplicació com Google Authenticator (<x-filament::link href="https://itunes.apple.com/us/app/google-authenticator/id388497605" target="_blank">iOS</x-filament::link>, <x-filament::link href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2" target="_blank">Android</x-filament::link>) per completar aquest procés.
            BLADE,

        'content' => [

            'qr_code' => [

                'instruction' => 'Escaneja aquest codi QR amb la teva aplicació d\'autenticació:',

                'alt' => 'Codi QR per escanejar amb una aplicació d\'autenticació',

            ],

            'text_code' => [

                'instruction' => 'O bé, insereix aquest codi manualment:',

                'messages' => [
                    'copied' => 'Copiat',
                ],

            ],

            'recovery_codes' => [

                'instruction' => 'Guardeu els següents codis de recuperació en un lloc segur. Només es mostraran una vegada, i els necessitareu si perdeu l\'accés a la vostra aplicació d\'autenticació:',

            ],

        ],

        'form' => [

            'code' => [

                'label' => 'Insereix el codi de 6 dígits de l\'aplicació d\'autenticació',

                'validation_attribute' => 'codi',

                'below_content' => 'Necessitarà inserir el codi de 6 dígits de la seva aplicació d\'autenticació cada vegada que iniciï sessió o realitzi accions sensibles.',

                'messages' => [

                    'invalid' => 'El codi introduït no és vàlid.',

                ],

            ],

        ],

        'actions' => [

            'submit' => [
                'label' => 'Habilitar aplicació d\'autenticació',
            ],

        ],

    ],

    'notifications' => [

        'enabled' => [
            'title' => 'L\'aplicació d\'autenticació ha estat habilitada',
        ],

    ],

];
