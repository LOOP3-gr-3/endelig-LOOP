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
                $beloeb = $row['beloeb_id'];
                $rente = $row['rente_id'];
                $maanedlig_afdrag = $row['maanedlig_afdrag'];
                $bindings_id = $row['bindingsperiode_id'];
                $brud = $row['kontraktbrud_id'];
                $laantager_user_id = $row['laantager_user_id'];
                $laangiver_underskrift = $row['reg_underskrift_1'];
                $laantager_underskrift = $row['reg_underskrift_2'];
                $laantager_underskrift_id = $row['laantager_underskrift_id'];
                $laangiver_underskrift_id = $row['laangiver_underskrift_id'];
            }
        }
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
                    </div><br>
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
                    <p><strong>Kontraktbrud:</strong></p>
                </div>
                <div class="col-8 col-xs-8 col-sm-8 col-lg-8 col-xl-8">
                    <div><?php echo $brud;?></div>
                </div>
            </div>
        </div>
        </div>
        <div class="panel-footer">

        </div>
    </div>
    <?php
    if($laantager_underskrift_id = 1 && $laangiver_underskrift_id = 1 && $user_id == $laangiver_user_id){
    ?> <a href="eva_nemid.php?kontrakt_id2=<?php echo $kontrakt_id2; ?>">
        <button class="btn btn-warning btn-lg">Underskriv kontrakt</button></a>
    <a href="eva_sletkontrakt.php?kontrakt_id2=<?php echo $kontrakt_id2; ?>">
        <button class="btn btn-warning btn-lg">Slet kontrakt</button></a>
    <br><br>

    <?php }
    elseif($laantager_underskrift_id = 1 && $laangiver_underskrift_id = 2 && $user_id == $laangiver_user_id){
    ?> <a href="eva_sletkontrakt.php?kontrakt_id2=<?php echo $kontrakt_id2; ?>">
        <button class="btn btn-warning btn-lg">Slet kontrakt</button></a>
    <br><br>
    <?php
        }
    elseif($laantager_underskrift_id = 1 && $user_id == $laantager_user_id){
    ?> <a href="eva_nemid.php?kontrakt_id2=<?php echo $kontrakt_id2; ?>">
        <button class="btn btn-warning btn-lg">Underskriv kontrakt</button></a>
    <br><br>
    <?php
        }
    elseif($laantager_underskrift_id = 2 && $laangiver_underskrift_id = 2){
    ?> <a href="minside.php">
        <button class="btn btn-warning btn-lg">Tilbage til min side</button></a>
    <p>Aftalen ér afviklet, eller under afvikling.</p>
    <br><br>
    <?php
        }
    else{
        echo '<p>Aftalen ér afviklet, eller under afvikling.</p>';
    }
        
    
?>
</div>

<?php
require_once("includes/footer.php");
?>