<?php

return [
    /****************************************************************************************
     * Librarian main config
     * Values set here will overwrite default configuration from the /config dir.
     *****************************************************************************************/

    # Site Information
    'site_name' => 'On Linux Systems',
    'site_author' => envconfig('SITE_AUTHOR', '@erikaheidi'),
    'site_description' => envconfig('SITE_DESC', 'Guides and reviews of hardware / software running on Linux'),
    'site_url' => envconfig('SITE_URL', 'http://localhost:8000'),
    'site_root' => envconfig('SITE_ROOT', '/'),
    'site_about' => envconfig('SITE_ABOUT', '_p/about'),
    # Set site_index if you want a custom index page
    'site_index' => '_p/about',
    'site_index_tpl' => 'content/index.html.twig',
    'posts_per_page' => 10,

    # Optional: Social links that show up on the top right
    'social_links' => [
        'Twitter' => envconfig('LINK_TWITTER', 'https://twitter.com/erikaheidi'),
        'Github'  => envconfig('LINK_GITHUB', 'https://github.com/minicli/librarian'),
        'YouTube' => envconfig('LINK_YOUTUBE', 'https://youtube.com/c/erikaheidi'),
        'LinkedIn' => envconfig('LINK_LINKEDIN'),
        'Twitch' => envconfig('LINK_TWITCH'),
    ],
    'templates_path' => getenv('THEME') ?: __DIR__ . '/app/Resources/themes/custom',
    'parser_params' => [
        'youtube' => [ 'width' => 900, 'height' => 400 ]
    ]
];
