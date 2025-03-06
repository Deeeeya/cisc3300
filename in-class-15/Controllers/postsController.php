<?php

    namespace Controllers;

    use Models\Post;

    class postsController {
        public function index() {
            $postModel =  new Post();
            $posts = $postModel->getPosts();
            header('Content-Type: application/json');
            echo json_encode($posts);
        }
    }

?>