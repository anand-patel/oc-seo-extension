<?php

return [
    'plugin' => [
        'name' =>  'SEO Eklentisi',
        'description' => 'Sayfalar, Sabit Sayfalar ve Blog yazıları için SEO işlemleri yapar.'
    ],
    'settings' => [
        'label' => 'SEO Eklentisi',
        'description' => 'SEO Eklentisi Ayarları',
        'tab_settings' => [
            'label' => 'Ayarlar',
            'site' => 'Başlık site adı kullan',
            'site_comment' => 'Başlık tag\'ında site adı kullanmak istiyorsanız aktifleştirin',
            'sitename' => 'Site adı',
            'canonical' => 'Varsayılan URL\'leri Kanonik URL olarak kullan',
            'canonical_comment' => 'Kanonik URL belirtilmemişse, varsayılan URL\'yi kanonik URL olarak kullan',
            'sitename_comment_above' => 'Başlık etiketi site adına önek veya sonek',
            'sitename_comment' => 'Site adı | <seo/sayfa/blog başlık>',
            'sitename_placeholder' => 'Site adı |',
            'title_position' => 'Site adını şurada görünecek',
            'title_position_comment' => 'site adının nerede görüneceğini seçin örneğin başta veya sonda',
            'title_position_prefix' => 'Önek (başında)',
            'title_position_suffix' => 'Sonek (sonunda)',
            'other_tags' => 'Diğer meta taglar',
            'other_tags_comment_above' => 'Tüm sayfalarda görünmesini istediğiniz etiketleri ekleyin',
            'other_tags_comment' => 'Meta author, meta viewport gibi diğer meta etiketleri ekleyin',
        ],
        'tab_og' => [
            'label' => 'Open Graph',
            'og' => 'Open Graph(og) Kullan',
            'og_comment' => 'Open Graph(og) Taglarını Aktifleştir',
            'sitename' => 'Open Graph İçin Site Adı',
            'sitename_comment' => 'Websitenizin adı. URL girmeyin, site adını girin. (örneğin "seoeklentisi.com" yazmayın, "SEO Eklentisi" yazın.)',
            'fb' => 'Facebook App Id\'si',
            'fb_comment' => 'Facebook\'un sitenizi tanımasını sağlayan benzersiz kimlik.'
        ],
    ],
    'component' => [
        'blog' => [
            'name' => 'SEO Blog Gönderisi',
            'description' => 'Blog yazısına SEO alanlarını enjekte et'
        ],
        'cms' => [
            'name' => 'SEO CMS Sayfası',
            'description' => 'CMS Sayfasına SEO alanlarını enjekte et'
        ],
        'static' => [
            'name' => 'SEO Sabit Sayfa',
            'description' => 'Sabit Sayfaya SEO alanlarını enjekte et'
        ]
    ],
    'help' => [
        'other_tags_hint' => 'In other meta tags you can insert meta tags that is comman to all pages.<br>
            you can insert meta tags like meta author, meta view port or any tag that you want to place in head section.',
        'og_tags_description' => '<b>What is Open Graph?</b>
            <br/>
            The Open Graph protocol enables any web page to become a rich object in a social graph.
            <br/>
            <br/>
            Currently included Open Graph tags are(other tags will be added soon):
            <ul>
                <li>fb:app_id</li>
                <li>og:site_name</li>
                <li>og:title</li>
                <li>og:url</li>
                <li>og:description</li>
            </ul>'
    ]
];
