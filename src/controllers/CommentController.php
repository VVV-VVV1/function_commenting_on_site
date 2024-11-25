<?php

require_once __DIR__ . '/../models/Comment.php';
require_once __DIR__ . '/../lib/redis.php';

class CommentController {
    public function store() {
        $theme_id = $_POST['theme_id'];
        $comment_text = $_POST['comment_text'];
        $user_name = getUserName();

        if (Comment::add($theme_id, $user_name, $comment_text)) {
            header('Location: /');
        } else {
            echo "Error saving comment!";
        }
    }
}
