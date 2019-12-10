<?php
$page = ('Ret oplysninger');
require_once("includes/header.php");
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION['user_id'])) {
        echo '<script>alert("Du er ikke logget ind på MUTUUM - log ind her, eller opret en bruger og få gratis adgang til platformen!");';
        echo 'window.location.href="login.php";';
        echo '</script>' ;
        die();
    if(isset($_SESIION['user_id'])) {
        $user_id = $_SESSION['user_id'];
    }
  }

if(isset($_POST['fornavn']) || isset($_POST['efternavn']) || isset($_POST['mobil']) || isset($_POST['password'])) {
    $fornavnRet = $get_post($con, 'fornavn');
    $efternavnRet = $get_post($con, 'efternavn');
    $mobilRet = $get_post($con, 'mobil');
    $passwordRet = $get_post($con, 'password');

$token = password_hash($passwordRet, PASSWORD_DEFAULT);
    
$query1 = "UPDATE users SET (fornavn, efternavn, mobil, password) VALUES('$fornavnRet', '$efternavnRet', '$mobilRet', '$token')"; 
$result1 = mysqli_query($con, $query1);
    if(!$result) {
        die();
    }
}
?>

<hr><h1>Ret oplysninger</h1><hr>
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
            <label for="tf">Telefonnummer:</label>
            <input type="tel" class="form-control" name="telefon" placeholder="00 00 00 00" required>
        </div>
        <hr>
        <div class="form-group">
            <label for="p1">Password:</label>
            <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" name="password1" id="p1" titel="Skal indeholde mindst 1 stort bogstav" placeholder="********" onkeyup='check();' required>
        </div>
    
    <button class="btn btn-warning">Gem ændringer</button>    
    
<?php 
require_once('includes/footer.php');
?>