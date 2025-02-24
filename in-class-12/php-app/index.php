<?php
    if($_SERVER['REQUEST_URI'] == '/html') {
        header('Content-Type: text/html');
        echo '<!DOCTYPE html><html><head><title>HTML Page</title></head><body><h1>Dheya was here!</h1></body></html>';
    } else if ($_SERVER['REQUEST_URI'] == '/json') {
        header('Content-Type: application/json');
        echo json_encode(["message" => 'Dheya was here!', 'data' => ['Age' => 20 , 'Major' => "Computer Science"]]);
    } else {
        echo 'Error';
    }
?>