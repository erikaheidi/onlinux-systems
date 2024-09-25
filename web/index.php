<?php

require __DIR__.'/../vendor/autoload.php';

use App\LiquidTag\Device;
use App\LiquidTag\Embed;
use App\LiquidTag\Guide;
use App\LiquidTag\YouTube;
use Librarian\Exception\RouteNotFoundException;
use Librarian\Provider\RouterServiceProvider;
use Librarian\Response;
use Minicli\App;

$app = new App;
$app->addService('router', new RouterServiceProvider);

$app->librarian->boot();

$app->content->registerTagParser('newtube', new YouTube);
$app->content->registerTagParser('device', new Device);
$app->content->registerTagParser('embed', new Embed);
$app->content->registerTagParser('guide', new Guide);

try {
    /** @var RouterServiceProvider $router */
    $route = $app->router->getCallableRoute();
    $app->runCommand(['minicli', 'web', $route]);
} catch (RouteNotFoundException $e) {
    Response::redirect('/notfound');
}
