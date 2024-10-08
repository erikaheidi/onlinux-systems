<?php

declare(strict_types=1);

beforeEach(function () {
    $app = getApp();
    $this->base_url = $app->config->app_testing_url;
});

it('serves the index page', function () {
    $this->matchResponse($this->base_url, 200);
})->skip(getenv('GITHUB_ACTIONS'), 'Running on GH...');

it('serves the feed', function () {
    $this->matchResponse($this->base_url.'/feed', 200);
})->skip(getenv('GITHUB_ACTIONS'), 'Running on GH...');
