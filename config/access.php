<?php

return [

    'delimiter' => ',',

    /**
     * Menu action list that can be have.
     */
    'menu' => [
        'admin/user' => [
            'index' => 'index',
            'action' => ['index', 'detail', 'create', 'update', 'activate', 'deactivate'],
        ],
        'admin/role' => [
            'index' => 'index',
            'action' => ['index', 'detail', 'create', 'update', 'delete'],
        ],
        'admin/menu' => [
            'index' => 'index',
            'action' => ['index', 'detail', 'create', 'update', 'delete'],
        ],
        'admin/data_penduduk'=>[
            'index' => 'index',
            'action' => ['index', 'detail', 'create', 'update', 'delete',],
        ],
        'admin/pelayanan_surat'=>[
            'index' => 'index',
            'action' => ['index', 'detail', 'create', 'update', 'delete',],
        ],
    ]
];
