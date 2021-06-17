<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/wamp64/www/grav-admin/user/pages/04.momo/blog.md',
    'modified' => 1623964868,
    'data' => [
        'header' => [
            'title' => 'momo',
            'content' => [
                'items' => [
                    0 => '@self.children'
                ],
                'limit' => 10,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'pagination' => true,
                'url_taxonomy_filters' => true
            ],
            'admin' => [
                'children_display_order' => 'collection'
            ]
        ],
        'frontmatter' => 'title: momo
content:
  items:
    - "@self.children"
  limit: 10
  order:
    by: date
    dir: desc
  pagination: true
  url_taxonomy_filters: true
admin:
  children_display_order: collection',
        'markdown' => '#Testing

# Say Hello to Grav!

## installation successful...

1. one
2. two
3. three
4. four

Congratulations! You have installed the **Base Grav Package** that provides a **simple page** and the default **Quark** theme to get you started.

!! If you see a **404 Error** when you click `Typography` in the menu, please refer to the [troubleshooting guide](http://learn.getgrav.org/troubleshooting/page-not-found).
'
    ]
];
