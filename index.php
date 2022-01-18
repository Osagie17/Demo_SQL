<?php

$pdo = new PDO('sqlite:post.db');

$pdo->query("INSERT INTO comments(txt) VALUES('Hello world!')");
$pdo->query("INSERT INTO comments(txt) VALUES('Hello world!')");
$pdo->query("INSERT INTO comments(txt) VALUES('Hello world!')");
$pdo->query("INSERT INTO comments(txt) VALUES('Hello world!')");


$stmt = $pdo->query("SELECT * FROM comments");


$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($rows);

