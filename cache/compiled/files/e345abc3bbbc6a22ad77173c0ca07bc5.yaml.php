<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/Steven/Documents/Web/WordPress-sites/grav-admin/user/config/site.yaml',
    'modified' => 1518097650,
    'data' => [
        'title' => 'Tomorrow\'s newspapers',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Hugh Dawson',
            'email' => 'hugh@tomorrowsnewspapers.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 250,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
