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
    
<pre>
SÆT/HENT KONTRAKT ID!!!!!!!!!!!!!!!!

input id="var" type='hidden' name='country' value='' 
button id="joinBoardButton" onclick="this.document.getElementById('var').value=var"  button

- på minside kan vi lægge kontrakt_id som en skjult input, og med onclick sende værdien videre til viskontrakt



hent 'fornavn' + 'efternavn' FRA 'users' HVOR 'user_id' = 'laangiver_user_id' FRA 'kontrakt'  
                $query1 = "SELECT fornavn, efternavn FROM users WHERE user_id = laangiver_user_id FROM kontrakt WHERE kontrakt_id = '$kontrakt_id'";
                    $result1 = mysqli_query($con, $query1);
                    $row1 = mysqli_fetch_assoc($result1);
                    $laangiver_fornavn = $row1['fornavn'];
                    $laangiver_efternavn = $row1['efternavn']; 
                    
                    
hent 'reg_underskrift_1' FRA 'kontrakt'
                $query2 = "SELECT reg_underskrift_1 FROM kontrakt WHERE kontrakt_id = $kontrakt_id";
                    $result2 = mysqli_query($con, $query2);
                    $row2 = mysqli_fetch_assoc($result2);
                    $laangiver_underskrift = $row2['reg_underskrift_1'];
                    

hent 'fornavn' + 'efternavn' FRA 'users' HVOR 'user_id' = 'laantager_user_id' FRA 'kontrakt' 
                $query3 = "SELECT fornavn, efternavn FROM users WHERE user_id = laantager_user_id FROM kontrakt WHERE kontrakt_id = '$kontrakt_id'";
                    $result3 = mysqli_query($con, $query3);
                    $row3 = mysqli_fetch_assoc($result3);
                    $laantager_fornavn = $row3['fornavn'];
                    $laantager_efternavn = $row3['efternavn'];
                    

if(isset[reg_underskrift_2]){
hent 'reg_underskrift_2' FRA 'kontrakt'
                $query4 = "SELECT reg_underskrift_2 FROM kontrakt WHERE kontrakt_id = '$kontrakt_id'";
                    $result4 = mysqli_query($con, $query4);
                    $row4 = mysqli_fetch_assoc($result4);
                    $laantager_underskrift = $row4['reg_underskrift_2'];}

HVIS ikke sat, OG user_id er LÅNTAGER skal der laves knap til nemid.php
                else{
                    if(isset[$user_id == laantager_user_id]){
                    button href="nemid.php" underskriv kontrakt button
                    }
                }
                

Hent 'beloeb' + 'value' fra 'beloeb' HVOR 'beloeb_id' = 'beloeb_id' FRA 'kontrakt'
                $query5 = "SELECT beloeb, value FROM beloeb WHERE beloeb_id = beloeb_id FROM kontrakt WHERE kontrakt_id = '$kontrakt_id'";
                    $result5 = mysqli_query($con, $query5);
                    $row5 = mysqli_fetch_assoc($result5);
                    $beloeb = $row5['beloeb'];
                    $beloeb_value = $row5['value'];



Hent 'rente' + 'value' fra 'rente' HVOR 'rente_id' = 'rente_id' FRA 'kontrakt'
                $query6 = "SELECT rente, value FROM rente WHERE rente_id = beloeb_id FROM kontrakt WHERE kontrakt_id = '$kontrakt_id'";
                    $result6 = mysqli_query($con, $query6);
                    $row6 = mysqli_fetch_assoc($result6);
                    $rente = $row6['rente'];
                    $rente_value = $row6['value'];
                    

Hent 'maanedlig_afdrag' FRA 'kontrakt'
                $query7 = "SELECT maanedlig_afdrag FROM kontrakt WHERE kontrakt_id = $kontrakt_id";
                    $result7 = mysqli_query($con, $query7);
                    $row7 = mysqli_fetch_assoc($result7);
                    $maanedlig_afdrag = $row7['maanedlig_afdrag'];
                    

Lav en beregning: 'beløb' * 1 + 'rente' = fulde tilbagebetalingsbeløb / omkostninger


Hent 'brud' FRA 'kontraktbrud' HVOR 'kontraktbrud_id' = 'kontraktbrud_id' FRA 'kontrakt'
                $query8 = "SELECT brud FROM kontraktbrud WHERE kontraktbrud_id = kontraktbrud_id FROM kontrakt WHERE kontrakt_id = '$kontrakt_id'";
                    $result8 = mysqli_query($con, $query8);
                    $row8 = mysqli_fetch_assoc($result8);
                    $brud = $row8['brud'];
</pre>
</div>
<?php
require_once("includes/footer.php");
?>