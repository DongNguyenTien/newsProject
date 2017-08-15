<?php

return [
    'news_manager' => [
        'text'      => 'news::menu.news_manager',
        'class'     => '',
        'icon'      => 'fa fa-newspaper-o',
        'order'     => 10,
        'sub'       => [
            'news_categories' => [
                'route'      => 'news.news_category.index',
                'permission' => ['news.news_category.index'],
                'class'      => '',
                'icon'       => 'fa fa-list-alt',
                'name'       => 'news_categories',
                'text'       => 'news::menu.news_categories',
                'order'      => 1,
                'sub'        => []
            ],
            'news_posts' => [
                'route'      => 'news.news_post.index',
                'permission' => ['news.news_post.index'],
                'class'      => '',
                'icon'       => 'fa fa-newspaper-o',
                'name'       => 'news_posts',
                'text'       => 'news::menu.news_posts',
                'order'      => 2,
                'sub'        => []
            ]
        ]
    ]
];
