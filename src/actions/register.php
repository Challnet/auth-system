<?php

session_start();
require_once "../config.php";

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$passwordConfirmation = $_POST["password_confirmation"];

//Validation
$_SESSION["validation"] = [];

if (empty($username)) {
  $_SESSION["validation"]["username"] = "Username is empty";
}

if (!empty($_SESSION["validation"])) {
  header(header: "Location: " . BASE_URL . "/register.php" );
}