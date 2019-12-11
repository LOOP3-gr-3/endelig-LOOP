<?php
$page = ('nemID');
require_once("includes/header.php");
if (!isset($_SESSION)) {session_start();}
if (!isset($_SESSION['user_id'])) {
        echo '<script>alert("Du er ikke logget ind på MUTUUM - log ind her, eller opret en bruger og få gratis adgang til platformen!");';
        echo 'window.location.href="login.php";';
        echo '</script>' ;
        die();
  }

$kontrakt_id = '17';

$updateunderskrift = "UPDATE kontrakt "

?>
<style>
#nemIDfake {
    background-image: url(images/nemID1.PNG);
    background-color: whitesmoke;
    background-repeat: no-repeat;
    background-size:inherit; 
    }

@media(max-width: 375px) {
    #nemIDfake {
    background-image:url(images/nemID_iphone.PNG);
    background-color: whitesmoke;
    background-repeat: no-repeat;
    background-size:inherit;
    }
    }

</style>
<body id="nemIDfake"> 
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <button onclick="changeElement()" class="btn btn-warning btn-lg mutuumknap" type="button" value="<?php $laangiver_underskrift_2; ?>">Underskriv kontrakt</button>
<br><br>
        <p id='underskrevet'>Kontrakt endnu ikke underskrevt, klik på "underskriv kontrakt"</p>
<br>

    <script>
        function changeElement() {
        document.getElementById('underskrevet').innerHTML = "Du har nu underskrevet kontrakten";
        }
    </script>

<!--footeren skal HENTES IND HERINDE I STEDET FOR REQUIRE, DA DET LIGE NU KUN ER BAGGRUND OG IKKE NOGET "FYLD"-->
<?php
require_once("includes/footer.php");
?>