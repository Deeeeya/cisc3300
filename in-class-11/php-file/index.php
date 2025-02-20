<?php
    header("Access-Control-Allow-Origin: *");
    $uri = strtok($_SERVER["REQUEST_URI"], '?');
    $uriArray = explode("/", $uri);

    if ($uriArray[1] === 'cars' && $_SERVER['REQUEST_METHOD'] === 'GET') {
        $cars = [
            [
                'name' => 'Honda'
            ]
            [
                'name' => 'Toyota'
            ]
        ];
        echo json_encode($cars); 
        exit();
    }
?>