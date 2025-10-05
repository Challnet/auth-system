<?php

session_start();

require_once __DIR__ .  "/config.php";

function redirect(string $path) {
  header(header: "Location: " . BASE_URL . $path);
  die();
}

function hasError(string $fieldName) {
  echo isset($_SESSION["validation"][$fieldName]) ? "aria-invalid='true'" : "";
}

function getErrorMessage(string $fieldName) {
  echo $_SESSION["validation"][$fieldName] ?? "";
}