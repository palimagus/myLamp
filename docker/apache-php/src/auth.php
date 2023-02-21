<?php

session_start();

// Handle login form with POST method
$username = $_POST["input-username"];
$password = $_POST["input-password"];

if ($password == "motdepasse") {
  $_SESSION["username"] = $username;
}

$db_host = "lamp-db-service";
$db_user = "lamp";
$db_password = "lamp";
$db_name = "lamp";
$db_port = "3306";

$pdo = new PDO("mysql:host=$db_host;dbname=$db_name;port=$db_port", $db_user, $db_password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Insert user in database
$sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);

$stmt->execute();

$_SESSION["username"] = $username;

// Redirect to index.php
header('Location: '. "db.php");
die();
