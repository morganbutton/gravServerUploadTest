<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/wamp64/www/gravCustomTest/user/pages/03.test/blog.md',
    'modified' => 1623969124,
    'data' => [
        'header' => [
            'title' => 'Test',
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
            ],
            'taxonomy' => [
                'tag' => 'test'
            ]
        ],
        'frontmatter' => 'title: Test
content:
  items:
    - "@self.children"
  limit: 5
  order:
    by: date
    dir: desc
  pagination: true
  url_taxonomy_filters: true
taxonomy:
  tag: test',
        'markdown' => '---

## title: Test

# My New Page!

This is the body of **my new page** and I can easily use _Markdown_ syntax here.
'
    ]
];
