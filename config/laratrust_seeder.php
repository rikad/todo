<?php

return [
    'role_structure' => [
        'admin' => [
            'projects' => 'c,r,u,d',
            'difficulties' => 'c,r,u,d',
            'users' => 'c,r,u,d',
            'settings' => 'c,r,u,d',
            'users' => 'c,r,u,d',
            'roles' => 'c,r,u,d',
            'permissions' => 'c,r,u,d',
        ],
        'user' => [
            'projects' => 'r',
            'difficulties' => 'r',
            'users' => 'r,u',
        ]
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
