<?php

return [
    'plugin' => [
        'name' =>  'SEO Extension',
        'description' => 'Zapewnia rozszerzenie SEO dla stron CMS, stron statycznych oraz postów na blogu'
    ],
    'settings' => [
        'label' => 'SEO Extension',
        'description' => 'Konfiguruj SEO Extension',
        'tab_settings' => [
            'label' => 'Ustawienia',
            'site' => 'Użyj nazwy strony w tytule',
            'site_comment' => 'Włącz, jeśli chcesz używać nazwy strony w tytule',
            'sitename' => 'Nazwa strony',
            'canonical' => 'Użyj domyślnego adresu URL jako kanonicznego adresu URL',
            'canonical_comment' => 'jeżeli kanoniczny adres URL nie jest podany, wtedy domyślny adres URL zostanie użyty jako kakoniczny',
            'sitename_comment_above' => 'Położenie (prefiks lub sufiks) nazwy strony w tytule strony',
            'sitename_comment' => 'Tytuł strony | <tytuł seo/strony/posta>',
            'sitename_placeholder' => 'Nazwa strony |',
            'title_position' => 'Położenie nazwy strony',
            'title_position_comment' => 'Wybierz, w którym miejscu tytułu strony powinna pojawić się nazwa strony',
            'title_position_prefix' => 'Prefiks (na początku)',
            'title_position_suffix' => 'Sufiks (na końcu)',
            'other_tags' => 'Inne meta tagi',
            'other_tags_comment_above' => 'Wprowadź tagi, które chcesz umieścić na wszystkich stronach',
            'other_tags_comment' => 'Wprowadź inne tagi, takie jak meta author lub meta viewport',
        ],
        'tab_og' => [
            'label' => 'Open Graph',
            'og' => 'Użyj tagów Open Graph',
            'og_comment' => 'Włącz tagi Open Graph',
            'sitename' => 'Nazwa strony używana w tagach Open Graph',
            'sitename_comment' => 'Nazwa twojej strony, która zostanie wyświetlona w tagach Open Graph. Pamiętaj, ma to być nazwa, nie adres URL (np. "SEO Extension", a nie "seoextension.com")',
            'fb' => 'Facebook App ID',
            'fb_comment' => 'Unikalny identyfikator, który umożliwia identyfikację na Facebooku.'
        ],
    ],
    'component' => [
        'blog' => [
            'name' => 'SEO Blog Post',
            'description' => 'Inject SEO Fields of blog post'
        ],
        'cms' => [
            'name' => 'SEO CMS Page',
            'description' => 'Inject SEO Fields of CMS pages'
        ],
        'static' => [
            'name' => 'SEO Static Page',
            'description' => 'Inject SEO fields of Static Pages'
        ]
    ]
];
