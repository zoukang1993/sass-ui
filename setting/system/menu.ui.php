<?php
$collection = new \Gap\Config\ConfigCollection();

$collection->set('menu', [
    'logo' => [
        'title' => 'logo',
        'route' => 'logo'
    ],
    'font' => [
        'title' => 'font',
        'route' => 'font'
    ],
    'box' => [
        'title' => 'box',
        'route' => 'box'
    ],
    'border' => [
        'title' => 'border',
        'route' => 'border'
    ],
    'list' => [
        'title' => 'list',
        'route' => 'list'
    ],
    'color' => [
        'title' => 'color',
        'route' => 'color'
    ],
    'form' => [
        'title' => 'form',
        'route' => 'form'
    ],
    'button' => [
        'title' => 'button',
        'route' => 'button'
    ],
    'flex' => [
        'title' => 'flex',
        'route' => 'flex'
    ],
    'card' => [
        'title' => 'card',
        'route' => 'card'
    ],
    'grid' => [
        'title' => 'grid',
        'route' => 'grid'
    ],
    'component' => [
        'title' => 'component',
        'route' => 'component'
    ],
    'other' => [
        'title' => 'other',
        'route' => 'other',
        'fetchMenu' => [
            'info' => [
                'title' => 'info',
                'route' => 'other'
            ],
            'sku' => [
                'title' => 'sku',
                'route' => 'other'
            ],
            'service' => [
                'title' => 'service',
                'route' => 'other'
            ]
        ]
    ]
]);

return $collection;
