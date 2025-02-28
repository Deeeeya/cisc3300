<?php
    header("Access-Control-Allow-Origin: *");

    $uri = strtok($_SERVER["REQUEST_URI"], '?');

    $uriArray = explode("/", $uri);
    

    if ($uriArray[1] === 'products' && $_SERVER['REQUEST_METHOD'] === 'GET') {
        $products = [
        ["name" => "Macbook Pro", "price" => 1599],
        ["name" => "Ipad Pro", "price" => 899]
        ];
        echo json_encode($products);
        exit();
    }
?>
