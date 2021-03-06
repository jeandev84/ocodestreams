<?php

# cli: php database/fill/user.php
$pdo = require_once __DIR__ . '/../connect/pdo.php';

$pdo->exec('TRUNCATE TABLE `users`');

$sql = '
CREATE TABLE IF NOT EXISTS users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    remember_token VARCHAR(255),
    remember_identifier VARCHAR(255)
)  ENGINE=INNODB;
';

try {

    if($pdo->prepare($sql)->execute())
    {
        echo "table users created successfully!\n";
    }

} catch (Exception $e){
    die($e->getMessage());
}
