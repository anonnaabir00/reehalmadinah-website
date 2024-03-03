<?php

return [
    'freeshipping' => [
        'code'         => 'freeshipping',
        'title'        => 'FreeShipping',
        'description'  => 'FreeShipping',
        'active'       => true,
        'default_rate' => '10',
        'type'         => 'per_unit',
        'class'        => 'Reehal\FreeShipping\Carriers\FreeShipping',
    ],
];