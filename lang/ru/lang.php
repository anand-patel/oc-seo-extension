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
    ],
    'help' => [
        'other_tags_hint' => '
            В поле "Другие Мета-теги" вы можете вставлять мета-теги которые будут общими для всех страниц.<br>
            Вы можете вставлять такие метатеги, как author, view port или любой тег, который вы хотите разместить в разделе <head/>.',
        'og_tags_description' => '
            <b>Что такое Open Graph?</b>
            <br/>
            Протокол Open Graph позволяет любой веб-странице стать многофункциональным объектом в социальном графе.
            <br/>
            <br/>
            В настоящее время включены следующие теги Open Graph (другие теги будут добавлены в ближайшее время):
            <ul>
                <li>fb:app_id</li>
                <li>og:site_name</li>
                <li>og:title</li>
                <li>og:url</li>
                <li>og:description</li>
            </ul>'
    ]
];
