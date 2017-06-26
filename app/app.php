<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Parcel.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return "
        <!DOCTYPE html>
        <html>
            <head>
                <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
                <title>National Parcel Service</title>
            </head>
            <body>
                <h1>Welcome to the National Parcel Service!</h1>
                <h2>Enter the dimensions of your parcel below:</h2>
                <form action='/parcel_calc'>
                    <div class='form-group'>
                        <label for='length'>Enter the package length: </label>
                        <input type='number' name='length'>
                    </div>
                    <div class='form-group'>
                        <label for='width'>Enter the package width: </label>
                        <input type='number' name='width'>
                    </div>
                    <div class='form-group'>
                        <label for='height'>Enter the package height: </label>
                        <input type='number' name='height'>
                    </div>
                    <div class='form-group'>
                        <label for='weight'>Enter the package weight: </label>
                        <input type='number' name='weight'>
                    </div>
                    <button type='submit' class='btn btn-primary' name='button'>Calculate my cost!</button>
                </form>
            </body>
        </html>
        ";
    });

    $app->get("/parcel_calc", function() {
        $new_parcel = new Parcel($_GET['length'], $_GET['width'], $_GET['height'], $_GET['weight']);
        return "<h2>Your Order:</h2>
        <p>Length: " . $new_parcel->getLength() . "</p>
        <p>Width: " . $new_parcel->getWidth() . "</p>
        <p>Height: " . $new_parcel->getHeight() . "</p>
        <p>Weight: " . $new_parcel->getWeight() . "</p>";
    });

    return $app;
?>
