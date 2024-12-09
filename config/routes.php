<?php
return [
    'admin' => [
        'home' => ['admin.home.index'],
        'category' => [
            'list' => ['admin.category.index', 'admin.category.create', 'admin.category.edit'],
            'index' => ['admin.category.index'],
            'create' => ['admin.category.create']
        ],
        'product' => [
            'list' => ['admin.product.index', 'admin.product.create', 'admin.product.edit'],
            'index' => ['admin.product.index'],
            'create' => ['admin.product.create']
        ]
    ]
];
