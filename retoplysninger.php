<?php
$page = ('Ret Oplysninger');
require_once("includes/header.php");
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION['user_id'])) {
        echo '<script>alert("Du er ikke logget ind på MUTUUM - log ind her, eller opret en bruger og få gratis adgang til platformen!");';
        echo 'window.location.href="login.php";';
        echo '</script>' ;
        die();


    }
$user_id = $_SESSION['user_id'];

$hent = "SELECT * FROM users WHERE user_id = '$user_id'";
$resulthent = mysqli_query($con, $hent);
$row1 = mysqli_num_rows($resulthent);
    while ($row1 = mysqli_fetch_assoc($resulthent)){
        $fornavnFyldInd = $row1["fornavn"];  
        $efternavnFyldInd = $row1["efternavn"];
        $mobilFyldInd = $row1["mobil"]; 

if(isset($_POST['fornavn']) && isset($_POST['efternavn']) && isset($_POST['mobil'])) {
    $fornavnRet = get_post($con, 'fornavn');
    $efternavnRet = get_post($con, 'efternavn');
    $mobilRet = get_post($con, 'mobil');
    
$query1 = "UPDATE users 
SET fornavn = '$fornavnRet', 
efternavn = '$efternavnRet', 
mobil = '$mobilRet' 
WHERE user_id = '$user_id'"; 
$result1 = mysqli_query($con, $query1);
   if(!$result1) {
       die(mysqli_error($con));
   } else {
              
                echo "<h2 class='text-center'>Dine oplysninger er nu opdateret!</h2>"; }

?>
<hr>
<h1>Ret oplysninger</h1>
<hr>
<form class="needs-validation" novalidate method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

    <div class="form-group">
        <label for="fornavn">Fornavn:</label>
        <input type="text" class="form-control" name="fornavn" value="<?php echo $fornavnFyldInd; ?>" required>
    </div>
    <div class="form-group">
        <label for="efternavn">Efternavn:</label>
        <input type="text" class="form-control" name="efternavn" value="<?php echo $efternavnFyldInd; ?>" required>
    </div>
    <div class="form-group">
        <label for="tf">Telefonnummer:</label>
        <input type="tel" class="form-control" name="mobil" value="<?php echo $mobilFyldInd; ?>" required>
    </div>
    <hr>

    <button class="btn btn-warning" href="minside.php">Gem ændringer</button>
    <?php
function get_post($con, $var) {
	return mysqli_real_escape_string($con, $_POST[$var]);
}
   }   }
?>
    <?php 
require_once('includes/footer.php');
?>