<?php
$page = ('Din side');
require_once("includes/header.php");
if (!isset($_SESSION)) session_start();
?>
<style>
    .minprofilpaaminside {
        background-color: whitesmoke;
    }
</style>

<div class="rox majaminprofil">
    <div class="col-sm-12 col-lg-4 minprofilpaaminside">
        <hr><h1>MIN PROFIL</h1><hr>
        <?php
            $user_id = $_SESSION['user_id'];
            $udfyld = "SELECT mail, fornavn, efternavn, mobil FROM users WHERE user_id = '$user_id'";
                $result = mysqli_query($con, $udfyld);
                $row = mysqli_num_rows($result);
                    if ($row > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                    echo "&nbsp;<strong>Brugernavn:</strong> " . $row['mail'] . "<br>&nbsp;<strong>Fornavn:</strong> " . $row['fornavn'] . "<br>&nbsp;<strong>Efternavn:</strong> " . $row['efternavn'] . "<br>&nbsp;<strong>Telefon nr.:</strong> " . $row['mobil'] . "<br><br>";
                    } 
                    } else {
                        echo "<br>Data er ikke blevet oplyst. Opret bruger eller oplys manglende data";
                        }
        mysqli_close($con);   
        ?>
        <br><br><br><br><br><br><br><br>
    </div>
      <!-- Mine aftaler sektionen -->
    <div class="col-sm-12 col-lg-8">
    <hr><h1>DINE AFTALER</h1><hr>
    </div>
    <div class="col-sm-12 col col-lg-4 majakontraktertildig">
        <h2>Kontrakt anmodninger</h2> 
        <div class="panel panel-default text-center">
            <div class="panel-heading">
            <h3>Afsender</h3>
            </div>
                <div class="panel-body">
                    <p><strong>Beløb:</strong> Lorem
                    <strong>Rente: </strong> Ipsum</p>
                    <p><strong>Dato</strong> Dolor</p>
                </div>
                <div class="panel-footer">
                    <button class="btn btn-lg">Vis kontrakt</button>
                </div>
        </div>        
    </div>
    
    <div class="col-sm-12 col-lg-4 majaoprettet">
        <h2>Dine kontrakter</h2>
        <div class="panel panel-default text-center">
            <div class="panel-heading">
            <h3>Dato for oprettelse</h3>
            </div>
                <div class="panel-body">
                    <p><strong>Beløb</strong> Lorem</p>
                    <p><strong>Rente</strong>  
                </div>
                <div class="panel-footer">
                    <button class="btn btn-lg">Vis kontrakt</button>
                </div>
        </div>      
    </div>        
</div>

<div class="row majahistorikaftaler">
    <div class="col-sm-12 text-center">
    <hr><h1>HISTORIK</h1><hr>
    </div>
    
    <div class="col-sm-12 col-lg-6">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h3>Dato</h3>
                </div>
                <div class="panel-body">
                   <p><strong>Afsender:</strong>Lorem   <strong>Beløb:</strong> Ipsum       <strong>Rente:</strong> Sit</p>
                </div>
                <div class="panel-footer">
                    <button class="btn btn-lg">Vis kontrakt</button>
                </div>
            </div>      
    </div>
    <div class="col-sm-12 col-lg-6">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h3>Dato</h3>
                </div>
                <div class="panel-body">
                    <p><strong>Afsender:</strong>Lorem   <strong>Beløb:</strong> Ipsum       <strong>Rente:</strong> Sit</p>
                </div>
                <div class="panel-footer">
                    <button class="btn btn-lg">Vis kontrakt</button>
                </div>
            </div>      
    </div>
    
</div>

<?php
require_once("includes/footer.php");
?>
