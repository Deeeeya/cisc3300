<?php

    if($_SERVER['REQUEST_URI'] == '/') {
        header("Location: /resources/display.html");
        exit;
    }

?>