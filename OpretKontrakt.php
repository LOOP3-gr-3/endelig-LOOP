<?php 
    $page = ('Oprettelse af kontrakt');
    require_once('includes/header.php');
    if(!isset($_SESSION)){session_start();}
if (!isset($_SESSION['user_id'])) {
        echo '<script>alert("Du er ikke logget ind på MUTUUM - log ind her, eller opret en bruger og få gratis adgang til platformen!");';
        echo 'window.location.href="login.php";';
        echo '</script>' ;
        die();
  }
if (isset($_POST['btnsubmit'])) {
	if(isset($_POST['laantageremail'])) {
        $mail = $_POST['laantageremail'];
        $query5 = "SELECT user_id FROM users WHERE mail = '$mail'";
        $result5 = mysqli_query($con, $query5);
        $row5 = mysqli_num_rows($result5);
        if($row5 > 0){
        while($row5 = mysqli_fetch_assoc($result5)) {
        $laantager_user_id = $row5['user_id'];
		} 
	$laangiver_user_id = $_SESSION['user_id'];
	$kontraktbrud_id = $_POST['dropdownkontraktbrud'];
	$beloeb_id = $_POST['dropdownbeloeb'];
	$rente_id = $_POST['dropdownrente'];
	$bindingsperiode_id = $_POST['dropdownloebetid'];
	$beloeb = $_POST['dropdownbeloeb'];
	$rente = $_POST['dropdownrente'];
	$bindingsperiode = $_POST['dropdownloebetid'];
	
    $qb = "SELECT * FROM beloeb WHERE beloeb_id = '$beloeb'";
	$rb = mysqli_query($con, $qb);
	if (!$rb) die (mysqli_error($con));
	else {
		while($rowb = mysqli_fetch_assoc($rb)) {
			$amount = $rowb['beloeb'];
		}
	}
	$qr = "SELECT * FROM rente WHERE rente_id = '$rente'";
	$rr = mysqli_query($con, $qr);
	if (!$rr) die (mysqli_error($con));
	else {
		while($rowr = mysqli_fetch_assoc($rr)) {
			$interest = $rowr['rente'];
		}
	}
	$ql = "SELECT * FROM bindingsperiode WHERE bindingsperiode_id = '$bindingsperiode'";
	$rl = mysqli_query($con, $ql);
	if (!$rl) die (mysqli_error($con));
	else {
		while($rowl = mysqli_fetch_assoc($rl)) {
			$length = $rowl['loebetid'];
		}
	}
			//I am assumming that the selected interest rate is simple, per year and based on the borrowed amount. If you need complex interest rate calculation then you need to revise the formula.
	$maanedligafdrag = ($amount +($amount * ($interest/100)/12))/$bindingsperiode;
	$maanedlig_afdrag = number_format(round($maanedligafdrag, 2), 2);
	
	$qkontrakt = "INSERT INTO kontrakt(laangiver_user_id, laantager_user_id, kontraktbrud_id, rente_id, beloeb_id, bindingsperiode_id, maanedlig_afdrag, laangiver_underskrift_id, reg_underskrift_1, laantager_underskrift_id, reg_underskrift_2) VALUES('$laangiver_user_id', '$laantager_user_id', '$kontraktbrud_id', '$rente_id', '$beloeb_id', '$bindingsperiode_id', '$maanedlig_afdrag', '1', NOW(), '1', NOW())";
			$rkontrakt = mysqli_query($con, $qkontrakt);
			if (!$rkontrakt) die(mysqli_error($con));
			else {
				echo '<script>alert("Din kontrakt er nu oprettet. Du kan nu underskrive din kontrakt under Min side");';
                /*Brugeren sendes til login siden */
                echo 'window.location.href="minside.php";';
                echo '</script>' ;
			}
		}
	}
}
	
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <div class="jumbotron text-center wasoverskrift">
        <h1>Opret Kontrakt</h1>
    </div>
<div class="container-fluid">
    <div class="lasseMargin">
        <p><I>Udfyld venligst nedenstående felter til din kontrakt</I></p><br>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                <fieldset>
                    <div class="row">
                        <div class="col-12 col-xs-12 col-sm-12 col-lg-12 col-xl-12">
                        <div class="row">
                        <div class="col-6 col-xs-6">
                          
                            <h4>Beløb</h4>
                            <select class="form-control" id="dropdownbeloeb" data-toggle="dropdown" name="dropdownbeloeb" required onchange="this.form.submit()">
                            <option selected value="">Vælg beløb i DKK</option>
                                <?php
                                $query1 = "SELECT * FROM beloeb ORDER BY beloeb";    
                                $result1 = mysqli_query($con, $query1);
                                $row1 = mysqli_num_rows($result1);                          
                                while($row1 = mysqli_fetch_assoc($result1)) 
                                {

                                $beloeb_id = $row1['beloeb_id'];
                                $beloeb = $row1['beloeb'];
                            ?>
                                <option value="<?php echo $beloeb_id; ?>" <?php echo (isset($_POST['dropdownbeloeb']) && $_POST['dropdownbeloeb'] == $beloeb_id) ? "selected" : "" ?>><?php echo $beloeb; ?> DKK</option>
                            <?php } ?>
                            </select>
                        </div>
                        <div class="col-6 col-xs-6">
                            <h4>Fortjeneste på hele beløbet</h4>
                            <select class="form-control" id="dropdownrente" data-toggle="dropdown" name="dropdownrente" required onchange="this.form.submit()">
                                <option selected value="">Vælg rente i %</option>
                                <?php 
                                $query2 = "SELECT * FROM rente ORDER BY rente";    
                                $result2 = mysqli_query($con, $query2);
                                $row2 = mysqli_num_rows($result2);                          
                                while($row2 = mysqli_fetch_assoc($result2)) 
                                {
                                $rente_id = $row2['rente_id'];
                                $rente = $row2['rente'];
                            ?>
                                <option value="<?php echo $rente_id; ?>" <?php echo (isset($_POST['dropdownrente']) && $_POST['dropdownrente'] == $rente_id) ? "selected" : "" ?>><?php echo $rente; ?> %</option>
                            <?php } ?>
                            </select>
                        </div>
                        
                        <br>
                            
                        <div class="col-6 col-xs-6">
                            <h4>Løbetid</h4>
                            <select class="form-control" id="dropdownloebetid" data-toggle="dropdown" name="dropdownloebetid" required onchange="this.form.submit()">
                                <option selected value="">Vælg løbetiden på kontrakten</option>
                                <?php 
                            $query3 = "SELECT * FROM bindingsperiode ORDER BY loebetid"; 
                            $result3 = mysqli_query($con, $query3);
                            $row3 = mysqli_num_rows($result3);                          
                            while($row3 = mysqli_fetch_assoc($result3)) 
                            {
                            $bindingsperiode_id = $row3['bindingsperiode_id'];
                            $loebetid = $row3['loebetid'];          
                            ?>

                                <option value="<?php echo $bindingsperiode_id; ?>" <?php echo (isset($_POST['dropdownloebetid']) && $_POST['dropdownloebetid'] == $bindingsperiode_id) ? "selected" : "" ?>><?php echo $loebetid; ?> mdr</option>
                                <?php } ?>
                            </select>
                        </div>
                        
                            
                        <br>
                        <div class="col-12 col-xs-12">    
                        <h4>Månedligt afdrag </h4>
<?php
	if (!isset($_POST['dropdownbeloeb']) && !isset($_POST['dropdownrente']) && !isset($_POST['dropdownloebetid'])) {
	echo "";
	}
	else {
		$beloeb = $_POST['dropdownbeloeb'];
		$rente = $_POST['dropdownrente'];
		$bindingsperiode = $_POST['dropdownloebetid'];
		$qb = "SELECT * FROM beloeb WHERE beloeb_id = '$beloeb'";
		$rb = mysqli_query($con, $qb);
		if (!$rb) die (mysqli_error($con));
		else {
			while($rowb = mysqli_fetch_assoc($rb)) {
				$amount = $rowb['beloeb'];
			}
		}
		$qr = "SELECT * FROM rente WHERE rente_id = '$rente'";
		$rr = mysqli_query($con, $qr);
		if (!$rr) die (mysqli_error($con));
		else {
			while($rowr = mysqli_fetch_assoc($rr)) {
				$interest = $rowr['rente'];
			}
		}
		$ql = "SELECT * FROM bindingsperiode WHERE bindingsperiode_id = '$bindingsperiode'";
		$rl = mysqli_query($con, $ql);
		if (!$rl) die (mysqli_error($con));
		else {
			while($rowl = mysqli_fetch_assoc($rl)) {
				$length = $rowl['loebetid'];
			}
		}
		echo "<div class='calc'>";
		
		$maanedligafdrag = ($amount*(1+($interest/100))/($length));
		$maanedligafdrag = number_format(round($maanedligafdrag, 2), 2); 
		echo "<h3> ". $maanedligafdrag . " DKK</h3>";
		echo "<div>";
	}
                            ?>                          

                        <!-- Her skal det månedlige afdrag beregnes.-->
                        <!-- $maanedligafdrag = ($beloeb * (1+($rente/100)))/$bindingsperiode -->
                        <!-- $maanedligafdrag skal herefter indsættes i tabellen "kontrakt", sammen med alt data -->

                        <br>
                        
                       
                        <h4>Fortjeneste </h4>
                    <?php
					if (!isset($_POST['dropdownbeloeb']) && !isset($_POST['dropdownrente']) && !isset($_POST['dropdownloebetid'])) {
						echo "";
						}
						else {
							$afkast = (($amount*(1+($interest/100)))-$amount);
							$afkast = number_format(round($afkast, 2), 2);
							echo "<h3>". $afkast . "DKK</h3>";
						}
					
                            ?>     </div></div>   
                    <!-- Her skal afkastet udregnes: -->
                    <!-- $afkast = ($beloeb*(1+(rente/100)))-$beloeb -->
                    <!-- Denne skal ikke overføres til nogen database -->
                    <br>
                    </div>
                    <div class="col-12 col-xs-12 col-sm-12 col-lg-12 col-xl-12"> 
                    <h4>Kontraktbrud</h4>
                    <div>
                        <p><I>Vælg venligst en konsekvens, ved kontraktbrud</I></p>
                        <select class="form-control" id="dropdownkontraktbrud" data-toggle="dropdown" name="dropdownkontraktbrud" required>
                            <option selected value="">Vælg konsekvens ved brud på kontrakt</option>
                            <?php 
                            $query4 = "SELECT * FROM kontraktbrud ORDER BY kontraktbrud_id";    
                            $result4 = mysqli_query($con, $query4);
                            $row4 = mysqli_num_rows($result4);                          
                            while($row4 = mysqli_fetch_assoc($result4)) 
                            {
                            $kontraktbrud_id = $row4['kontraktbrud_id'];
                            $brud = $row4['brud'];
                            
                            ?>
                            <option value="<?php echo $kontraktbrud_id;?>"> <?php echo $brud;?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>

                    <br>       
                    <label for="laantageremail">
                        <h4>Mail på låntager</h4>
                    </label>
                    <p><I>Indtast E-mail på den person, som er oprettet på MUTUUM, som skal underskrive kontrakten.</I></p>
                    <input class="form-control" type="email" id="laantageremail" name="laantageremail" placeholder="låntager@mail.dk" required>

                    <br>
                    <br>

                        <p> Kontrakten gemmes herefter under Min profil - <strong>Mine aftaler</strong>.
                            <br>Her kan kontrakten underskrives
                        </p>

                    
                        <div class="text-center">
                    <a href="minside.php"><button role="button" name="btnsubmit" type="submit" class="btn btn-primary mutuumknap">Gem kontrakt</button></a>
                            </div>
                        </div>
                        </div>
                </fieldset>
            </form>

            <br>
    </div>
    </div> 
    <br>

<?php
function get_post($con, $var) {
    return mysqli_real_escape_string($con, $_POST[$var]);
}
 require_once('includes/footer.php');
?>