<?php
    try {
        $age = 20;
        if($age > 200) {
            throw new Exception("The age is unrealistic.");
        }
            echo "Try again.";
        }
    catch(Error $e) {
        echo "Caught the exception: ".$e->getMessage();
    }
?>