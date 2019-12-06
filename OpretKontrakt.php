<?php 
    $page = ('Oprettelse af kontrakt');
    require_once('includes/header.php');
    if(!isset($_SESSION)){session_start();}
?>

<div>
    <hr>
    <h1><strong>Opret Kontrakt</strong></h1>
    <hr>
</div>
<div >
<p ><I>Udfyld venligst nedenstående felter til din kontrakt:</I></p><br>

<div class="container">
    <form novalidate method="post" enctype="multipart/form-data">
        <div>
            <p>Beløb</p>
            <select class="btn btn-light dropdown-toggle" id="dropdownbeloeb" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="beloeb">
                <option selected value="">Vælg et beløb i DKK</option>
                <?php 
                    $query1 = "SELECT * FROM beloeb ORDER BY beloeb";    
                    $result1 = mysqli_query($con, $query1);
                    $row1 = mysqli_num_rows($result1);                          
                    while($row1 = mysqli_fetch_assoc($result1)) {
                    $beloeb_id = $row1['beloeb_id'];
                    $beloeb = $row1['beloeb'];
                    $value = $row1['value'];
                ?>
                <option value="<?php echo $beloeb_id;?>"> <?php echo $beloeb;?> <?php echo $value;?>
                </option> 
                <?php
                }
            ?>
            </select>
        </div>

        <br>
        
        <div>
            <p>Rente</p>
            <select class="btn btn-light dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="rente">
                <option selected value="">Vælg en rente i %</option>
                <?php
                    $query2 = "SELECT * FROM rente ORDER BY rente";    
                    $result2 = mysqli_query($con, $query2);
                    $row2 = mysqli_num_rows($result2);                          
                    while($row2 = mysqli_fetch_assoc($result2)) {
                    $rente_id = $row2['rente_id'];
                    $rente = $row2['rente'];
                    $value = $row2['value'];
                ?>
                <option value="<?php echo $rente_id;?>"> <?php echo $rente;?> <?php echo $value;?>
                </option>
                <?php
                }
            ?>
            </select>
        </div>

        <br>
        
        <div>
            <p>Løbetid</p>
            <select class="btn btn-light dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="loebetid">
                <option selected value="">Vælg løbetiden på kontrakten</option>
                <?php
                    $query3 = "SELECT * FROM bindingsperiode ORDER BY loebetid";    
                    $result3 = mysqli_query($con, $query3);
                    $row3 = mysqli_num_rows($result3);                          
                    while($row3 = mysqli_fetch_assoc($result3)) {
                    $bindingsperiode_id = $row3['bindingsperiode_id'];
                    $loebetid = $row3['loebetid'];
                    $value = $row3['value'];
                ?>
                <option value="<?php echo $bindingsperiode_id;?>"> <?php echo $loebetid;?> <?php echo $value;?>
                </option>
                <?php
                }
            ?>
            </select>
        </div>

        <br>
        
        <p>Månedligt afdrag</p>
        <div>

            <?php
            $maanedlig_afdrag = ""
        ?>

        </div> 
        
        <br>
        
        <strong>Kreditrating</strong>

        <div>
            <p><I>Vælg venligst hvilken kreditrating, som afgør, hvem der kan låne dine penge</I></p>
            <select class="btn btn-light dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="kredit">
                <option selected value="">Vælg kreditrating</option>
                <?php
                    $query6 = "SELECT * FROM kredit ORDER BY kredit_id";    
                    $result6 = mysqli_query($con, $query6);
                    $row6 = mysqli_num_rows($result6);                          
                    while($row6 = mysqli_fetch_assoc($result6)) {
                    $kredit_id = $row6['kredit_id'];
                    $kreditrating = $row6['kreditrating'];
                ?>
                <option value="<?php echo $kredit_id;?>"> <?php echo $kreditrating;?>
                </option>
                <?php
                }
            ?>
            </select>
        </div>
        
        <br>

        <strong>Kontraktbrud</strong>
        <div>
            <p><I>Vælg venligst en konsekvens, ved kontraktbrud</I></p>
            <select class="btn btn-light dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="kontraktbrud">
                <option selected value="">Vælg konsekvens ved brud på kontrakt</option>
                <?php
                    $query4 = "SELECT * FROM kontraktbrud ORDER BY brud";    
                    $result4 = mysqli_query($con, $query4);
                    $row4 = mysqli_num_rows($result);                          
                    while($row4 = mysqli_fetch_assoc($result4)) {
                    $kontraktbrud_id = $row4['kontraktbrud_id'];
                    $brud = $row4['brud'];
                ?>
                <option value="<?php echo $kontraktbrud_id;?>"> <?php echo $brud;?>
                </option>
                <?php
                }
            ?>
            </select>
        </div>

        <br>
        <br>
        
        <p><I>Udreget afkast = <U>Some generated value , -</U></I></p>
        <br>
        <p><I>Indtast E-mail på den person, som er oprettet på MUTUUM, som skal underskrive kontrakten. <br>Udfyldes feltet ikke, så vil den blive synlig for alle låntagere på Matchsiden</I></p>
        <div class="form-group" id="logmag">
            <label for="mail">Mail på låntager</label>

            <input type="email" class="form-control" name="mail" placeholder="låntager@mail.dk">
            <?php
                if(isset($_POST['mail'])) {
                    $mail = $_POST['mail'];
                    $query5 = "SELECT user_id FROM users WHERE mail = '$mail'";
                    $result5 = mysqli_query($con, $query5);
                    if (mysqli_errno($con) == 1062) {
			         echo '<script>alert("Den vil være synlig og tilgængelig under Matchsiden for din låntager");</script>';
                        /*Tjekker for at email er i systemet */
                }
                else
                    $_POST['mail'];
                }
            ?>
        </div>
        <br>
        <br>
        <p><I>"Underskriv og gem", her lægges kontrakten ud på Matchsiden, så en vilkårlig kan underskrive og indgå i en juridisk bindende kontrakt.
                <br> "Gem låneaftale", så gemmes den under Min profil - <I>Mine aftaler</I></I></p>
        <!--Her kodes de to knapper i bunden, som skal føre til enten en siden hvor man underskriver eller sende kontrakten til mine aftaler under min profil, hvor den står som oprettede kontrakter-->
        <a href="mineaftaler.php" target="_blank">
            <?php 
            
            $laangiver_underskrift_id = 2;    
        ?>
            <button type="submit" id="xwknap" class="btn btn-light" value="<?php $laangiver_underskrift_id; ?>" name="laangiver_underskrift_id">Underskriv og gem</button></a>
        <a href="mineaftaler.php" target="_blank"><button type="submit" id="xwknap" class="btn btn-light">Gem låneaftale</button></a>
    </form>
    
    <br>
    
</div>

</div>
<?php 
function get_post($con, $var) {
    return mysqli_real_escape_string($con, $_POST[$var]);
}
    require_once('includes/footer.php');
?>