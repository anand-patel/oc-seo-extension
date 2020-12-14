<?php return [
    'plugin' => [
        'name' => 'Sökmotoroptimering',
        'description' => 'Erbjuder sökmotoroptimering till October CMS Pages, Static Pages och Blog',
    ],
    'editor' => [
        'meta_title' => 'Meta-titel för sökmotoroptimering',
        'meta_description' => 'Meta-beskrivning för sökmotoroptimering',
        'meta_keywords' => 'Meta-nyckelord',
        'canonical_url' => 'Kanonisk URL',
        'redirect_url' => 'Ompeka URL',
        'robot_index' => 'Robotindexering',
        'robot_follow' => 'Robotföljning',
    ],
    'settings' => [
        'label' => 'Sökmotoroptimering',
        'description' => 'Konfigurera sökmotoroptimering',
        'tab_settings' => [
            'label' => 'Inställningar',
            'site' => 'Använd sajtnamn i titeln',
            'site_comment' => 'Slå på om du vill använda sajtnamnet i titel-taggen',
            'sitename' => 'Sajtnamn',
            'canonical' => 'Använd ursprunglig URL som kanonisk',
            'canonical_comment' => 'om kanonisk URL inte finns används ursprunglig URL som kanonisk',
            'sitename_comment_above' => 'Prefixera eller suffixera sajtnamnet i titeln',
            'sitename_comment' => 'Sajtnamn | <seo/page/blog title>',
            'sitename_placeholder' => 'Sajtnamn |',
            'title_position' => 'Sajtnamn används som',
            'title_position_comment' => 'välj om sajtnamnet ska placeras i början eller i slutet',
            'title_position_prefix' => 'Prefix (i början)',
            'title_position_suffix' => 'Suffix (i slutet)',
            'other_tags' => 'Övriga metataggar',
            'other_tags_comment_above' => 'Lägg in taggar du vill antända på alla sidor',
            'other_tags_comment' => 'Lägg in övriga metataggar såsom author, meta viewport etc',
        ],
        'tab_og' => [
            'label' => 'Open Graph',
            'og' => 'Använd Open Graph(og)',
            'og_comment' => 'Slå på Open Graph-taggar',
            'sitename' => 'Sajtnamn för Open Graph',
            'sitename_comment' => 'Namnet på din hemsida. Inte URL utan snarare "Min hemsida" än "minhemsida.se"',
            'fb' => 'Facebooks App-Id',
            'fb_comment' => 'Det unika ID som gör att Facebook kan känna igen din sajt',
        ],
    ],
    'component' => [
        'blog' => [
            'name' => 'SEO Blogginlägg',
            'description' => 'Används i blogginlägg',
        ],
        'cms' => [
            'name' => 'SEO CMS-sida',
            'description' => 'Används på CMS-sidor',
        ],
        'static' => [
            'name' => 'SEO Sida',
            'description' => 'Används på Sidor-sida',
        ],
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