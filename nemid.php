<?php
$page = ('nemID');
require_once("includes/header.php");
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
</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<button id="xwknap" type="submit" class="btn btn-light" id="logmag">Næste</button>
            <h3>Tryk næste for at underskrive kontrakten</h3>



<!--footeren skal HENTES IND HERINDE I STEDET FOR REQUIRE, DA DET LIGE NU KUN ER BAGGRUND OG IKKE NOGET "FYLD"-->
<?php
require_once("includes/footer.php");
?>