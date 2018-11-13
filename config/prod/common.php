<?php

return [
    'components' => [
        'db' => [
            // Schema cache options (for production environment)
            'enableSchemaCache' => true,
            'schemaCacheDuration' => 60,
            'schemaCache' => 'cache',
        ],
    ],
];