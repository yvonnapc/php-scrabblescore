<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/ScrabbleGenerator.php";

    session_start();

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path'=>__DIR__."/../views"
    ));

    $app->get('/', function() use($app){
        return $app['twig']->render('home.html.twig');
    });

    $app->get('/play', function() use($app){
        $game = new ScrabbleGenerator();
        $score = $game->getScore($_GET['scrabble']);
        return $app['twig']->render('home.html.twig', array('scrabblePlay' => $score));
    });



    return $app;
 ?>
