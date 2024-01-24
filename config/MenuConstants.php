<?php

return [
    'MENU_ITEMS' => [
        [
            'label' => 'Home',
            'url' => '/',
        ],
        [
            'label' => 'Products',
            'url' => '/products',
        ],
        [
            'label' => 'Categories',
            'children' => [
                [
                    'label' => 'Hair Accessories',
                    'url' => '/categories/hair-accessories',
                ],
                [
                    'label' => 'Stationaries',
                    'url' => '/categories/stationaries',
                ],
            ],
        ],
        [
            'label' => 'About Us',
            'url' => '/about-us',
        ],
        [
            'label' => 'Contact',
            'url' => '/contact',
        ],
    ],
];
