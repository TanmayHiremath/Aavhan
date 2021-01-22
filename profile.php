<?php session_start();
if (!is_null($_SESSION['user']['userid'])) {
      if (time() - $_SESSION["login_time_stamp"] >36000) {
            session_unset(); //logout if time since login > 10 hrs
            session_destroy();
            header("Location:login.php");
      }
} else {
      header("Location:login.php");
}  ?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
      <?php echo '<pre>'; print_r($_SESSION['user']); echo '</pre>';?>
</body>
</html>