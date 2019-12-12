<?php 
$page = ('Vis Kontrakt');
require_once("includes/header.php");
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION['user_id'])) {
	echo '<script>alert("Du er ikke logget ind på MUTUUM - log ind her, eller opret en bruger og få gratis adgang til platformen!");';
	echo 'window.location.href="login.php";';
	echo '</script>' ;
	die();
}
if (!isset($_GET['kontrakt_id2'])) {
	echo "<script>alert('Please select a contract');</script>";
	echo "<script>window.location.href = 'minside.php';</script>";
} else {
	$kontrakt_id2 = $_GET['kontrakt_id2'];
	$user_id = $_SESSION['user_id'];
	}
if (isset($_POST['kontrakt_id'])) {
	$kontrakt_id2 = $_POST['kontrakt_id'];
	$user_id = $_SESSION['user_id'];
	echo "Delete " . $kontrakt_id2 . " here";
	$query = "DELETE FROM kontrakt WHERE kontrakt_id = '$kontrakt_id2'";
	$result = mysqli_query($con, $query);
	if (!$result) die (mysqli_error($con));
	else {
		echo "<script>alert('Kontrakten er blevet slettet!');</script>";
		echo "<script>window.location.href = 'minside.php';</script>";
	}
}
?>
<div class="container-fluid">
	<h1>Er du sikker på du vil slette kontrakten?</h1>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>?kontrakt_id2=<?php echo $kontrakt_id2; ?>">
		<input type="hidden" name="kontrakt_id" value="<?php echo $kontrakt_id2; ?>">
		<button type="submit" class="btn btn-warning btn-lg">Slet</button>
	</form>
</div>
<?php

require_once("includes/footer.php");
?>