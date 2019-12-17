<?
require_once("includes/header.php");
if (!isset($_SESSION)) {session_start();}
if (!isset($_SESSION['user_id'])) {
        echo '<script>alert("Du er ikke logget ind på MUTUUM - log ind her, eller opret en bruger og få gratis adgang til platformen!");';
        echo 'window.location.href="login.php";';
        echo '</script>' ;
        die();
  }
$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM kontrakt , users WHERE (laangiver_user_id = '$user_id' OR laantager_user_id = '$user_id') AND value = '3' GROUP BY kontrakt_id";
$result = mysqli_query($con, $query);
if (!$result) die(mysqli_error($con));
else {
	$rows =mysqli_num_rows($result);
	if($rows == 0) {
		echo "<hr><h4>Ingen kontrakter til rådighed</h4>";
	}
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
			$maanedlig_afdrag = $row['maanedlig_afdrag'];
			$reg_underskrift_1 = $row['reg_underskrift_1'];
			$reg_underskrift_2 = $row['reg_underskrift_2'];
			$gebyr_id = $row['gebyr_id'];
			$reg = $row['reg'];
			$value_kont = $row['value'];
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
					if (($owner == 'Yes' && $laangiver_underskrift_id == '1') || ($owner == 'Yes' && $laantager_underskrift_id == '1')) {
						$status = 'mangler';
						$value = '1';
						$sign = 'Nej';
					}
					else if (($owner == 'No' && $laangiver_underskrift_id == '1' && $laantager_underskrift_id == '1') || ($owner == 'No' && $laantager_underskrift_id == '1' && $laangiver_underskrift_id == '1')) {
						$status = 'mangler';
						$value = '1';
						$sign = 'Nej';
					}
					if (($owner == 'Yes' && $laangiver_underskrift_id == '2' && $laantager_underskrift_id == '1') || ($owner == 'Yes' && $laantager_underskrift_id == '2' && $laangiver_underskrift_id == '1')) {
						$status = 'klar';
						$value = '2';
						$sign = 'Ja';
					}
					
					else if (($owner == 'No' && $laangiver_underskrift_id == '2' && $laantager_underskrift_id == '1') || ($owner == 'No' && $laantager_underskrift_id == '2' && $laangiver_underskrift_id == '1')) {
						$status = 'klar';
						$value = '2';
						$sign = 'Ja';
					}
					if ($laangiver_underskrift_id == '2' && $laantager_underskrift_id == '2') {
						$status = 'arkiv';
						$value = '3';
						$sign = 'Ja';
					}
					
					$queryvalue = "UPDATE kontrakt SET value = '$value' WHERE kontrakt_id = '$kontrakt_id'";
					$resultvalue = mysqli_query($con, $queryvalue);
					if (!$resultvalue) die(mysqli_error($con));
					
					if ($role == 'giver') {
						$panelhead = 'Låntager';
					}
					else {
						$panelhead = "Långiver";
					}
					if ($owner == 'Yes') {
						$badge = "<span class='label label-success'>Ejer</span>";
					}
					else if ($owner == 'No') {
						$badge = "<span></span>";
					}

			echo '<div class="panel panel-default text-center">';
					echo '<div class="panel-heading">';
					echo "<h3>Du er: " . $panelhead . ' ' . $badge . "</h3>";
					if(($role == 'giver' && $owner == 'Yes') || ($role == 'giver' && $owner == 'No')) {
					echo '<h4>Långiver: ' . $fornavnc . ' ' .$efternavnc . "</h4>";
					}
					else if (($role == 'receiver' && $owner == 'Yes') || ($role == 'receiver' && $owner == 'No')) {
						echo "<h4>Låntager: " . $fornavnc . ' ' . $efternavnc . "</h4>";
					}
					echo '</div>';
                    echo '<div class="panel-body">';
                    echo '<p><strong>Underskrevet: </strong>' . $sign . '</p>';
                    echo '<p><strong>Beløb: </strong>' . $beloebValue . ' DKK</p>';
                    echo '<p><strong>Rente: </strong>' . $rente . ' ' . $enhedrente . '</p>';
                    echo '<p><strong>Oprettet: </strong>' . $reg . '</p>';
					echo '<p><strong>Underskevet af långiver den: </strong>' . $reg_underskrift_1 . '</p>';
					echo '<p><strong>Underskevet af låntager den: </strong>' . $reg_underskrift_2 . '</p>';
                    echo '</div>';
                    echo '<div class="panel-footer">';
					echo '<a href="viskontrakt.php?kontrakt_id2=' . $kontrakt_id . '"><button class="btn btn-warning btn-lg">Vis kontrakt</button></a>';
                    echo '</div>';
					echo '</div>';
			}
				}

			}
	}
}

?>