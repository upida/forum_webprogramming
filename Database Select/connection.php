<?php

$host = "127.0.0.1";
$port = 3306;
$username = "root";
$password = "123";
$dbname = "forum_webprogramming";

$conn = new mysqli($host, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}