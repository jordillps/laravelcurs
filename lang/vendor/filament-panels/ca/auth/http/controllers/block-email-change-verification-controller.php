<?php

return [

    'notifications' => [

        'blocked' => [
            //traducir al català
            'title' => 'Canvi de correu electrònic bloquejat',
            'body' => 'Ha bloquejat amb èxit un intent de canvi de correu electrònic a :email. Si no va fer la sol·licitud original, contacti\'ns de seguida.',
        ],

        'failed' => [
            'title' => 'Error al bloquejar el canvi de correu electrònic',
            'body' => 'Lamentablement, no s\'ha pogut evitar que el correu electrònic canviés a :email, ja que estava verificat abans que es bloquegés. Si no va fer la sol·licitud original, contacti\'ns de seguida.',
        ],

    ],

];
