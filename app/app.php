<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Coins.php';

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {

        return $app['twig']->render('coins.html.twig');
    });

    $app->get('/make_change', function() use ($app) {
        $coins = new Coins;
        $coins_arr = $coins->makeCoins($_GET['cents']);

        return $app['twig']->render('make_change.html.twig', array('coins_arr' => $coins_arr));
    });
    return $app
?>
