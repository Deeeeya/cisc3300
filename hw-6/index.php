<?php
    $data = [
        "name" => "Dheya Abyan",
        "age" => 20,
        "university" => "Fordham University"
    ];

    foreach ($data as $key => $value) {
        echo "$key: $value\n";
    }

    function statement($name, $response = "was here!") {
        return "$name $response";
    }

    echo statement("Dheya");


?>