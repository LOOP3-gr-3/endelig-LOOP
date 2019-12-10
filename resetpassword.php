<?php
require_once("conn.php");
if (!isset($_POST['pwd']) && !isset($_GET['mail'])) {
  echo "Please try again";
}
else {
  $email = $_GET['mail'];
  $pwd = $_POST['pwd'];
  $password = password_hash("$pwd", PASSWORD_DEFAULT);
  $query = "UPDATE users SET password = '$password' WHERE mail = '$email'";
  $result = mysqli_query($con, $query);
  if (!$result) die (mysqli_error($con));
  else {
    echo "<h1>Password Updated</h1>";
  }
}
?>