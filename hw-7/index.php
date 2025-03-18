<?php

require 'NoteController.php';

$controller = new NoteController();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->store();
} else {
    $controller->create();
}

?>