<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/wamp64/www/grav-admin/user/pages/03.test/test3/blog.md',
    'modified' => 1623964582,
    'data' => [
        'header' => [
            'title' => 'test3',
            'content' => [
                'items' => [
                    0 => '@self.children'
                ],
                'limit' => 5,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'pagination' => true,
                'url_taxonomy_filters' => true
            ]
        ],
        'frontmatter' => 'title: test3
content:
    items:
        - \'@self.children\'
    limit: 5
    order:
        by: date
        dir: desc
    pagination: true
    url_taxonomy_filters: true',
        'markdown' => '#testing
kdfjjkjsdhfjsdhjkfkhsjkdkhfkjksdhkjfhkjsdhfkjkhsdjkfhjkskdhfkjhskjfhsdkjdhfjk'
    ]
];
