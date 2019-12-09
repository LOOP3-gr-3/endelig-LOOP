<?php
$page = ('Glemt password');
require_once("includes/header.php");
if (isset($_SESSION)) session_destroy();

if(isset($_POST['mail'])) { /* Her tjekker vi for at både mail og password er sat */
    $mail_temp = $_POST['mail'];
    $query = "SELECT * FROM users WHERE mail = '$mail_temp'";
    $result = mysqli_query($con, $query);
    if (!$result){ /* Hvis der ikke er kontakt til server, skriver den en fejl til brugeren */
        echo "MySQL Error: " . mysqli_error($con);
        die();  
    } 
    else {
        $rows = mysqli_num_rows($result);
        if($rows ==0){
            echo'<script>alert("Denne bruger findes ikke i vores system. Tjek venligst dit brugernavn igen!")</script>';
        }else{
            echo'<script>alert("Der er nu blevet sendt en besked til din email. Følg linket og reset dit password!")</script>';
           
        }
        
        
    }
    
          
    }
?>

<div class="container container-yderstomallesider">

<h1><strong>Reset password</strong></h1>

<form class="form-signin" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <!-- sikrer at vi sender "ren" data op til databasen -->
    <div class="form-group" id="logmag">
        <label for="mail">Brugernavn:</label>
        <input type="email" class="form-control" name="mail" value="" placeholder="skriv@mail.dk" required> 
    </div>
    <button class="btn btn-warning" type="submit">Reset password</button>
    <br>
    <br>
<?php
require_once("includes/footer.php");
?>