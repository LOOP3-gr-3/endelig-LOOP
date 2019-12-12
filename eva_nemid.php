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

<?php
//echo $kontrakt_id;
	$user_id = $_SESSION['user_id'];
	$kontrakt_id = $_GET['kontrakt_id2'];         
?>

<body id="nemIDfake"> 
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<form method="post" action="signkontrakt.php">
		<input type="hidden" name="kontrakt_id2" value="<?php echo $kontrakt_id;?>">
    <button class="btn btn-warning mutuumknap" name="submit">Underskriv kontrakt</button>
		</form>
<br><br>
        <p id='underskrevet'>Kontrakten er endnu ikke underskrevet, klik på "Underskriv kontrakt"</p>
<br>

<!--footeren skal HENTES IND HERINDE I STEDET FOR REQUIRE, DA DET LIGE NU KUN ER BAGGRUND OG IKKE NOGET "FYLD"-->
<?php
require_once("includes/footer.php");
?>
