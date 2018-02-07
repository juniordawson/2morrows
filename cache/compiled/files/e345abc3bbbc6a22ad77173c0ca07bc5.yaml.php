<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/Steven/Documents/Web/WordPress-sites/grav-admin/user/config/site.yaml',
    'modified' => 1515670578,
    'data' => [
        'title' => 'Tomorrow\'s newspapers',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Hugh Dawson',
            'email' => 'joe@test.com'
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
            'size' => 100,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
