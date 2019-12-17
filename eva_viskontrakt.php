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
$kontrakt_id2 = $_GET['kontrakt_id2'];


$query = "SELECT * FROM kontrakt WHERE kontrakt_id = '$kontrakt_id2'";
    $result = mysqli_query($con, $query);
    $row = mysqli_num_rows($result);
        if($row > 0){
            while($row = mysqli_fetch_assoc($result)){
                $laangiver_user_id = $row['laangiver_user_id'];   
                $laangiver_underskrift = $row['reg_underskrift_1'];
                $oprettetaf = $row['oprettetaf'];
                $beloeb = $row['beloeb_id'];
                $rente = $row['rente_id'];
                $maanedlig_ad = $row['maanedlig_afdrag'];
                $maanedlig_afdrag = number_format(round($maanedlig_ad, 2), 2);
                $bindings_id = $row['bindingsperiode_id'];
                $brud = $row['kontraktbrud_id'];
                $gebyr_id = $row['gebyr_id'];
                $laantager_user_id = $row['laantager_user_id'];
                $laangiver_underskrift = $row['reg_underskrift_1'];
                $laantager_underskrift = $row['reg_underskrift_2'];
                $laantager_underskrift_id = $row['laantager_underskrift_id'];
                $laangiver_underskrift_id = $row['laangiver_underskrift_id'];
                $value = $row['value'];
            }
        }
    if ($user_id == $oprettetaf) {
				$owner = 'Yes';
            }
    else if($user_id != $oprettetaf) {
				$owner = 'No';

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
        echo 'Afkast: ' . $maanedlig_afdrag . '<br>';
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
   $query6 = "SELECT * FROM bindingsperiode WHERE bindingsperiode_id = '$bindings_id'";
                    $result6 = mysqli_query($con, $query6);
                    $row6 = mysqli_fetch_assoc($result6);
                    $loebetid = $row6['loebetid'];
                    $loebeenhed = $row6['enhed_key'];
    $query7 = "SELECT enhed FROM enhedstabel WHERE enhed_key = '$loebeenhed'";
                    $result7 = mysqli_query($con, $query7);
                    $row7 = mysqli_fetch_assoc($result7);
                    $enhedloebtid = $row7['enhed']; 
    $query8 = "SELECT gebyr FROM stiftelsesgebyr WHERE gebyr_id = '$gebyr_id'";
                    $result8 = mysqli_query($con, $query8);
                    $row8 = mysqli_fetch_assoc($result8);
                    $gebyr = $row8['gebyr']; 
?>
<div class="container-fluid">   
<div class="panel panel-default lasseMargin">
        <div class="panel-heading text-center">
            <h3>Din kontrakt</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-4 col-xs-4 col-sm-4 col-lg-4 col-xl-4">
                    <p><strong>Aftale indgået mellem:</strong></p>
                </div>
                <div class="col-8 col-xs-8 col-sm-8 col-lg-8 col-xl-8">
                    <div><?php echo $laangiver_fornavn; ?> <?php echo $laangiver_efternavn; ?> &amp; <?php echo $laantager_fornavn; ?> <?php echo $laantager_efternavn; ?></div>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-4 col-xs-4 col-sm-4 col-lg-4 col-xl-4">
                    <p><strong>Underskrevet af</strong> <?php echo $laangiver_fornavn; ?> den: </p>
                </div>
                <div class="col-8 col-xs-8 col-sm-8 col-lg-8 col-xl-8">
                    <div><?php  echo $laangiver_underskrift; ?>
                    </div><br> <br>
                </div>
            </div>
            <div class="row">
                <div class="col-4 col-xs-4 col-sm-4 col-lg-4 col-xl-4">
                    <p><strong>Underskrevet af</strong> <?php echo $laantager_fornavn; ?> den: </p>
                </div>
                <div class="col-8 col-xs-8 col-sm-8 col-lg-8 col-xl-8">
                    <div><?php  echo $laantager_underskrift; ?>
                    </div><br>
                </div>
            
            <div class="row">
                <div class="col-3 col-xs-3 col-sm-3 col-lg-3 col-xl-3">
                    <p><strong>Beløb:</strong></p>
                </div>
                <div class="col-3 col-xs-3 col-sm-3 col-lg-3 col-xl-3">
                    <div><?php echo $beloeb;?> DKK</div>
                </div>
                <div class="col-3 col-xs-3 col-sm-3 col-lg-3 col-xl-3">
                    <p><strong>Rente:</strong></p>
                </div>
                <div class="col-3 col-xs-3 col-sm-3 col-lg-3 col-xl-3">
                    <div><?php echo $rente;?> %</div>

                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-3 col-xs-3 col-sm-3 col-lg-3 col-xl-3">
                    <p><strong>Løbetid:</strong></p>
                </div>
                <div class="col-3 col-xs-3 col-sm-3 col-lg-3 col-xl-3">
                    <div><?php echo $loebetid;?> <?php echo $enhedloebtid; ?></div>
                </div>
                <div class="col-3 col-xs-3 col-sm-3 col-lg-3 col-xl-3">
                    <p><strong>Månedlig afdrag:</strong></p>
                </div>
                <div class="col-3 col-xs-3 col-sm-3 col-lg-3 col-xl-3">
                    <div><?php echo $maanedlig_afdrag;?> DKK</div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-4 col-xs-4 col-sm-4 col-lg-4 col-xl-4">
                <p><strong>Oprettelsesgebyr:</strong></p>
                </div>
                <div class="col-8 col-xs-8 col-sm-8 col-lg-8 col-xl-8">
                <p><?php echo $gebyr; ?></p>
                </div>
                </div>
            <div class="row">
                <div class="col-4 col-xs-4 col-sm-4 col-lg-4 col-xl-4">
                    <p><strong>Kontraktbrud:</strong></p>
                </div>
                <div class="col-8 col-xs-8 col-sm-8 col-lg-8 col-xl-8">
                    <div><?php echo $brud;?></div>
                </div>
            </div>
        </div>
        </div>
       <div class="panel-footer">
         <?php 
            if($value == '2' && $owner == 'No') { 
                echo    '<a href="nemid.php?kontrakt_id2=<?php echo $kontrakt_id2; ?         >">
                        <button class="btn btn-warning btn-lg">Underskriv</button></a>
                        <a href="minside.php">
                        <button class="btn btn-warning btn-lg mutuumknap pull-right"> Tilbage</button></a>
                        <br><br>';
            }
            else if (($value == '1' && $owner == 'Yes' && $laantager_underskrift_id == '1') || ($laangiver_underskrift_id == '1')) {
                echo    '<a href="nemid.php?kontrakt_id2=<?php echo $kontrakt_id2; ?         >">
                        <button class="btn btn-warning btn-lg">Underskriv</button></a>
                        <a href="sletkontrakt.php?kontrakt_id2=<?php echo $kontrakt_id2; ?>">
                        <button class="btn btn-warning btn-lg mutuumknap pull-right">Slet kontrakt</button></a>
                        <br><br>';
            }
            else if(($owner == 'Yes' && $laangiver_underskrift_id == '2' && $laantager_underskrift_id == '1') || ($owner == 'Yes' && $laantager_underskrift_id == '2' && $laangiver_underskrift_id == '1')) {
                echo    '<a href="nemid.php?kontrakt_id2=<?php echo $kontrakt_id2; ?         >">
                        <button class="btn btn-warning btn-lg">Underskriv</button></a>
                        <a href="sletkontrakt.php?kontrakt_id2=<?php echo $kontrakt_id2; ?>">
                        <button class="btn btn-warning btn-lg">Slet kontrakt</button></a>
                        <br><br>';
            } else if ($value == '3') {
                echo    '<a href="minside.php">
                        <button class="btn btn-warning btn-lg mutuumknap pull-right"> Tilbage</button></a>
                        <br><br>';
            }
            ?>   
        </div>
    </div>
</div>

<?php
require_once("includes/footer.php");
?>