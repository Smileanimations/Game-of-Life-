<?php

const SESSION_LOGGEDIN_KEY="loggedin";
const SESSION_USERNAME_KEY="username";
const SESSION_PASSWORD_KEY="password";

$ip = '127.0.0.1';
$username = 'root';
$password = 'xc6cvYYg-Q1WZ]p3';

try {
    $conn = new PDO("mysql:dbname=gameoflife;host=$ip", $username); 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

return $conn;
