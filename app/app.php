<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/AnagramChecker.php";

    $app = new Silex\Application();

    //$app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.twig');

    });

    $app->get("/compare_results", function() use ($app) {
        $my_AnagramChecker = new AnagramChecker;
        $compared_words = $my_AnagramChecker->makeAnagramChecker($_GET['keyword'], $_GET['compare']);
        return $app['twig']->render('compare_results.twig', array('compare_array' => $compared_words));
    });

    return $app;
?>
