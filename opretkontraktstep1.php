<?php 
$page = ('Opret kontrakt');
require_once("includes/header.php");
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION['user_id'])) {
        echo '<script>alert("Du er ikke logget ind på MUTUUM - log ind her, eller opret en bruger og få gratis adgang til platformen!");';
        echo 'window.location.href="login.php";';
        echo '</script>' ;
        die();
  }
/* Denne side afgør, om det er som långiver eller låntager kontrakten skal oprettes i. */
$laangiver_user_id = $_SESSION['user_id'];
$laantager_user_id = $_SESSION['user_id'];

?>
<div class="container-fluid">
    <h1>Vælg venligst hvem der opretter kontrakten:</h1>
    <div class="text-center">
        <!-- Hvis det er långiver, kopieres dette ID ned i user_id, og tages med videre til opretkontraktgiver.php -->
        <a href="opretkontraktgiver.php?user_id=<?php echo $laangiver_user_id; ?>">
        <button class="btn btn-warning btn-lg mutuumknap">Långiver</button></a>
        &nbsp; &nbsp; &nbsp; &nbsp; 
        <!-- Hvis det er låntager, kopieres dette ID ned i user_id, og tages med videre til opretkontrakttager.php -->
        <a href="opretkontrakttager.php?user_id=<?php echo $laantager_user_id; ?>">
        <button class="btn btn-warning btn-lg mutuumknap">Låntager</button></a>
        <br><br>
    </div>
</div>
<?php
require_once("includes/footer.php");
?>