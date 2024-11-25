<?php

function getUserName() {
    if (!isset($_SESSION['user_name'])) {
        $names = ['Алексей', 'Мария', 'Ольга', 'Иван', 'Никита', 'Екатерина'];
        $_SESSION['user_name'] = $names[array_rand($names)];
    }
    return $_SESSION['user_name'];
}
