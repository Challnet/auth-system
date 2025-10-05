<?php

session_start();

require_once __DIR__ .  "/config.php";

function redirect(string $path) {
  header(header: "Location: " . BASE_URL . $path);
  die();
}

function addValidationError(string $fieldName, string $errorMessage) {
  $_SESSION["validation"][$fieldName] = $errorMessage;
}

function hasValidationError(string $fieldName): bool {
  return isset($_SESSION["validation"][$fieldName]);
}

function addValidationErrorAttribute(string $fieldName) {
  echo isset($_SESSION["validation"][$fieldName]) ? "aria-invalid='true'" : "";
}

function getValidationErrorMessage(string $fieldName) {
  echo $_SESSION["validation"][$fieldName] ?? "";
  unset($_SESSION["validation"][$fieldName]);
}

function addOldValue(string $key, mixed $value): void {
  $_SESSION["old"][$key] = $value;
}

function getOldValue(string $key) {
  $value = $_SESSION["old"][$key] ?? "";
  unset($_SESSION["old"][$key]);
  return $value;
}