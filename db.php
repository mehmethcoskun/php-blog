<?php

try {
    $db = new PDO("mysql:host=localhost;port=3306;dbname=blog;charset=utf8mb4", "root", "root", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (PDOException $e) {
    print $e->getMessage();
}

session_start();
