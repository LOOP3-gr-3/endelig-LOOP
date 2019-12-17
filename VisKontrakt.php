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
if (!$result) die(mysqli_error($con));
else {
	$rows =mysqli_num_rows($result);
	if ($rows > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			$kontrakt_id = $row['kontrakt_id'];
			$oprettetaf = $row['oprettetaf'];
			$laangiver_user_id = $row['laangiver_user_id'];
			$laantager_user_id = $row['laantager_user_id'];
			$laangiver_underskrift_id = $row['laangiver_underskrift_id'];
			$laantager_underskrift_id = $row['laantager_underskrift_id'];
			$kontraktbrud_id = $row['kontraktbrud_id'];
			$rente_id = $row['rente_id'];
			$beloeb_id = $row['beloeb_id'];
			$bindingsperiode_id = $row['bindingsperiode_id'];
			$maanedlig_ad = $row['maanedlig_afdrag'];
            $maanedlig_afdrag = number_format(round($maanedlig_ad, 2), 2);
			$reg_underskrift_1 = $row['reg_underskrift_1'];
			$reg_underskrift_2 = $row['reg_underskrift_2'];
			$gebyr_id = $row['gebyr_id'];
			$reg = $row['reg'];
			$value_kont = $row['value'];

            
            $query1 = "SELECT fornavn, efternavn FROM users WHERE user_id = '$laangiver_user_id'";
                    $result1 = mysqli_query($con, $query1);
                    $row1 = mysqli_fetch_assoc($result1);
                    $laangiver_fornavn = $row1['fornavn'];
                    $laangiver_efternavn = $row1['efternavn'];
                    
            $query5 = "SELECT fornavn, efternavn FROM users WHERE user_id = '$laantager_user_id'";
                    $result5 = mysqli_query($con, $query5);
                    $row5 = mysqli_fetch_assoc($result5);
                    $laantager_fornavn = $row5['fornavn'];
                    $laantager_efternavn = $row5['efternavn']; 

$querylog = "SELECT user_id, mail, fornavn, efternavn, mobil FROM users WHERE user_id = '$user_id'";
$resultlog = mysqli_query($con, $querylog);
if (!$resultlog) die(mysqli_error($con));
$rowslog = mysqli_num_rows($resultlog);
if($rowslog > 0) {
while($rowlog = mysqli_fetch_assoc($resultlog)) {
$user_idlog = $rowlog['user_id'];
$maillog = $rowlog['mail'];
$fornavnlog = $rowlog['fornavn'];
$efternavnlog = $rowlog['efternavn'];
$mobillog = $rowlog['mobil'];
}

}
if ($user_idlog == $oprettetaf) {
$owner = 'Yes';
}
else if($user_idlog != $oprettetaf) {
$owner = 'No';
}
if ($user_idlog == $laangiver_user_id) {
$role = 'giver';
$counterpart = $laantager_user_id;
}
else {
$role = 'receiver';
$counterpart = $laangiver_user_id;
}

$queryc = "SELECT * FROM users WHERE user_id = '$counterpart'";
$resultc = mysqli_query($con, $queryc);
if (!$resultc) die(mysqli_error($con));
$rowsc = mysqli_num_rows($resultc);
if($rowsc > 0) {
while($rowc = mysqli_fetch_assoc($resultc)) {
$user_idc = $rowc['user_id'];
$mailc = $rowc['mail'];
$fornavnc = $rowc['fornavn'];
$efternavnc = $rowc['efternavn'];
$mobilc = $rowc['mobil'];
}

}
$querybeloeb = "SELECT * FROM beloeb WHERE beloeb_id = '$beloeb_id'";
$resultb = mysqli_query($con, $querybeloeb);
if (!$resultb) die(mysqli_error($con));
else {
$rowsb = mysqli_num_rows($resultb);
if ($rowsb > 0) {
while($rowb = mysqli_fetch_assoc($resultb)) {
$beloebValue = $rowb['beloeb'];
}

}
$queryk = "SELECT * FROM kontraktbrud WHERE kontraktbrud_id = '$kontraktbrud_id'";
$resultk = mysqli_query($con, $queryk);
if (!$resultk) die(mysqli_error($con));
else {
$rowsk = mysqli_num_rows($resultk);
if ($rowsk > 0) {
while($rowk = mysqli_fetch_assoc($resultk)) {
$brud = $rowk['brud'];
}

}
$queryr = "SELECT * FROM rente WHERE rente_id = '$rente_id'";
$resultr = mysqli_query($con, $queryr);
if (!$resultr) die(mysqli_query($con, $queryr));
else {
$rows = mysqli_num_rows($resultr);
if ($rows > 0) {
while($rowr = mysqli_fetch_assoc($resultr)) {
$rente = $rowr['rente'];
$enhed_key = $rowr['enhed_key'];
$unitr = "SELECT * FROM enhedstabel WHERE enhed_key = '$enhed_key'";
$resun = mysqli_query($con, $unitr);
if (!$resun) die(mysqli_error($con, $unitr));
else {
$key = mysqli_fetch_assoc($resun);
$enhedrente = $key['enhed'];
}
}

}
}
$querybind = "SELECT * FROM bindingsperiode WHERE bindingsperiode_id = '$bindingsperiode_id'";
$resultbin = mysqli_query($con, $querybind);
if (!$resultbin) die(mysqli_error($con));
else {
$rowsbin = mysqli_num_rows($resultbin);
if ($rowsbin > 0) {
while($rowbin = mysqli_fetch_assoc($resultbin)) {
$loebetid = $rowbin['loebetid'];
$keytid = $rowbin['enhed_key'];

$unitr = "SELECT * FROM enhedstabel WHERE enhed_key = '$keytid'";
$resun = mysqli_query($con, $unitr);
if (!$resun) die(mysqli_error($con, $unitr));
else {
$key = mysqli_fetch_assoc($resun);
$enhedtid = $key['enhed'];
}

}
}
}
$querygeb = "SELECT * FROM stiftelsesgebyr WHERE gebyr_id = '$gebyr_id'";
$resultgeb = mysqli_query($con, $querygeb);
if (!$resultgeb) die(mysqli_error($con));
else {
$rowgeb = mysqli_fetch_assoc($resultgeb);
$gebyr = $rowgeb['gebyr'];
}
}

?>
<br>
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
                    <div><?php  echo $reg_underskrift_1; ?>
                    </div><br>
                </div>
            </div>
            <div class="row">
                <div class="col-4 col-xs-4 col-sm-4 col-lg-4 col-xl-4">
                    <p><strong>Underskrevet af</strong> <?php echo $laantager_fornavn; ?> den: </p>
                </div>
                <div class="col-8 col-xs-8 col-sm-8 col-lg-8 col-xl-8">
                    <div><?php  echo $reg_underskrift_2; ?>
                    </div><br><br>
                </div>

                <div class="row">
                    <div class="col-3 col-xs-3 col-sm-3 col-lg-3 col-xl-3">
                        <p><strong>Beløb:</strong></p>
                    </div>
                    <div class="col-3 col-xs-3 col-sm-3 col-lg-3 col-xl-3">
                        <div><?php echo $beloebValue;?> DKK</div>
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
                        <div><?php echo $loebetid;?> <?php echo $enhedtid; ?></div>
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
                <p><?php echo $gebyr; ?> DKK</p>
                </div>
                </div>
                <div class="row">
                    <div class="col-4 col-xs-4 col-sm-4 col-lg-4 col-xl-4">
                        <p><strong>Kontraktbrud:</strong></p>
                    </div>
                    <div class="col-8 col-xs-8 col-sm-8 col-lg-8 col-xl-8">
                        <div><?php echo $brud;?></div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-footer">
         <?php 
            if($value_kont == '2' && $owner == 'No') { 
                echo    '<a href="nemid.php?kontrakt_id2=<?php echo                     $kontrakt_id2; ?>">
                        <button class="btn btn-warning btn-lg">Underskriv</button></a>
                        <a href="minside.php">
                        <button class="btn btn-warning btn-lg mutuumknap pull-right"> Tilbage</button></a>
                        <br><br>';
            }
            else if (($value_kont == '1' && $owner == 'Yes' && $laantager_underskrift_id == '1') || ($value_kont == '1' && $owner == 'Yes' && $laangiver_underskrift_id == '1')) {
                echo    '<a href="nemid.php?kontrakt_id2=<?php echo                     $kontrakt_id2; ?>">
                        <button class="btn btn-warning btn-lg">Underskriv</button></a>
                        <a href="sletkontrakt.php?kontrakt_id2=<?php echo $kontrakt_id2; ?>">
                        <button class="btn btn-warning btn-lg mutuumknap pull-right">Slet kontrakt</button></a>
                        <br><br>';
            }
            else if($value_kont == '2' && $owner == 'Yes') { 
                echo    '<a href="sletkontrakt.php?kontrakt_id2=<?php echo             $kontrakt_id2; ?>">
                        <button class="btn btn-warning btn-lg">Slet kontrakt</button></a>
                        <a href="minside.php">
                        <button class="btn btn-warning btn-lg mutuumknap pull-right">Tilbage</button></a>
                        <br><br>';
            }
            else if ($value_kont == '3') {
                echo    '<a href="minside.php">
                        <button class="btn btn-warning btn-lg mutuumknap pull-right"> Tilbage</button></a>
                        <br><br>';
            }
            ?>   
        </div>
    </div>
</div>


<?php
}
                }
            }
        }
    

require_once("includes/footer.php");