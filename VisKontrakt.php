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
$kontrakt_id = $_GET['kontrakt_id2'];
?>

<div class="container-fluid">

    <?php
$query = "SELECT * FROM kontrakt WHERE kontrakt_id = '$kontrakt_id'";
    $result = mysqli_query($con, $query);
    $row = mysqli_num_rows($result);
        if($row > 0){
            while($row = mysqli_fetch_assoc($result)){
                $laangiver_user_id = $row['laangiver_user_id'];   
                $laangiver_underskrift = $row['reg_underskrift_1'];
                $beloeb = $row['beloeb_id'];
                $rente = $row['rente_id'];
                $maanedlig_afdrag = $row['maanedlig_afdrag'];
                $brud = $row['kontraktbrud_id'];
                $laantager_user_id = $row['laantager_user_id'];
                $laantager_underskrift = $row['reg_underskrift_2'];
            }
        }
    $query1 = "SELECT fornavn, efternavn FROM users WHERE user_id = '$laangiver_user_id'";
                    $result1 = mysqli_query($con, $query1);
                    $row1 = mysqli_fetch_assoc($result1);
                    $laangiver_fornavn = $row1['fornavn'];
                    $laangiver_efternavn = $row1['efternavn'];
        echo $laangiver_fornavn . ' ' . $laangiver_efternavn . '<br>Tidspunkt for underskrift: ' . $laangiver_underskrift . '<br>';
    $query2 = "SELECT beloeb FROM beloeb WHERE beloeb_id = '$beloeb'";
                    $result2 = mysqli_query($con, $query2);
                    $row2 = mysqli_fetch_assoc($result2);
                    $beloeb = $row2['beloeb'];
        echo $beloeb . ' DKK<br>';
    $query3 = "SELECT rente FROM rente WHERE rente_id = '$rente'";
                    $result3 = mysqli_query($con, $query3);
                    $row3 = mysqli_fetch_assoc($result3);
                    $rente = $row3['rente'];
        echo $rente . ' %<br>';
        echo 'Månedlig afdrag: ' . $maanedlig_afdrag . '<br>';
        echo 'Afkast: indsæt Evas AJAX' . '<br>';
    $query4 = "SELECT brud FROM kontraktbrud WHERE kontraktbrud_id = '$brud'";
                    $result4 = mysqli_query($con, $query4);
                    $row4 = mysqli_fetch_assoc($result4);
                    $brud = $row4['brud'];
        echo $brud . '<br>';
    $query5 = "SELECT fornavn, efternavn FROM users WHERE user_id = '$laantager_user_id'";
                    $result5 = mysqli_query($con, $query5);
                    $row5 = mysqli_fetch_assoc($result5);
                    $laantager_fornavn = $row5['fornavn'];
                    $laantager_efternavn = $row5['efternavn'];
        echo $laantager_fornavn . ' ' . $laantager_efternavn . '<br>Tidspunkt for underskrift: ' . $laantager_underskrift . '<br>';
    
    if($laantager_user_id=='1' && $user_id == $laantager_user_id){
    ?>  <a href="nemid.php">Underskriv kontrakt </a>   <?php }
    if($laantager_user_id=='1' && $user_id == $laangiver_user_id){
    ?>  <a href="sletkontrakt.php">Slet kontrakt </a>  <?php
        }
?>
</div>
<?php
require_once("includes/footer.php");
?>