<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/coins.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array("twig.path" => __DIR__."/../views"));

    $app->get("/", function() use($app) {
        return $app["twig"]->render("index.html.twig");
    });

    $app->get("/results", function() use($app) {
        $coins = new Coins($_GET["cents"]);
        $coins->change_calculator();
        return $app["twig"]->render("results.html.twig", array("results" => $coins));
    });

    return $app;
 ?>
