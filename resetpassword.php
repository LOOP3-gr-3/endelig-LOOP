<?php
require_once("conn.php");
/*Her tjekkes om variablene fra reset-password.php er sat*/
if (!isset($_POST['pwd']) && !isset($_GET['mail'])) {
  echo "Please try again";
}
/*Her opdateres tablet users og der bliver indsat nyt password*/
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