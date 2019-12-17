<?php 
$page = ('Slet kontrakt');
require_once("includes/header.php");
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION['user_id'])) {
        echo '<script>alert("Du er ikke logget ind på MUTUUM - log ind her, eller opret en bruger og få gratis adgang til platformen!");';
        echo 'window.location.href="login.php";';
        echo '</script>' ;
        die();
  }

if (!isset($_GET['kontrakt_id2'])) {
	echo '<script>alert("Vælg venligst en kontrakt");</script>';
	echo '<script>window.location.href = "minside.php";</script>';
} else {
	$kontrakt_id2 = $_GET['kontrakt_id2'];
	$user_id = $_SESSION['user_id'];
	echo $user_id;
}
?>
<div class="container-fluid">
    <h1>Er du sikker på du vil slette kontrakten?</h1>
    <div class="text-center">
        <form method="post" action="sletkontrakt.php?kontrakt_id2=<?php echo $kontrakt_id2; ?>">
            <?php        
        
         if(isset($_POST['submit'])){   
            $query = "DELETE FROM kontrakt WHERE kontrakt_id = '$kontrakt_id2'";
            $result = mysqli_query($con, $query);
            if(!$result) {
                die(mysqli_error($con));
            }
            else {
		echo '<script>alert("Kontrakten er nu slettet");';
        /*Brugeren sendes til minside */
        echo 'window.location.href="minside.php";';
        echo '</script>' ;
        die();
            }} ?>

            <a href="minside.php?kontrakt_id2=<?php echo $kontrakt_id2 ?>"><button name="submit" type="submit" class="btn btn-warning btn-lg mutuumknap"> Slet </button></a>
        </form>
        <br><br>
    </div>
</div>
<?php
require_once("includes/footer.php");
?>