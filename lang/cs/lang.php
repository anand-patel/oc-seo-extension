<?php

return [
    'plugin' => [
        'name' =>  'SEO Rozšíření',
        'description' => 'Poskytuje SEO rozšíření pro CMS stránky, statické stránky a blogové články',
    ],
    'settings' => [
        'label' => 'SEO Rozšíření',
        'description' => 'Konfigurace SEO Rozšíření',
        'tab_settings' => [
            'label' => 'Nastavení',
            'site' => 'Použít název stránku v titulku stránky',
            'site_comment' => 'Aktivujte pokud chcete použít název stránek v tagu <title>',
            'sitename' => 'Název stránek',
            'canonical' => 'Použít výchozí URL jako kanonickou URL',
            'canonical_comment' => 'Pokud není kanonická URL zadána, poté se použije výchozí URL jako kanonická',
            'sitename_comment_above' => 'Předpona nebo přípona názvu stránek v tagu <title>',
            'sitename_comment' => 'Název stránek | <nadpis seo/stránky/blogu>',
            'sitename_placeholder' => 'Název stránek |',
            'title_position' => 'Název stránek se ukáže',
            'title_position_comment' => 'Vyberte kde se má název stránek zobrazovat, jestli na začátku, nebo na konci',
            'title_position_prefix' => 'Předpona (na začátku)',
            'title_position_suffix' => 'Přípona (na konci)',
            'other_tags' => 'Ostatní meta tagy',
            'other_tags_comment_above' => 'Zadejte tagy které chcete přidat na všech stránkách',
            'other_tags_comment' => 'Zadejte meta tagy jako například meta author, meta viewport a další',
        ],
        'tab_og' => [
            'label' => 'Open Graph',
            'og' => 'Použít Open Graph (og)',
            'og_comment' => 'Aktivovat Open Graph (og) tagy',
            'sitename' => 'Název stránek pro Open Graph',
            'sitename_comment' => 'Název stránek. Ne URL. Například "SEO Extension" ne "seoextension.com".',
            'fb' => 'ID Facebook Aplikace',
            'fb_comment' => 'Unikátní ID podle kterých dokáže Facebook identifikovat vaše stránky.',
        ],
    ],
    'component' => [
        'blog' => [
            'name' => 'SEO Blogového článku',
            'description' => 'Přidá SEO pole k blogovému článku',
        ],
        'cms' => [
            'name' => 'SEO CMS stránky',
            'description' => 'Přidá SEO pole k CMS stránce',
        ],
        'static' => [
            'name' => 'SEO Statiké stránky',
            'description' => 'Přidá SEO pole k statické stránce',
        ],
    ],
];
