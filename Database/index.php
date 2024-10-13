<?php

include "connection.php";

$posts = $conn->query("SELECT * FROM posts");

$posts = $posts->fetch_all(MYSQLI_ASSOC);

header('Content-Type: application/json');
echo json_encode($posts);