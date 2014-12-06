<?php

return [
    'plugin' => [
        'name' =>  'Поисковая оптимизация',
        'description' => 'Управление SEO информацией для CMS страниц, статических страниц и постов блога'
    ],
    'settings' => [
        'label' => 'Поисковая оптимизация',
        'description' => 'Настройки поисковой оптимизации',
        'tab_settings' => [
            'label' => 'Настройки',
            'site' => 'Использовать название сайта в <title>',
            'site_comment' => 'Включите, если вы хотите использовать название сайта в <title>',
            'sitename' => 'Название сайта',
            'canonical' => 'Использовать URL-адрес по умолчанию, как канонический',
            'canonical_comment' => 'Если канонический URL-адрес не предоставляется, то использовать URL-адрес по умолчанию, как канонический',
            'sitename_comment_above' => 'Префикс или суффикс название сайта в <title>',
            'sitename_comment' => 'Название сайта | <seo/page/blog title>',
            'sitename_placeholder' => 'Название |',
            'title_position' => 'Название сайта представлено как',
            'title_position_comment' => 'Выберите место, где название сайта должно отображаться, т.е. в начале или в конце',
            'title_position_prefix' => 'Префикс (в начале)',
            'title_position_suffix' => 'Суффикс (в конце)',
            'other_tags' => 'Другие Мета-теги',
            'other_tags_comment_above' => 'Введите теги, которые вы хотите вставить на все страницы',
            'other_tags_comment' => 'Например,такие теги как author, viewport и т.д.',
        ],
        'tab_og' => [
            'label' => 'Open Graph',
            'og' => 'Использовать Open Graph(og)',
            'og_comment' => 'Включить Open Graph(og) теги',
            'sitename' => 'Название сайта для Open Graph',
            'sitename_comment' => 'Название вашего сайта. Не используйте URL сайта (например, не "seoextension.com", а "SEO Extension").',
            'fb' => 'Facebook App Id',
            'fb_comment' => 'Уникальный идентификатор, что позволяет Facebook идентифицировать ваш сайт.'
        ],
    ],
    'component' => [
        'blog' => [
            'name' => 'SEO блога',
            'description' => 'Инъекция SEO полей для блога'
        ],
        'cms' => [
            'name' => 'SEO CMS страниц',
            'description' => 'Инъекция SEO полей для CMS страниц'
        ],
        'static' => [
            'name' => 'SEO статических страниц',
            'description' => 'Инъекция SEO полей для статических страниц'
        ]
    ]
];
