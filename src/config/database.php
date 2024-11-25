<?php
class Database {
    public static function getConnection() {
        $host = 'mysql';
        $db = 'comments_db';
        $user = 'root';
        $pass = 'rootpass';
        $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4"; 

        try {
            $pdo = new PDO($dsn, $user, $pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }
}
