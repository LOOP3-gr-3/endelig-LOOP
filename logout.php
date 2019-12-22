<?php
$page = ('Din side');
require_once("includes/header.php");
if (isset($_SESSION)) session_destroy();
echo '<script>alert("Du er nu logget ud af Mutuum. Du må have en god dag!");';
        echo 'window.location.href="index.php";';
        echo '</script>' ;
        die();
?>
<!-- Her ødelægges sessionen og brugeren bliver derefter logget ud og sendt tilbage til forsiden. -->