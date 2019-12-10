<?php 
    $page = ('Oprettelse af kontrakt');
    require_once('includes/header.php');
    if(!isset($_SESSION)){session_start();}
?>
<div class="container-fluid">
    <div>
        <hr>
        <h1><strong>Opret Kontrakt</strong></h1>
        <hr>
    </div>
    <div>
        <p><I>Udfyld venligst nedenstående felter til din kontrakt:</I></p><br>
        <div class="btn-group">
            <form method="post" action="opretkontraktaction.php" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                <fieldset>
                    <div>
                        <p>Beløb</p>
                        <select class="btn btn-secondary dropdown-toggle" id="dropdownbeloeb" data-toggle="dropdown" name="dropdownbeloeb" required>
                            <option selected value="">Vælg et beløb i DKK</option>
                            <?php
                                $query1 = "SELECT * FROM beloeb ORDER BY beloeb";    
                                $result1 = mysqli_query($con, $query1);
                                $row1 = mysqli_num_rows($result1);                          
                                while($row1 = mysqli_fetch_assoc($result1)) 
                                {

                                $beloeb_id = $row1['beloeb_id'];
                                $beloeb = $row1['beloeb'];
                            ?>
                            <option value="<?php echo $beloeb_id;?>"> <?php echo $beloeb;?> DKK
                            </option>
                            <?php } ?>
                        </select>
                    </div>

                    <br>

                    <div>
                        <p>Rente</p>
                        <select class="btn btn-light dropdown-toggle" id="dropdownrente" data-toggle="dropdown" name="dropdownrente" required>
                            <option selected value="">Vælg en rente i %</option>
                            <?php 
                                $query2 = "SELECT * FROM rente ORDER BY rente";    
                                $result2 = mysqli_query($con, $query2);
                                $row2 = mysqli_num_rows($result2);                          
                                while($row2 = mysqli_fetch_assoc($result2)) 
                                {
                                $rente_id = $row2['rente_id'];
                                $rente = $row2['rente'];
                            ?>
                            <option value="<?php echo $rente_id;?>"> <?php echo $rente;?> %

                            </option>
                            <?php } ?>
                        </select>
                    </div>

                    <br>

                    <div>
                        <p>Løbetid</p>
                        <select class="btn btn-light dropdown-toggle" id="dropdownloebetid" data-toggle="dropdown" name="dropdownloebetid" required>
                            <option selected value="">Vælg løbetiden på kontrakten</option>
                            <?php 
                            $query3 = "SELECT * FROM bindingsperiode ORDER BY loebetid"; 
                            $result3 = mysqli_query($con, $query3);
                            $row3 = mysqli_num_rows($result3);                          
                            while($row3 = mysqli_fetch_assoc($result3)) 
                            {
                            $bindingsperiode_id = $row3['bindingsperiode_id'];
                            $loebetid = $row3['loebetid'];          
                            ?>

                            <option value="<?php echo $bindingsperiode_id;?>"> <?php echo $loebetid;?> mdr.
                            </option>
                            <?php } ?>
                        </select>
                    </div>

                    <br>

                    <p>Månedligt afdrag</p>
                    
                    <!-- Her skal det månedlige afdrag beregnes.-->
                    <!-- $maanedligafdrag = ($beloeb * (1+($rente/100)))/$bindingsperiode -->
                    <!-- $maanedligafdrag skal herefter indsættes i tabellen "kontrakt", sammen med alt data -->
                    
                    <br>

                    <strong>Kontraktbrud</strong>
                    <div>
                        <p><I>Vælg venligst en konsekvens, ved kontraktbrud</I></p>
                        <select class="btn btn-light dropdown-toggle" id="dropdownkontraktbrud" data-toggle="dropdown" name="dropdownkontraktbrud" required>
                            <option selected value="">Vælg konsekvens ved brud på kontrakt</option>
                            <?php 
                            $query4 = "SELECT * FROM kontraktbrud ORDER BY brud";    
                            $result4 = mysqli_query($con, $query4);
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

                    <p><I>Udreget afkast = </I></p>
                    <!-- Her skal afkastet udregnes: -->
                    <!-- $afkast = ($beloeb*(1+(rente/100)))-$beloeb -->
                    <!-- Denne skal ikke overføres til nogen database -->
                    <br>

                    <p><I>Indtast E-mail på den person, som er oprettet på MUTUUM, som skal underskrive kontrakten.</I></p>
                    <label for="laantageremail">Mail på låntager</label>
                    <input type="email" id="laantageremail" name="laantageremail" placeholder="låntager@mail.dk" required>

                    <br>
                    <br>

                    <p><I>"Gem låneaftale" - Kontrakten gemmes under Min profil - <strong>Mine aftaler</strong> hvor den skal underskrives</I></p>

                    <!-- HUSK AT HER SKAL VI SKIFTE URL ADRESSEN UD MED DEN RIGTIGE I STEDET FOR LOCALHOST href="http://localhost/mutuum/mutuum/endelig-LOOP/viskontrakt.php"!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! /-->

                    <a><button role="button" name="submit" type="submit" class="btn btn-primary blaaknap">Gem kontrakt</button></a>
                    
                </fieldset>
            </form>
            
            <br>
        </div>

    </div>
<br>
</div>
<?php
 require_once('includes/footer.php');
?>