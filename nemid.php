<?php
$page = ('nemID');
require_once("includes/header.php");
?>
<style>
#nemIDfake {
    background-image: url(images/nemID1.PNG);
    background-color: whitesmoke;
    background-repeat: no-repeat;
    background-size:cover; 
    }

@media only screen and (max-width 375px) {
    background-image: url(images/nemID_iphone.PNG);
    background-color: whitesmoke;
    background-repeat: no-repeat;
    background-size:cover; 
    }
</style>

<body id="nemIDfake">   
</body>



<!--footeren skal HENTES IND HERINDE I STEDET FOR REQUIRE, DA DET LIGE NU KUN ER BAGGRUND OG IKKE NOGET "FYLD"-->
<?php
require_once("includes/footer.php");
?>