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

    <script>
        function changeElement() {
        document.getElementById('underskrevet').innerHTML = "Du har nu underskrevet kontrakten";
        }
    </script>

    <button onclick="changeElement()" class="btn btn-light" type="button">Underskriv kontrakt</button>
        <p id='underskrevet'>Kontrakt endnu ikke underskrevt, klik på "underskriv kontrakt"</p>


<!--footeren skal HENTES IND HERINDE I STEDET FOR REQUIRE, DA DET LIGE NU KUN ER BAGGRUND OG IKKE NOGET "FYLD"-->
<?php
require_once("includes/footer.php");
?>