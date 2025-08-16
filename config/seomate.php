<?php
return [
    'cacheEnabled' => false,
    'outputAlternate' => false,
    'defaultProfile' => 'standard',
    'siteName' => 'szablon',
    'defaultMeta' => [
        'description' => ['globalSeo.seoDescription'],
        'image' => ['globalSeo.openGraphImage'],
    ],
    'fieldProfiles' => [
        'standard' => [
            // 'title' => ['seoFields:settings.alternativeTitle', 'title'],
            'title' => ['title'],
        ],
    ],
    'sitemapEnabled' => true,
];