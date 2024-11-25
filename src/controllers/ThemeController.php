<?php

require_once __DIR__ . '/../models/Theme.php';

class ThemeController {
    public function index() {
        $themes = Theme::getAll();
        require_once __DIR__ . '/../views/themes.php';
    }
}
