<?php
$page = ('Login');
require_once("includes/header.php");
if (!isset($_SESSION)) session_start();
if(isset($_SESSION['user_id'])) {
    header('Location: minside.php'); /*Her bliver brugeren dirigeret til minside, hvis de er logget ind */
}

if(isset($_POST['mail']) && isset($_POST['password'])) { /* Her tjekker vi for at både mail og password er sat */
    $mail_temp = $_POST['mail'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE mail = '$mail_temp'";
    $result = mysqli_query($con, $query);
    if (!$result){ /* Hvis der ikke er kontakt til server, skriver den en fejl til brugeren */
        echo "MySQL Error: " . mysqli_error($con);
        require_once ('includes/footer.php');
        die();  
    } 
    else {
        $rows = mysqli_num_rows($result); /*Dette gør, at hvis der er kontakt, så tjekker den antal af fundne rækker i databasen Users*/
        if ($rows == 0) { /* hvis der ikke er nogen rækker som matcher, gives denne alert til brugeren */
            echo '<script>alert("Denne bruger eksisterer ikke")</script>';
        }
        while($row = mysqli_fetch_assoc($result)){ /*Her tester vi om alle tre linjer stemmer overens, samt omkoder vores hash password, tilbage til brugerens password - her gives de forskellige advarsler, samt at hvis alt er godt, vil brugeren blive sendt videre til minside.php */
            $mail = $row['mail'];
            $database_password = $row['password'];
            $user_id = $row['user_id'];
            $token = password_verify($password, $database_password);
            if ($token != $password) {
					echo '<script>alert("Forkert brugernavn eller kodeord")</script>';
            }
            if ($token == $password) {
                $_SESSION['user_id'] = $user_id;
                header('Location: minside.php');
            }
        }   
    }
}
?>

<!-- Nedenstående er frontend for brugeren, hvor brugeren kan udfylde med mail og password -->
<div class="text-center">
<h1><strong>Log ind</strong></h1>
</div>
<div class="container-fluid">
    <div class="lasseMargin">

<form class="form-signin" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <!-- sikrer at vi sender "ren" data op til databasen -->
    <div class="form-group" id="logmag">
        <label for="mail">Brugernavn:</label>
        <input type="email" class="form-control" name="mail" value="" placeholder="skriv@mail.dk" required> 
    </div>
    <div class="form-group" id="logmag">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" name="password" id="p1" placeholder="********" required>
    </div>
    <button class="btn btn-warning mutuumknap" type="submit">Log Ind</button>
    
</form>

<br>
        <!-- Her kan brugeren blive sendt hen til siden, hvor brugeren kan få tilsendt sit password.-->
    <a href="glemt-password.php">Glemt password?</a>
<br>
<br>    
    </div>
</div>
<?php
require_once("includes/footer.php");
?>
