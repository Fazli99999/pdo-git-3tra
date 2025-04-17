<?php

include_once "database.php";

$email = $_POST["email"];
$pass = $_POST["pass"];

$sql = "INSER INTO users (email, pass) VALUES (?, ?)";

$stmt = $pdo->prepare($sql);
$stmt->execute([$email, $pass]);

header("location: users.php");