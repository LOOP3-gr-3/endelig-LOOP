<?php 
    $page = ('Oprettelse af kontrakt');
    require_once('includes/header.php');
    if(!isset($_SESSION)){session_start();}
 
    $query1 = "SELECT * FROM beloeb ORDER BY beloeb";    
    $result1 = mysqli_query($con, $query1);


    $query2 = "SELECT * FROM rente ORDER BY rente";    
    $result2 = mysqli_query($con, $query2);


    $query3 = "SELECT * FROM bindingsperiode ORDER BY loebetid";    
    $result3 = mysqli_query($con, $query3);


    $query4 = "SELECT * FROM kontraktbrud ORDER BY brud";    
    $result4 = mysqli_query($con, $query4);


    if(isset($_POST['laantageremail'])) {
        $mail = $_POST['laantageremail'];
        $query5 = "SELECT user_id FROM users WHERE mail = '$mail'";
        $result5 = mysqli_query($con, $query5);
        $row5 = mysqli_num_rows($result5);
        $mail_laantager_id = $row5['user_id'];
    }
         $beloeb_id_upload = '';
         $rente_id_upload = '';
         $bindingsperiode_id_upload = '' ;
         $kontraktbrud_id_upload = '';
         $mail_laantager_id_upload = '';
         $mail_laangiver_id_upload = '';

     if (isset($_POST['dropdownbeloeb']) && isset($_POST['dropdownrente']) && isset($_POST['dropdownloebetid']) && isset($_POST['dropdownkontraktbrud']) && isset($_POST['laantageremail'])) {
         $beloeb_id_upload = $_POST['dropdownbeloeb'];
         $rente_id_upload = $_POST['dropdownrente'];
         $bindingsperiode_id_upload = $_POST['dropdownloebetid'];
         $kontraktbrud_id_upload = $_POST['dropdownkontraktbrud'];
         $mail_laantager_id_upload = $_POST['laantageremail'];
         $mail_laangiver_id_upload = $_POST[$_SESSION['user_id']];
         
         if (isset($_POST['submit'])){
             $upload = "INSERT INTO kontrakt(beloeb_id, rente_id, bindingsperiode_id, kontraktbrud_id, laantager_user_id, laangiver_user_id) VALUES('$beloeb_id_upload,  $rente_id_upload, $bindingsperiode_id_upload, $kontraktbrud_id_upload, $mail_laantager_id_upload, $mail_laangiver_id_upload')";
             $result6 = mysqli_query($con, $upload);
             if(!$result6) die(mysqli_error($con));
         }}
print_r($_POST);
?>

<div class="container-fluid">
    <div>
        <hr>
        <h1><strong>Opret Kontrakt</strong></h1>
        <hr>
    </div>
    <div>
        <p><I>Udfyld venligst nedenstående felter til din kontrakt:</I></p><br>

        <div class="container">
            <form method="post">
                <fieldset>
                    <div>
                        <p>Beløb</p>
                        <select class="btn btn-light dropdown-toggle" id="dropdownbeloeb" data-toggle="dropdown" name="dropdownbeloeb">
                            <option selected value="">Vælg et beløb i DKK</option>
                            <?php
                                $row1 = mysqli_num_rows($result1);                          
                                while($row1 = mysqli_fetch_assoc($result1)) 
                                {

                                $beloeb_id = $row1['beloeb_id'];
                                $beloeb = $row1['beloeb'];
                                $value = $row1['value'];
                            ?>
                            <option value="<?php echo $beloeb_id;?>"> <?php echo $beloeb;?> <?php echo $value;?>

                            </option>
                            <?php } ?>
                        </select>
                    </div>

                    <br>

                    <div>
                        <p>Rente</p>
                        <select class="btn btn-light dropdown-toggle" id="dropdownrente" data-toggle="dropdown" name="dropdownrente">
                            <option selected value="">Vælg en rente i %</option>
                            <?php 
                            
                                $row2 = mysqli_num_rows($result2);                          
                                while($row2 = mysqli_fetch_assoc($result2)) 
                                {
                                $rente_id = $row2['rente_id'];
                                $rente = $row2['rente'];
                                $value = $row2['value'];
                            ?>
                            <option value="<?php echo $rente_id;?>"> <?php echo $rente;?> <?php echo $value;?>

                            </option>
                            <?php } ?>
                        </select>
                    </div>

                    <br>

                    <div>
                        <p>Løbetid</p>
                        <select class="btn btn-light dropdown-toggle" id="dropdownloebetid" data-toggle="dropdown" name="dropdownloebetid">
                            <option selected value="">Vælg løbetiden på kontrakten</option>

                            <?php 
                            
                            $row3 = mysqli_num_rows($result3);                          
                            while($row3 = mysqli_fetch_assoc($result3)) 
                            {
                            $bindingsperiode_id = $row3['bindingsperiode_id'];
                            $loebetid = $row3['loebetid'];
                            $value = $row3['value'];
                            
                            ?>

                            <option value="<?php echo $bindingsperiode_id;?>"> <?php echo $loebetid;?> <?php echo $value;?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>

                    <br>

                    <p>Månedligt afdrag</p>

                    <div>
                    </div>

                    <br>

                    <strong>Kontraktbrud</strong>
                    <div>
                        <p><I>Vælg venligst en konsekvens, ved kontraktbrud</I></p>
                        <select class="btn btn-light dropdown-toggle" id="dropdownkontraktbrud" data-toggle="dropdown" name="dropdownkontraktbrud">
                            <option selected value="">Vælg konsekvens ved brud på kontrakt</option>
                            <?php 
                            
                            $row4 = mysqli_num_rows($result4);                          
                            while($row4 = mysqli_fetch_assoc($result4)) 
                            {
                            $kontraktbrud_id = $row4['kontraktbrud_id'];
                            $brud = $row4['brud'];
                            
                            ?>
                            <option value="<?php echo $kontraktbrud_id;?>"> <?php echo $brud;?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>

                    <br>
                    <br>

                    <p><I>Udreget afkast = <U>Some generated value , -</U></I></p>
                    <br>



                    <p><I>Indtast E-mail på den person, som er oprettet på MUTUUM, som skal underskrive kontrakten.</I></p>
                    <label for="laantageremail">Mail på låntager</label>
                    <input type="email" id="laantageremail" name="laantageremail" placeholder="låntager@mail.dk">

                    <br>
                    <br>

                    <p><I>"Gem låneaftale" - Kontrakten gemmes under Min profil - <strong>Mine aftaler</strong> hvor den skal underskrives</I></p>

                    <!-- HUSK AT HER SKAL VI SKIFTE URL ADRESSEN UD MED DEN RIGTIGE I STEDET FOR LOCALHOST href="http://localhost/mutuum/mutuum/endelig-LOOP/viskontrakt.php"!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! /-->

                    <button role="button" name="submit" type="submit" class="btn btn-primary">Underskriv og gem</button>
                    <?php echo $beloeb_id_upload . $rente_id_upload . $bindingsperiode_id_upload . $kontraktbrud_id_upload . $mail_laantager_id_upload . $mail_laangiver_id_upload . $mail_laangiver_id_upload ?>
                </fieldset>
            </form>
            <br>
        </div>

    </div>
</div>
<?php 
 require_once('includes/footer.php');
?>