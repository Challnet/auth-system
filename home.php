<?php 
require_once __DIR__ . "/src/helpers.php";

checkAuth();

$user = findCurrentUser();
?>

<?php require_once __DIR__ . "/src/views/partials/head.php" ?>

    <div class="card home">
      <img
        class="avatar"
        src="<?php echo "./" . $user["avatar"] ?>"
        alt="<?php echo $user["username"] ?>"
      />
      <h1>Hello, <?php echo $user["username"] ?>!</h1>

      <form action="./src/actions/logout.php" method="post">
        <button role="button">Logout</button>
      </form>
    </div>

<?php require_once __DIR__ . "/src/views/partials/footer.php" ?>