<?php
$page = ('Opret bruger');
require_once("includes/header.php");
if (!isset($_SESSION)) session_start();

if (isset($_SESSION['user_id'])) {
	header('Location: minside.php');
}

if(isset($_POST['fornavn']) && isset($_POST['efternavn']) && isset($_POST['mail']) && isset($_POST['password1']) && isset($_POST['telefon'])) {
	$fornavn = get_post($con, 'fornavn');
	$efternavn = get_post($con, 'efternavn');
	$mail = get_post($con, 'mail');
	$password1 = get_post($con, 'password1');
    $password2 = get_post($con,'password2');
	$mobil = get_post($con, 'telefon');
    
/*Koden over tjekker om der er blevet sat noget ind i tekstfelterne, og hvis der er, lægges de i nogle variable 
  Koden under sammenligner de 2 indtastede kodeord INDEN de hashes */
        if($password1 != $password2){
        echo '<script>alert("Dine passwords matchede ikke. Prøv igen!");';
        echo 'window.location.href="opretbruger.php";';
        echo '</script>' ;
        die();
        /*REDIRECT TIL DENNE SIDE IGEN FORFRA*/
        }

    /*Password hashes*/

	$token = password_hash($password1, PASSWORD_DEFAULT);
    
    /*Det indsættes i tabellen i databasen */
    $query = "INSERT INTO users(fornavn, efternavn, mail, password, mobil) VALUES('$fornavn', '$efternavn', '$mail', '$token', '$mobil')";
	
    /*Der valideres hvorvidt det lykkedes at lægge oplysniger på databasen*/
    $result = mysqli_query($con, $query);
	if(!$result) {
        /*Tester om emialen er i brug i vores database, eller om den er indtastet forkert.*/
        if (mysqli_errno($con) == 1062) {
			echo '<script>alert("Email-adressen du har indtastet, er invalid eller allerede i brug. Vælg en ny og prøv igen.");';
            /*Sendes tilbage til at udfylde formularen igen*/
            echo 'window.location.href="opretbruger.php";';
            echo '</script>' ;
            die(); 
		}
        /*Tester om der er andre fejl, en den der er nem at pinpointe -> email/brugernavnet   */
		else 
		echo '<script>alert("Der er opstået en ukendt fejl. Prøv igen, eller kontakt sideadministratoren");';
        /*Sendes tilbage til at udfylde formularen igen*/
        echo 'window.location.href="opretbruger.php";';
        echo '</script>' ;
        die(); 
    }
    /*Hvis formularen er udfyldt korrekt og resultaterne lagt i databasen afvikles denne kode: */
	if($result) {
		echo '<script>alert("Du er nu registreret på MUTUUM, velkommen! Log ind, og se dig omkring!");';
        /*Brugeren sendes til login siden */
        echo 'window.location.href="login.php";';
        echo '</script>' ;
        die();
    }
}

?>
<div class="container">
<!-- Her er formen som skal udfyldes. Fieldset tagget er fordi denne gruppe af data er relaterede. Legend tagget er overskrift for fireldset tagget -->
<fieldset>
    <h2><strong>Opret bruger</strong></h2>
    <!-- Under action tagget er der redirectet til en php funktion, som skal sikre at serveren forstår den information der sendes til vores 'users'-tabel -->
    <form class="needs-validation" novalidate method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <div class="form-group" id="logmag">
            <label for="fornavn">Fornavn:</label>
            <input type="text" class="form-control" name="fornavn" placeholder="Fornavn" required>
        </div>
        <div class="form-group">
            <label for="efternavn">Efternavn:</label>
            <input type="text" class="form-control" name="efternavn" placeholder="Efternavn" required>
        </div>
        
        <div class="form-group">
            <label for="mail">Mail:</label>
            <input type="email" class="form-control" name="mail" placeholder="skriv@mail.dk" required>
        </div>
        
        <div class="form-group">
            <label for="tf">Telefonnummer:</label>
            <input type="tel" class="form-control" name="telefon" placeholder="00 00 00 00" required>
        </div>
        <hr>
        <div class="form-group">
            <label for="p1">Password:</label>
            <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" name="password1" id="p1" titel="Skal indeholde mindst 1 stort bogstav" placeholder="********" onkeyup='check();' required>
        </div>
        <div class="form-group">
            <label for="p2">Gentag password:</label>
            <input type="password" class="form-control" name="password2" id="p2" placeholder="********" onkeyup='check();' required>
        </div>
        <div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck"> Accepter betingelserne </label>
						<div class="invalid-feedback"> Du skal acceptere betingelserne for, at kunne oprette en bruger. </div>
                        <a href="handelsbetingelser.php">Se betingelserne her!</a>
					</div>
				</div>
        <hr>
        <button type="submit" class="btn btn-primary blaaknap">Opret Bruger</button> 
        <br>
        <br>
        <!-- Her er der tilføjet et stykke tekst der kan skifte farve. Det knytter sig til vores JS funktion som tjekker in real time, om der er tastet ens i de 2 passwordfelter -->
        <span id="passwordtjek"></span>
    </form>
</fieldset>

</div>

<!-- Her er en lille kode som tjekker "in real time" om man taster rigtig med sine adgangskoder, det displayes i span tagget i formen -->
<script>
    var check = function() {
        if (document.getElementById("p1").value ==
            document.getElementById("p2").value) {
            document.getElementById("passwordtjek").style.color = "green";
            document.getElementById("passwordtjek").innerHTML = " Password matcher!";
        } else {
            document.getElementById("passwordtjek").style.color = "red";
            document.getElementById("passwordtjek").innerHTML = " Password matcher ikke!";
        }
    }
</script>

<!--Denne funktion sikre der kommer "rigtig" eller forventet data, for at lave et sikkerhedslag-->
<?php
function get_post($con, $var) {
	return mysqli_real_escape_string($con, $_POST[$var]);
}?>

<?php
require_once("includes/footer.php");
?>
