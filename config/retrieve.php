<?php

return [
    'default' => 'db',

    'db' => [
        'class' => App\libs\services\db::class,
    ],

    'csv' => [
        'class' => App\libs\services\csv::class,
    ],
];
