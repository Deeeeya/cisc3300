<?php

namespace myBusiness;
class Item {
    public $name;
    public $cost;

    public function __construct($name, $cost) {
        $this->name = $name;
        $this->cost = $cost;
    }

    public function scan() {
        echo 'scan';
    }
}

?>