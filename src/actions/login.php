<?php

require_once __DIR__ . "/../helpers.php";

$email = $_POST["email"] ?? null;
$password = $_POST["password"] ?? null;


if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
  setOldValue("email", $email);
  setValidationError("email", "Incorrect email format");
  setMessage("error", "Validation error");
  redirect("/");
}

// Identification
$user = findUser($email);

if (!$user) {
  setMessage("error", "The user's login attempt failed because the $email wasn't found");
  redirect("/");
}

// Authentification
if (!password_verify($password, $user["password"])) {
  setMessage("error", "Password is incorrect");
  redirect("/");
}

// Authorization
$_SESSION["user"]["id"] = $user["user_id"];
redirect("/home.php");