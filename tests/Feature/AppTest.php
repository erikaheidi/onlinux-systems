<?php

declare(strict_types=1);

use Librarian\Provider\ContentServiceProvider;
use Librarian\Provider\LibrarianServiceProvider;
use Librarian\Provider\TwigServiceProvider;
use Minicli\Command\CommandRegistry;

beforeEach(function () {
    $this->app = getApp();
});

it('Boots the app and loads CommandRegistry', function () {
    $registry = $this->app->commandRegistry;
    expect($registry)->toBeInstanceOf(CommandRegistry::class);
});

it('Boots the app and loads custom Service Providers', function () {
    expect($this->app->content)->toBeInstanceOf(ContentServiceProvider::class)
        ->and($this->app->twig)->toBeInstanceOf(TwigServiceProvider::class)
        ->and($this->app->librarian)->toBeInstanceOf(LibrarianServiceProvider::class);
});

it('Boots the app and loads content', function () {
    /** @var ContentServiceProvider $contentProvider */
    //$contentProvider = $this->app->content;
    //var_dump($contentProvider->fetchAll());
    $content = $this->app->content->fetch('guides/20220323_how-to-set-up-elgatos-stream-deck-on-ubuntu-linux-2110');
    expect($content->frontMatterGet('title'))->toBe('How to Set Up Elgato\'s Stream Deck on Ubuntu Linux 21.10')
        ->and($content->body_markdown)->toBeString();
});
