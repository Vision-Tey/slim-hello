<?php

include "../vendor/autoload.php";

$app = new \Slim\App();

$countries = array(
    array("name" => "USA"),
    array("name" => "India"),
    array("name" => "Argentina"),
    array("name" => "Armenia"),
);

$app->get('/', function ($request, $response, $args) {
    $response->write("Hello world!");
});

$app->get('/countries', function ($request, $response, $args) use ($countries) {
    return $response->withJson($countries);
});

$app->get('/hello/{name}', function ($request, $response, $args) {
    $name = $args['name'];
    $response->write("Hello, $name");
});








$app->run();

?>