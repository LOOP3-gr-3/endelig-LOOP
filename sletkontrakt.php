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
$user_id = $_SESSION['user_id'];
?>
<div class="container-fluid">
<h1>Er du sikker på du vil slette kontrakten?</h1>
    <a action="sletkontraktaction.php">Slet</a>
</div>
<?php
require_once("includes/footer.php");
?>