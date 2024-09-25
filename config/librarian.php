<?php

declare(strict_types=1);

return [
    // Global Site Information
    'site_name' => 'On Linux Systems',
    'site_author' => envconfig('SITE_AUTHOR', '@erikaheidi'),
    'site_description' => envconfig('SITE_DESC', 'Guides and reviews of hardware / software running on Linux'),
    'site_url' => envconfig('SITE_URL', 'https://onlinux.systems'),

    // Set site_index if you want a custom index page
    'site_index' => '_p/about',
    'site_index_tpl' => 'content/index.html.twig',
    'site_about' => envconfig('SITE_ABOUT', '_p/about'),
    'site_root' => envconfig('SITE_ROOT', '/'),

    // Paths
    'templates_path' => __DIR__.'/../app/Resources/themes/custom',
    'data_path' => __DIR__.'/../content',
    'output_path' => __DIR__.'/../public',
    'cache_path' => __DIR__.'/../var/cache',

    'posts_per_page' => 10,
    'stencil_dir' => __DIR__.'/../app/Resources/stencil',
    'stencil_locations' => [
        'post' => __DIR__.'/../content/post',
        'page' => __DIR__.'/../content/page',
        'guide' => __DIR__.'/../content/guides',
    ],
    'rss_feed' => php_sapi_name() !== 'cli' ? 'feed' : 'feed.rss',
    // Optional: Social links that show up on the top right
    'social_links' => [
        'Twitter' => envconfig('LINK_TWITTER', 'https://twitter.com/erikaheidi'),
        'Github' => envconfig('LINK_GITHUB', 'https://github.com/erikaheidi'),
        'YouTube' => envconfig('LINK_YOUTUBE', 'https://youtube.com/c/erikaheidi'),
        'LinkedIn' => envconfig('LINK_LINKEDIN'),
        'Twitch' => envconfig('LINK_TWITCH'),
    ],
    'parser_params' => [
        'youtube' => ['width' => 900, 'height' => 400],
    ],

];
