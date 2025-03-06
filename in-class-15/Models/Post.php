<?php

    namespace Models;

    class Post {
        public function getPosts() {
            return  [
                ["title" => "Post 1", "description" => "hi!"],
                ["title" => "Post 2", "description" => "hi!"],
                ["title" => "Post 3", "description" => "hi!"],
            ];
        }
    }

?>