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


<!-******************ALT KODE TIL MIN PROFIL*****************-->


<div class="container-fluid">
    <div class="row majaminprofil">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 minprofilpaaminside">
            <hr>
            <h1>MIN PROFIL</h1>
            <hr>
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
        ?>            
            <br><br><br><br><br><br><br><br><br><br>
        </div>
        <!-- Mine aftaler sektionen -->
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
            
            
        
            
            
 <!-*************ALT KODE TIL DINE AFTALER, kontraktanmodninger-->           
        
            <hr>
            <h1>DINE AFTALER</h1>
            <hr>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col col-lg-4 col-xl-4 majakontraktertildig">
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
                    <button class="btn btn-warning btn-lg">Vis kontrakt</button>
                </div>
            </div>
        </div>

        
        
<!-****************ALT KODE TIL DINE KONTRAKTER, klar til udlån->
        
        <?php
            $user_id = $_SESSION['user_id'];
                $query1 = "SELECT * FROM kontrakt WHERE laangiver_underskrift_id = '2' AND laantager_user_id = '$user_id'";
                $result1 = mysqli_query($con, $query1);
                    if($result1){
                    while($row1 = mysqli_fetch_assoc($result1)){
                        $dato_underskrift_laangiver = $row1["reg_underskrift_1"]; 
                        $beloebID = $row1["beloeb_id"];
                        $renteforkontrakt = $row1["rente_id"];
                $query11 = "SELECT * FROM beloeb WHERE beloeb_id = '$beloebID'";
                    $result11 = mysqli_query($con, $query11);
                    $row11 = mysqli_fetch_assoc($result11);
                    $beloebValue = $row11['beloeb'];
                $query111 = "SELECT * FROM rente WHERE rente_id = '$renteforkontrakt'";
                    $result111 = mysqli_query($con, $query111);
                    $row111 = mysqli_fetch_assoc($result111);
                    $renteValue = $row111['rente'];
                    }}
        ?>   
        
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-lx-4 majaoprettet">
            <h2>Dine kontrakter klar til udlån</h2>
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h3>Dato for oprettelse</h3>
                    <p><?php echo $dato_underskrift_laangiver;?></p>
                </div>
                <div class="panel-body">
                    <p><strong>Beløb</strong><?php echo beloebValue;?></p>
                    <p><strong>Rente</strong><?php echo renteValue;?></p>
                </div>
                <div class="panel-footer">
                    <button class="btn btn-warning btn-lg">Vis kontrakt</button>
                </div>
            </div>
        </div>
    </div>

    
    
<!-******************ALT KODE TIL HISTORIK*****************-->    
    
    <div class="row majahistorikaftaler">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
            <hr>
            <h1>HISTORIK</h1>
            <hr>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h3>Dato</h3>
                </div>
                <div class="panel-body">
                    <p><strong>Afsender:</strong>Lorem <strong>Beløb:</strong><?php echo beloebValue;?><strong>Rente:</strong> <?php echo renteValue;?></p>
                </div>
                <div class="panel-footer">
                    <button class="btn btn-warning btn-lg">Vis kontrakt</button>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h3>Dato</h3>
                </div>
                <div class="panel-body">
                    <p><strong>Afsender:</strong>Lorem <strong>Beløb:</strong><?php echo beloebValue;?><strong>Rente:</strong> <?php echo renteValue;?></p>
                </div>
                <div class="panel-footer">
                    <button class="btn btn-warning btn-lg">Vis kontrakt</button>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
require_once("includes/footer.php");
?>