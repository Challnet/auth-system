<?php require_once __DIR__ . "/src/helpers.php"; ?>
<?php require_once __DIR__ . "/src/views/partials/head.php" ?>


<form action="./src/actions/verify-2fa.php" method="post">
  <h2>Enter verification code</h2>
  <label for="code">
    <input 
      name="code" 
      type="text" 
      placeholder="6-digit code" 
      pattern="\d{6}"
      inputmode="numeric"
      maxlength="6" 
      <?php echo setValidationErrorAttribute("code") ?>
    />

    <?php if (hasValidationError("code")): ?>
      <small><?php echo getValidationErrorMessage("code") ?></small>
    <?php endif; ?>

  </label>

  <button type="submit">Verify</button>
</form>


<?php require_once __DIR__ . "/src/views/partials/footer.php" ?>