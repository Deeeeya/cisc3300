<?php

session_start();

class NoteController {
    public function create() {
        $error = isset($_SESSION['error']) ? $_SESSION['error'] : '';
        $success = isset($_SESSION['success']) ? $_SESSION['success'] : '';
        unset($_SESSION['error'], $_SESSION['success']);
        include 'form.html';
    }

    public function store() {
        $title = isset($_POST['title']) ? htmlspecialchars(trim($_POST['title'])) : '';
        $description = isset($_POST['description']) ? htmlspecialchars(trim($_POST['description'])) : '';
        $errors = [];

        if (strlen($title) < 4) {
            $errors[] = "Title must more than 3 characters long.";
        }
        if (strlen($description) < 11) {
            $errors[] = "Description must be more than 10 characters long.";
        }

        if (!empty($errors)) {
            $_SESSION['error'] = implode('<br>', $errors);
        } else {
            $_SESSION['success'] = "Note successfully saved!";
        }

        header("Location: index.php");
        exit();
    }
}

?>