<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/AnagramChecker.php";

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__. '/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render/('form.twig');

    });

    // $app->get("/vie", function() use($app) {
    //     $my_AnagramChecker = new AnagramChecker;
    //     $
    //
    // });

?>
