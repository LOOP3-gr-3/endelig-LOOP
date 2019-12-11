<?php<?php 
$page = ('Nulstil password');
require_once('includes/header.php');
if(!isset($_SESSION)){session_start();}
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

	<main class="text-center">
		<div class="container">
          <form method="post" action="resetpassword.php?mail=<?php echo $email;?>">
            <input class="form-control"type="text" value ="<?php echo $email;?>" name="email" disabled>
            <input type="password" name="pwd" required>
            <input class="form-control"type="hidden" name="user_id" value="<?php echo $user_id;?>">
            <input type="submit" name="submit" class="mutuumknap btn-warning btn" value="Update!">
          </form>
        </div>
</main>
<?php 
require_once('includes/footer.php');
?>