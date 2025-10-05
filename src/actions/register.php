<?php

require_once __DIR__ . "/../helpers.php";

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$passwordConfirmation = $_POST["password_confirmation"];

addOldValue("username", $username);
addOldValue("email", $email);

//Validation
if (empty($username)) {
  addValidationError("username", "Username is empty");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  addValidationError("email", "Email is incorrect");
}

if (empty($password)) {
  addValidationError("password", "Password is empty");
}

if ($password !== $passwordConfirmation) {
  addValidationError("password", "Paswords are not matched");
}

if (!empty($_SESSION["validation"])) {
  redirect("/register.php");
}