<?php

return [
    'role_structure' => [
        'admin' => [
            'assets' => 'c,r,u,d',
            'rooms' => 'c,r,u,d',
            'plans' => 'c,r,u,d',
            'dosen' => 'c,r,u,d',
            'mahasiswa' => 'c,r,u,d',
            'karyawan' => 'c,r,u,d',
            'settings' => 'c,r,u,d',
            'users' => 'c,r,u,d',
            'roles' => 'c,r,u,d',
            'permissions' => 'c,r,u,d',
        ],
        'karyawan' => [
            'assets' => 'c,r,u,d',
            'rooms' => 'c,r,u,d',
            'plans' => 'c,r,u,d',
            'dosen' => 'r',
            'mahasiswa' => 'c,r,u,d',
            'karyawan' => 'r,u',
            'users' => 'c,r,u,d',
        ],
        'dosen' => [
            'assets' => 'r',
            'rooms' => 'r',
            'plans' => 'r',
            'dosen' => 'r',
            'mahasiswa' => 'r',
            'karyawan' => 'r',
        ],
        'mahasiswa' => [
            'assets' => 'r',
            'rooms' => 'r',
            'dosen' => 'r',
            'karyawan' => 'r',
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
