<?php

    require 'Models/Post.php';
    require 'Controllers/postsController.php';

    use Controllers\postsController;
    $requestUri = $_SERVER['REQUEST_URI'];

    if($_SERVER['REQUEST_METHOD'] === 'GET' && $requestUri === '/') {
        $controller = new postsController();
        $controller->index();
    } else {
        echo json_encode("error");
    }


?>