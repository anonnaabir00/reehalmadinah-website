<?php

return [
    'flatrate2' => [
        'code'         => 'flatrate2',
        'title'        => 'Flat Rate 2',
        'description'  => 'Another Flat Rate Shipping',
        'active'       => true,
        'default_rate' => '10',
        'type'         => 'per_unit',
        'class'        => 'Reehal\FlatRate2\Carriers\FlatRate2',
    ],
];