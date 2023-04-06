<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
  header('Location: index.php');
  exit();
}

// logout
if(isset($_POST['but_logout'])){
  session_destroy();
  header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Brute force</title>
</head>

<body>
  <h1>Homepage</h1>
  <form method='post' action="">
    <input type="submit" value="Logout" name="but_logout">
  </form>
</body>
</html>
