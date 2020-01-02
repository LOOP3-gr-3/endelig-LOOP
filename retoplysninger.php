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

/*når knappen btnsubmit trykkes, tjekkes om der er input, og det ligges i variable*/
if(isset($_POST['btnupdate'])) {
    if(isset($_POST['fornavn']) && isset($_POST['efternavn']) && isset($_POST['mobil'])) {
    $fornavnRet = get_post($con, 'fornavn');
    $efternavnRet = get_post($con, 'efternavn');
    $mobilRet = get_post($con, 'mobil');
/*Her smides variablene ind i databasen*/    
    $query1 = "UPDATE users 
    SET fornavn = '$fornavnRet', 
    efternavn = '$efternavnRet', 
    mobil = '$mobilRet' 
    WHERE user_id = '$user_id'"; 
    $result1 = mysqli_query($con, $query1);
    if(!$result1) {
       die(mysqli_error($con));
    } 
    else {
		echo '<script>alert("Dine oplysninger er nu blevet opdateret");';
        /*Brugeren sendes til minside */
        echo 'window.location.href="minside.php";';
        echo '</script>' ;
        die();
    }
}}         
/*Her hentes variablene der i forvejen er i databasen, så de kan displayes frontend*/
$hent = "SELECT * FROM users WHERE user_id = '$user_id'";
$resulthent = mysqli_query($con, $hent);
$row1 = mysqli_num_rows($resulthent);
    while ($row1 = mysqli_fetch_assoc($resulthent)){
        $fornavnFyldInd = $row1["fornavn"];  
        $efternavnFyldInd = $row1["efternavn"];
        $mobilFyldInd = $row1["mobil"]; 

?>
<!--Her starter frontend koden-->
<div class="text-center">
<h1><strong>Log ind</strong></h1>
</div>
    <div class="container-fluid">
    <div class="lasseMargin">    
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

    <a href="minside.php"><button class="btn btn-warning" name="btnupdate" type="submit">Gem ændringer</button></a>

    
    </form>
    <br>
        </div>
</div>

    <?php
} 
function get_post($con, $var) {
	return mysqli_real_escape_string($con, $_POST[$var]);
}
  
?>
    <?php 
require_once('includes/footer.php');
?>