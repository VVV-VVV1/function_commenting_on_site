<?php

require_once __DIR__ . '/../config/database.php';

class Comment {
    public static function add($theme_id, $user_name, $comment_text) {
        $db = Database::getConnection();
        $stmt = $db->prepare("INSERT INTO comments (theme_id, user_name, comment_text) VALUES (?, ?, ?)");
        return $stmt->execute([$theme_id, $user_name, $comment_text]);
    }
}
