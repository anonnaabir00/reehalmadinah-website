<?php

return [
    [
        'key'    => 'sales.carriers.freeshipping',
        'name'   => 'FreeShipping',
        'sort'   => 1,
        'fields' => [
            [
                'name'          => 'title',
                'title'         => 'Free Shipping Title (Over 50)',
                'type'          => 'text',
                'validation'    => 'required',
                'channel_based' => false,
                'locale_based'  => true,
            ], [
                'name'          => 'description',
                'title'         => 'Free Shipping Description (Over 50)',
                'type'          => 'textarea',
                'channel_based' => false,
                'locale_based'  => true,
            ],
            [
                'name'          => 'below_title',
                'title'         => 'Free Shipping Title (Below 50)',
                'type'          => 'text',
                'validation'    => 'required',
                'channel_based' => false,
                'locale_based'  => true,
            ],
            [
                'name'          => 'below_description',
                'title'         => 'Free Shipping Description (Below 50)',
                'type'          => 'textarea',
                'channel_based' => false,
                'locale_based'  => true,
            ],
            [
                'name'          => 'rate',
                'title'         => 'Rate',
                'type'          => 'number',
                'channel_based' => false,
                'locale_based'  => true,
            ],
            [
                'name'          => 'active',
                'title'         => 'Status',
                'type'          => 'boolean',
                'validation'    => 'required',
                'channel_based' => false,
                'locale_based'  => true,
            ]
        ]
    ]
];