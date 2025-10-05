<?php

require_once __DIR__ . "/src/helpers.php"

?>

<!DOCTYPE html>
<html lang="ru" data-theme="light">
  <head>
    <meta charset="UTF-8" />
    <title>AreaWeb - авторизация и регистрация</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css"
    />
    <link rel="stylesheet" href="assets/app.css" />
  </head>
  <body>
    <form class="card" action="./src/actions/register.php" method="post" enctype="multipart/form-data">
      <h2>Регистрация</h2>

      <label for="name">
        Username
        <input
          type="text"
          id="username"
          name="username"
          placeholder="alexandr_kushnir"
          value="<?php echo getOldValue("username") ?>"
          <?php addValidationErrorAttribute("username") ?>
        />

        <?php if (hasValidationError("username")): ?>
          <small><?php getValidationErrorMessage("username") ?></small>
        <?php endif; ?>


      </label>

      <label for="email">
        E-mail
        <input
          type="text"
          id="email"
          name="email"
          placeholder="alexandrkushnir02@gmail.com"
          value="<?php echo getOldValue("email") ?>"
          <?php addValidationErrorAttribute("email") ?>
        />

        <?php if (hasValidationError("email")): ?>
          <small><?php getValidationErrorMessage("email") ?></small>
        <?php endif; ?>
        
      </label>

      <label for="avatar"
        >Desired user avatar
        <input type="file" id="avatar" name="avatar" />
      </label>

      <div class="grid">
        <label for="password">
          Password
          <input
            type="password"
            id="password"
            name="password"
            placeholder="******"
            <?php addValidationErrorAttribute("password") ?>
          />

        <?php if (hasValidationError("password")): ?>
          <small><?php getValidationErrorMessage("password") ?></small>
        <?php endif; ?>

        </label>

        <label for="password_confirmation">
          Password confirmation
          <input
            type="password"
            id="password_confirmation"
            name="password_confirmation"
            placeholder="******"
          />
        </label>
      </div>

      <fieldset>
        <label for="terms">
          <input type="checkbox" id="terms" name="terms" />
          Я принимаю все условия пользования
        </label>
      </fieldset>

      <button type="submit" id="submit" disabled>Continue</button>
    </form>

    <p>I've already had an <a href="index.php">account</a></p>

    <script src="assets/app.js"></script>
  </body>
</html>
