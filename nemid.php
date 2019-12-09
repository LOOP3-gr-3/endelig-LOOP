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

    <button class="btn btn-light" type="button"
            onclick="document.getElementById('demo').innerHTML = Date()">
            Tryk næste for at underskrive og se tidspunkt</button>

    <p id="demo"></p>

<script>
function changeElemen() {
    document.getElementById('p1').innerHTML = "noget helt andet"
    alert('hello');
}

</script>

<button onclick="changeElement()">Klik</button>
<p id='p1'>noget tekst</p>

<!--footeren skal HENTES IND HERINDE I STEDET FOR REQUIRE, DA DET LIGE NU KUN ER BAGGRUND OG IKKE NOGET "FYLD"-->
<?php
require_once("includes/footer.php");
?>