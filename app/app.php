<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Parcel.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return "Home";
    });

    return $app;
?>
