<?php

$dirname = SJoussin\LaravelScaffolder\ScaffolderConfigServiceProvider::getScaffoldDirname();
$dist_dirname = SJoussin\LaravelScaffolder\ScaffolderConfigServiceProvider::getScaffoldDistDirname();
$config_key = SJoussin\LaravelScaffolder\ScaffolderConfigServiceProvider::getScaffoldConfigKey();

return [

    'LARAVEL_ROOT_NAMESPACE' => 'App\\',

    'PACKAGE_DIR_PATH' => $dirname . "/",
    'DIST_DIR_NAME'    => $dist_dirname,

    'DIST_DIR_PATH'     => $dirname . "/" . $dist_dirname . "/",
    'PACKAGE_NAMESPACE' => "SJoussin\LaravelScaffolder\\" . $dist_dirname . "\\",
    'STUB_PATH'         => $dirname . "/stubs/",


    // -------------------------------------------
    // ---------------- CONFIG MODIFIABLE --------
    // -------------------------------------------

    // utiliser les routes/controllers issus des models resources ?
    'USE_ROUTES_RESOURCE' => false,

    // config swagger
    'swagger' => [

        'api' => [
            'host' => "http://0.0.0.0:4444/api/"
        ],

        'oauth' => [
            'host'   => "http://dev.oauth.cartegriseminute.net",
            'scopes' => [
                'route:any'     => 'Grant route:any access',
                'route:anyView' => 'Grant route:anyView access',
                'route:store'   => 'Grant route:store access',
                'route:edit'    => 'Grant route:edit access',
                'route:delete'  => 'Grant route:delete access',
            ]
        ],
    ],


    // config des models eloquent. Sur lesquels sont basés la génération
    'resources' => [

        'User' => [
            'connection' => 'mysql',
            'table'      => 'user',
            'attributes' => [
                'id'      => [
                    'type'           => 'int',
                    'db_type'        => 'integer',
                    'length'         => '33',
                    'nullable'       => false,
                    'default'        => null,
                    'default_seeder' => null,
                    'extra'          => ['PRIMARY_KEY', 'AUTO_INCREMENT'],
                    'rules'          => 'required|integer',
                ],
                'phone'      => [
                    'type'           => 'string',
                    'db_type'        => 'string',
                    'length'         => '33',
                    'nullable'       => false,
                    'default'        => null,
                    'default_seeder' => null,
                    'extra'          => [],
                    'rules'          => 'required|string',
                ],
                'username'      => [
                    'type'           => 'string',
                    'db_type'        => 'string',
                    'length'         => '50',
                    'nullable'       => false,
                    'default'        => null,
                    'default_seeder' => null,
                    'extra'          => [],
                    'rules'          => 'required|string',
                ],
                'password'      => [
                    'type'           => 'string',
                    'db_type'        => 'string',
                    'length'         => '33',
                    'nullable'       => false,
                    'default'        => null,
                    'default_seeder' => null,
                    'extra'          => [],
                    'rules'          => 'required|string',
                ],
                'role'      => [
                    'type'           => 'string',
                    'db_type'        => 'string',
                    'length'         => '33',
                    'nullable'       => false,
                    'default'        => null, // CUSTOMER, DELIVERY, ADMIN
                    'default_seeder' => null,
                    'extra'          => [],
                    'rules'          => 'required|string',
                ]
            ]
        ],



        'Location' => [
            'connection' => 'mysql',
            'table'      => 'location',
            'attributes' => [
                'id'      => [
                    'type'           => 'int',
                    'db_type'        => 'integer',
                    'length'         => '33',
                    'nullable'       => false,
                    'default'        => null,
                    'default_seeder' => null,
                    'extra'          => ['PRIMARY_KEY', 'AUTO_INCREMENT'],
                    'rules'          => 'required|integer',
                ],
                'user_id' => [
                    'type'           => 'int',
                    'db_type'        => 'integer',
                    'length'         => '33',
                    'nullable'       => true,
                    'default'        => null,
                    'default_seeder' => 1,
                    'extra'          => ['FOREIGN_KEY'],
                    'rules'          => 'nullable|integer',
                ],
                'lat'     => [
                    'type'           => 'float',
                    'db_type'        => 'float',
                    'length'         => '11',
                    'nullable'       => false,
                    'default'        => null,
                    'default_seeder' => '9.0',
                    'extra'          => [],
                    'rules'          => 'required|decimal:0,2',
                ],
                'long'    => [
                    'type'           => 'float',
                    'db_type'        => 'float',
                    'length'         => '11',
                    'nullable'       => false,
                    'default'        => null,
                    'default_seeder' => '1.10',
                    'extra'          => [],
                    'rules'          => 'required|decimal:0,2',
                ],
                'address'    => [
                    'type'           => 'string',
                    'db_type'        => 'string',
                    'length'         => '255',
                    'nullable'       => false,
                    'default'        => null,
                    'default_seeder' => null,
                    'extra'          => [],
                    'rules'          => 'required|string',
                ]
            ]
        ],


        'Product' => [
            'connection' => 'mysql',
            'table'      => 'product',
            'attributes' => [
                'id'      => [
                    'type'           => 'int',
                    'db_type'        => 'integer',
                    'length'         => '33',
                    'nullable'       => false,
                    'default'        => null,
                    'default_seeder' => null,
                    'extra'          => ['PRIMARY_KEY', 'AUTO_INCREMENT'],
                    'rules'          => 'required|integer',
                ],
                'name'      => [
                    'type'           => 'string',
                    'db_type'        => 'string',
                    'length'         => '255',
                    'nullable'       => false,
                    'default'        => null,
                    'default_seeder' => null,
                    'extra'          => [],
                    'rules'          => 'required|string',
                ],
                'description'      => [
                    'type'           => 'string',
                    'db_type'        => 'string',
                    'length'         => '255',
                    'nullable'       => false,
                    'default'        => null,
                    'default_seeder' => null,
                    'extra'          => [],
                    'rules'          => 'required|string',
                ],
                'price'      => [
                    'type'           => 'int',
                    'db_type'        => 'integer',
                    'length'         => '33',
                    'nullable'       => false,
                    'default'        => null,
                    'default_seeder' => null,
                    'extra'          => [],
                    'rules'          => 'required|integer',
                ],
                'image'      => [
                    'type'           => 'string',
                    'db_type'        => 'string',
                    'length'         => '255',
                    'nullable'       => false,
                    'default'        => null,
                    'default_seeder' => null,
                    'extra'          => [],
                    'rules'          => 'required|string',
                ],
                'available'      => [
                    'type'           => 'bool',
                    'db_type'        => 'boolean',
                    'length'         => '33',
                    'nullable'       => false,
                    'default'        => null,
                    'default_seeder' => null,
                    'extra'          => [],
                    'rules'          => 'required|boolean',
                ]
            ]
        ],



        'Command' => [
            'connection' => 'mysql',
            'table'      => 'command',
            'attributes' => [
                'id'      => [
                    'type'           => 'int',
                    'db_type'        => 'integer',
                    'length'         => '33',
                    'nullable'       => false,
                    'default'        => null,
                    'default_seeder' => null,
                    'extra'          => ['PRIMARY_KEY', 'AUTO_INCREMENT'],
                    'rules'          => 'required|integer',
                ],
                'user_id'      => [
                    'type'           => 'int',
                    'db_type'        => 'integer',
                    'length'         => '33',
                    'nullable'       => false,
                    'default'        => null,
                    'default_seeder' => null,
                    'extra'          => [],
                    'rules'          => 'required|integer',
                ],
                'date'      => [
                    'type'           => 'datetime',
                    'db_type'        => 'datetime',
                    'length'         => '33',
                    'nullable'       => false,
                    'default'        => null,
                    'default_seeder' => null,
                    'extra'          => [],
                    'rules'          => 'required|date',
                ],
                'status'      => [
                    'type'           => 'string',
                    'db_type'        => 'string',
                    'length'         => '33',
                    'nullable'       => false,
                    'default'        => 'CART', // CART, COMMAND_WAITING, COMMAND_FINISH, COMMAND_CANCEL
                    'default_seeder' => null,
                    'extra'          => [],
                    'rules'          => 'required|string',
                ]
            ]
        ],

        'CommandProduct' => [
            'connection' => 'mysql',
            'table'      => 'command_product',
            'attributes' => [
                'command_id'      => [
                    'type'           => 'int',
                    'db_type'        => 'integer',
                    'length'         => '33',
                    'nullable'       => false,
                    'default'        => null,
                    'default_seeder' => null,
                    'extra'          => ['FOREIGN_KEY'],
                    'rules'          => 'required|integer',
                ],
                'product_id'      => [
                    'type'           => 'int',
                    'db_type'        => 'integer',
                    'length'         => '33',
                    'nullable'       => false,
                    'default'        => null,
                    'default_seeder' => null,
                    'extra'          => ['FOREIGN_KEY'],
                    'rules'          => 'required|integer',
                ]
            ]
        ],

        'Payment' => [
            'connection' => 'mysql',
            'table'      => 'payment',
            'attributes' => [
                'id'      => [
                    'type'           => 'int',
                    'db_type'        => 'integer',
                    'length'         => '33',
                    'nullable'       => false,
                    'default'        => null,
                    'default_seeder' => null,
                    'extra'          => ['PRIMARY_KEY', 'AUTO_INCREMENT'],
                    'rules'          => 'required|integer',
                ],
                'command_id'      => [
                    'type'           => 'int',
                    'db_type'        => 'integer',
                    'length'         => '33',
                    'nullable'       => false,
                    'default'        => null,
                    'default_seeder' => null,
                    'extra'          => ['FOREIGN_KEY'],
                    'rules'          => 'required|integer',
                ],
                'type'      => [
                    'type'           => 'string',
                    'db_type'        => 'string',
                    'length'         => '33',
                    'nullable'       => false,
                    'default'        => null, // CASH , STRIPE ...
                    'default_seeder' => null,
                    'extra'          => [],
                    'rules'          => 'required|string',
                ],
                'status'      => [
                    'type'           => 'string',
                    'db_type'        => 'string',
                    'length'         => '33',
                    'nullable'       => false,
                    'default'        => null, // WAITING, PAID, FAILED, CANCELED
                    'default_seeder' => null,
                    'extra'          => [],
                    'rules'          => 'required|string',
                ]
            ]
        ],


        'Delivery' => [
            'connection' => 'mysql',
            'table'      => 'delivery',
            'attributes' => [
                'id'      => [
                    'type'           => 'int',
                    'db_type'        => 'integer',
                    'length'         => '33',
                    'nullable'       => false,
                    'default'        => null,
                    'default_seeder' => null,
                    'extra'          => ['PRIMARY_KEY', 'AUTO_INCREMENT'],
                    'rules'          => 'required|integer',
                ],
                'command_id'      => [
                    'type'           => 'int',
                    'db_type'        => 'integer',
                    'length'         => '33',
                    'nullable'       => false,
                    'default'        => null,
                    'default_seeder' => null,
                    'extra'          => ['FOREIGN_KEY'],
                    'rules'          => 'required|integer',
                ],

                'delivery_user_id'      => [
                    'type'           => 'int',
                    'db_type'        => 'integer',
                    'length'         => '33',
                    'nullable'       => false,
                    'default'        => null,
                    'default_seeder' => null,
                    'extra'          => ['FOREIGN_KEY'],
                    'rules'          => 'required|integer',
                ],

                'date_start'      => [
                    'type'           => 'datetime',
                    'db_type'        => 'datetime',
                    'length'         => '33',
                    'nullable'       => false,
                    'default'        => null,
                    'default_seeder' => null,
                    'extra'          => [],
                    'rules'          => 'required|date',
                ],

                'date_finish_estimation'      => [
                    'type'           => 'datetime',
                    'db_type'        => 'datetime',
                    'length'         => '33',
                    'nullable'       => false,
                    'default'        => null,
                    'default_seeder' => null,
                    'extra'          => [],
                    'rules'          => 'required|date',
                ],

                'date_finish'      => [
                    'type'           => 'datetime',
                    'db_type'        => 'datetime',
                    'length'         => '33',
                    'nullable'       => false,
                    'default'        => null,
                    'default_seeder' => null,
                    'extra'          => [],
                    'rules'          => 'required|date',
                ],

                'status'      => [
                    'type'           => 'string',
                    'db_type'        => 'string',
                    'length'         => '33',
                    'nullable'       => false,
                    'default'        => null, // WAITING, DELIVERING, DELIVERED
                    'default_seeder' => null,
                    'extra'          => [],
                    'rules'          => 'required|string',
                ]
            ]
        ],







    ],

];
