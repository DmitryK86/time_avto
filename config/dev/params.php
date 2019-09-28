<?php

return [
    'db' => [
        'host' => (getenv('ENV_MYSQL_HOST') ?: 'localhost') . ':' . (getenv('ENV_MYSQL_PORT') ?:'3306'),
        'dbName' => getenv('MYSQL_DATABASE') ?: 'timeavto',
        'username' => getenv('ENV_MYSQL_USER') ?: 'root',
        'password' => getenv('MYSQL_ROOT_PASSWORD') ?: 'root',
        'charset' => 'utf8mb4'
    ]
];