<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Table Columns
    |--------------------------------------------------------------------------
    */

    'column.name' => 'Nom',
    'column.guard_name' => 'Guàrdia',
    'column.roles' => 'Rols',
    'column.permissions' => 'Permisos',
    'column.updated_at' => 'Actualitzat el',

    /*
    |--------------------------------------------------------------------------
    | Form Fields
    |--------------------------------------------------------------------------
    */

    'field.name' => 'Nom',
    'field.guard_name' => 'Guàrdia',
    'field.permissions' => 'Permisos',
    'field.select_all.name' => 'Seleccionar tots',
    'field.select_all.message' => 'Habilitar tots els permisos actualment <span class="text-primary font-medium">habilitats</span> per a aquest rol',

    /*
    |--------------------------------------------------------------------------
    | Navigation & Resource
    |--------------------------------------------------------------------------
    */

    'nav.group' => 'Filament Shield',
    'nav.role.label' => 'Rols',
    'nav.role.icon' => 'heroicon-o-shield-check',
    'resource.label.role' => 'Rol',
    'resource.label.roles' => 'Rols',

    /*
    |--------------------------------------------------------------------------
    | Section & Tabs
    |--------------------------------------------------------------------------
    */

    'section' => 'Entitats',
    'resources' => 'Recursos',
    'widgets' => 'Widgets',
    'pages' => 'Pàgines',
    'custom' => 'Permisos personalitzats',

    /*
    |--------------------------------------------------------------------------
    | Messages
    |--------------------------------------------------------------------------
    */

    'forbidden' => 'Vostè no té permís d\'accés',

    /*
    |--------------------------------------------------------------------------
    | Resource Permissions' Labels
    |--------------------------------------------------------------------------
    */

    'resource_permission_prefixes_labels' => [
        'view' => 'Veure un registre en particular',
        'view_any' => 'Veure el llistat de registres',
        'create' => 'Crear',
        'update' => 'Actualitzar',
        'delete' => 'Eliminar un registre en particular',
        'delete_any' => 'Eliminar diversos registres a la vegada',
        'force_delete' => 'Forçar l\'eliminació d\'un registre en particular',
        'force_delete_any' => 'Forçar l\'eliminació de diversos registres',
        'restore' => 'Restaurar un registre en particular',
        'reorder' => 'Reordenar',
        'restore_any' => 'Restaurar diversos registres',
        'replicate' => 'Replicar',
    ],
];
