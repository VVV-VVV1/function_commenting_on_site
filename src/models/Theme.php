<?php

require_once __DIR__ . '/../config/database.php';

class Theme {
    public static function getAll() {
        $db = Database::getConnection();
        $stmt = $db->query("SELECT * FROM themes");
        $themes = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($themes as &$theme) {
            $stmt = $db->prepare("SELECT * FROM comments WHERE theme_id = ?");
            $stmt->execute([$theme['id']]);
            $theme['comments'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        return $themes;
    }
}
