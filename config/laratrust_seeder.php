<?php

return [
    'role_structure' => [
        'admin' => [
            'tanaman' => 'c,r,u,d',
            'pegawai' => 'c,r,u,d',
            'users' => 'c,r,u,d',
            'legal' => 'c,r,u,d',
            'finance' => 'c,r,u,d',
        ],
        'user' => [
        ],
    ],
    // 'permission_structure' => [
    //     'cru_user' => [
    //         'tanaman' => 'c,r,u'
    //     ],
    // ],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
