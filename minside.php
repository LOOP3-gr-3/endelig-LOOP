<?php
$page = ('Din side');
require_once("includes/header.php");
if (!isset($_SESSION)) session_start();
$user_id = $_SESSION['user_id'];
?>

<style>
    .minprofilpaaminside {
        background-color: whitesmoke;
    }
</style>


<!-******************ALT KODE TIL MIN PROFIL*****************-->


<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 minprofilpaaminside">
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
                        echo "<br>Data er ikke blevet oplyst. Opret bruger eller oplys manglende data";
                        }   
        ?>            
            <br><br><br><br><br><br><br><br><br><br>
        </div>
        <!-- Mine aftaler sektionen -->
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 text-center">   
            
 <!-*************ALT KODE TIL DINE AFTALER, kontraktanmodninger-->     
            <hr>
            <h1>DINE AFTALER</h1>
            <hr>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col col-lg-4 col-xl-4">
            <h2>Kontrakt anmodninger</h2>
            <?php
            $query2 = "SELECT * FROM kontrakt WHERE laangiver_underskrift_id = '2' AND laantager_user_id = '$user_id'";
                $result2 = mysqli_query($con, $query2);
                $row2 = mysqli_num_rows($result2);
                    if($row2 > 0){
                    while($row2 = mysqli_fetch_assoc($result2)){
                        $afsenderuser_id = $row2['laangiver_user_id'];
                        $dato_underskrift_laangiver = $row2["reg_underskrift_1"]; 
                        $beloebforkontrakt = $row2["beloeb_id"];
                        $renteforkontrakt = $row2["rente_id"];
                $query11 = "SELECT * FROM beloeb WHERE beloeb_id = '$beloebforkontrakt'";
                    $result11 = mysqli_query($con, $query11);
                    $row11 = mysqli_fetch_assoc($result11);
                    $beloebValue = $row11['beloeb'];
                $query111 = "SELECT * FROM rente WHERE rente_id = '$renteforkontrakt'";
                    $result111 = mysqli_query($con, $query111);
                    $row111 = mysqli_fetch_assoc($result111);
                    $renteValue = $row111['rente'];
                $query1111 = "SELECT * FROM users WHERE user_id = '$afsenderuser_id'";
                    $result1111 = mysqli_query($con, $query1111);
                    $row1111 = mysqli_fetch_assoc($result1111);
                    $afsenderfornavn = $row1111['fornavn'];
                    $afsenderefternavn = $row1111['efternavn'];   
        ?>   
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h3>Afsender</h3>
                    <h4><?php echo $afsenderfornavn; ?> <?php echo $afsenderefternavn; ?></h4>
                </div>
                <div class="panel-body">
                    <p><strong>Beløb:</strong> <?php echo $beloebValue;?> DKK</p> 
                    <p><strong>Rente: </strong> <?php echo $renteValue;?> %</p>
                    <p><strong>Dato</strong> <?php echo $dato_underskrift_laangiver; ?></p>
                </div>
                <div class="panel-footer">
                    <button class="btn btn-warning btn-lg">Vis kontrakt</button>
                </div>
            </div>
            <?php
                        }} else {echo 'Du har endnu ikke modtaget nogle kontrakter';}
            
        ?>
        </div>

        
        
<!-****************ALT KODE TIL DINE KONTRAKTER, klar til udlån->
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-lx-4">
            <h2>Dine kontrakter klar til udlån</h2>
        <?php
            $query1 = "SELECT * FROM kontrakt WHERE laangiver_underskrift_id = '2' AND laangiver_user_id = '$user_id'";
                $result1 = mysqli_query($con, $query1);
                $row1 = mysqli_num_rows($result1);
                    if($row1 > 0){
                    while($row1 = mysqli_fetch_assoc($result1)){
                        $dato_underskrift_laangiver = $row1["reg_underskrift_1"]; 
                        $beloebforkontrakt = $row1["beloeb_id"];
                        $renteforkontrakt = $row1["rente_id"];
                $query11 = "SELECT * FROM beloeb WHERE beloeb_id = '$beloebforkontrakt'";
                    $result11 = mysqli_query($con, $query11);
                    $row11 = mysqli_fetch_assoc($result11);
                    $beloebValue = $row11['beloeb'];
                $query111 = "SELECT * FROM rente WHERE rente_id = '$renteforkontrakt'";
                    $result111 = mysqli_query($con, $query111);
                    $row111 = mysqli_fetch_assoc($result111);
                    $renteValue = $row111['rente'];
                    
        ?>           
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-lx-4">    
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h3>Dato for oprettelse</h3>
                    <p><?php echo $dato_underskrift_laangiver;?></p>
                </div>
                <div class="panel-body">
                    <p><strong>Beløb </strong><?php echo $beloebValue;?> DKK</p>
                    <p><strong>Rente </strong><?php echo $renteValue;?> %</p>
                </div>
                <div class="panel-footer">
                    <button class="btn btn-warning btn-lg">Vis kontrakt</button>
                </div>
            </div>
        </div>
   
    <?php
                        }} else {echo 'Du har endnu ikke oprettet nogle kontrakter';}
            
        ?>

     </div>
    
<!-******************ALT KODE TIL HISTORIK*****************-->    
    
    <div class="row">
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