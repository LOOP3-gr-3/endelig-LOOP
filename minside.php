<?php
$page = ('Min side');
require_once("includes/header.php");
if (!isset($_SESSION)) {session_start();}
if (!isset($_SESSION['user_id'])) {
        echo '<script>alert("Du er ikke logget ind på MUTUUM - log ind her, eller opret en bruger og få gratis adgang til platformen!");';
        echo 'window.location.href="login.php";';
        echo '</script>' ;
        die();
  }
$user_id = $_SESSION['user_id'];
?>
<!--******************ALT KODE TIL MIN PROFIL*****************-->
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 minprofilpaaminside">
			<hr>
			<h1>MIN PROFIL</h1>
			<hr>

			<?php
            $udfyld = "SELECT mail, fornavn, efternavn, mobil FROM users WHERE user_id = '$user_id'";
                $result = mysqli_query($con, $udfyld);
                $row = mysqli_num_rows($result);
                    if ($row > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                    echo "&nbsp;<strong>Brugernavn:</strong> " . $row['mail'] . "<br>&nbsp;<strong>Fornavn:</strong> " . $row['fornavn'] . "<br>&nbsp;<strong>Efternavn:</strong> " . $row['efternavn'] . "<br>&nbsp;<strong>Telefon nr.:</strong> " . $row['mobil'] . "<br><br>";
                    } 
                    } else {
                        echo "";
                        }   
        ?>
            <!-- Her kan brugeren enten rette sine oplysninger i sin profil eller oprette en ny kontrakt-->
			<a href="retoplysninger.php" id="vispamobil"><button class="btn btn-warning mutuumknap">Ret oplysninger</button></a>
			<a href="opretkontraktstep1.php"><button class="btn btn-warning pull-right">Opret kontrakt</button></a>
			<br>
			<br>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<hr>
				<h1>MINE AFTALER</h1>
				<hr>
			</div>
				<div class="col-sm-6 text-center">
					<h3>Mangler din underskrift</h3>
                    <!-- Her hentes php filen, mangler.php til visning af de kontrakter som mangler underskrift af brugeren, som er logget ind-->
				<?php require_once("mangler.php");?>
			</div>
			<div class="col-sm-6 text-center">
				<h3>Mangler modpartssignatur</h3>
                <!-- Her hentes php filen, klar.php til visning af de kontrakter som mangler underskrift af modparten-->
				<?php require_once("klar.php");?>
			</div>
		</div>
		<div class="row">
			<div class="col col-sm-12 col-md-12 text-center">
				<hr>
				<h1>HISTORIK</h1>
				<hr>
				<div class="col-sm-12 text-center">
					<h3>Underskrevne kontrakter</h3>
                    <!-- Her hentes php filen, arkivet.php til visning af de kontrakter, som er underskrevet af begge parter -->
					<?php require_once("arkivet.php");?>
                    <br><br>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
require("includes/footer.php");
?>