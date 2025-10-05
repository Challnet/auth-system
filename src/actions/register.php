<?php

require_once __DIR__ . "/../helpers.php";

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
  redirect("/register.php");
}