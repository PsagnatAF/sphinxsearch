<?php
return [
    /**
     * Sphinx params
     */
    'host'          =>  '127.0.0.1',
    'port'          =>  9312,
    'timeout'       =>  30,
    'indexes'       =>  [
        'my_index_name' => [
            'table'         =>  'keywords',
            'column'        =>  'id'
        ],
    ],
    /**
     * Database params
     */
    'driver'        =>  env("DB_CONNECTION"), /** pgsql, mysql */
    'database'      =>  [
        'host'          =>  env("DB_HOST"), 
        'port'          =>  env("DB_PORT"),
        'dbname'        =>  env("DB_DATABASE"),
        'user'          =>  env("DB_USERNAME"),
        'password'      =>  env("DB_PASSWORD"),
    ],
];
