<?php
$host = 'localhost';
$dbname = 'u606518727_ajrealestatedb';
$username = 'u606518727_ajrealestate';
$password = 'AJrealestate1';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>