<?php
require_once("conn.php");
if (!isset($_GET['email']) && !isset($_GET['key'])) {
  echo "<script>alert('You cannot access this file');</script>";
}
if (isset($_GET['email']) && isset($_GET['key'])) {
  $email = mysqli_real_escape_string($con,$_GET['email']);
  $key = $_GET['key'];
  //echo "<p>" . $email . "</p>";
  $query = "SELECT * FROM password_reset_temp NATURAL JOIN users WHERE mail = '$email' AND accesskey = '$key'";
  $result = mysqli_query($con, $query);
  if (!$result) die(mysqli_error($con));
  else {
    $rows = mysqli_num_rows($result);
    while($row = mysqli_fetch_assoc($result)) {
      $user_id = $row['user_id'];
      echo "<h2>User ID: " . $user_id . "</h2>";
    }
  }
}
?>
<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="Eva Sørum Poulsen">
		<meta name="generator" content="Jekyll v3.8.5">
		<title>Update Password</title>
		<!-- Bootstrap core CSS -->
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<!--Google Fonts-->
		<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
		<!--Font Awsome (for icons)-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
		<!-- Custom styles for this template -->
	</head>

	<body class="text-center">
		<div class="container">
          <form method="post" action="resetpassword.php?mail=<?php echo $email;?>">
            <input type="text" value ="<?php echo $email;?>" name="email" disabled>
            <input type="password" name="pwd" required>
            <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
            <input type="submit" name="submit" class="btn btn-primary" value="Update!">
          </form>