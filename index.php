<?php
$page = ('MUTUUM');
require_once("includes/header.php");
if (!isset($_SESSION)) session_start();
if(!$_SESSION['user_id']) {  
        $knappaaforsiden = '<a href="opretbruger.php"><button class="btn btn-warning btn-lg margin margin wasknap"><h5><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; OPRET BRUGER &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></h5></button></a>';
        } else {
        $knappaaforsiden = '<a href="minside.php"><button href="minside.php" class="btn btn-warning btn-lg margin margin wasknap"><h5><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; MIN SIDE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></h5></button></a>';}
?>
<!-------Selve opbygningen er templates fra bootstrap---->
<!-- First Container -->
<div class="container-fluid bg-1 text-center wastekst no-margin">
    <h1 class="margin"><strong>RELATIONSLÅN FOR ALLE</strong></h1>
    <?php echo $knappaaforsiden; ?>
    <br> <br>
    <img src="images/forsidebillede11.PNG" class="img-responsive margin" style="display:inline" width="350" height="350">
    <h3 class="margin"><strong>VÆK MED ALT DET BESVÆRLIGE</strong></h3>
    <p>Hos Mutuum kan du låne eller udlåne af venner, familie eller bekendte - undgå konflikter og brud på relationerne vha. en juridisk kontrakt. <br>Kontrakten binder begge parter op på nedskrevne retningslinjer, som långiver og låntager aftaler på forhånd inden der bliver underskrevet. <br>Mutuum blander sig ikke - derfor bestemmer du som låntager hvad og hvordan de skal bruges.<br> Dog passer vi på dine penge som långiver, så de er i sikre hænder. </p>
    <br>
</div>
<br>
<!----Det næste er bokse med de tre steps, hvor boksene er templates fra bootstrap---->
<div class="container text-center">
        <div class="row">
                <div class="col-12 col-xs col-sm-4 col-lg-4 col-xl-4" align="center">
                    <div class="panel panel-white">
                        <div class="wasbokse">
                            <div class="panel-heading"> 
                            <div class="wasbokse1">   
                                <h4><strong>STEP 1</strong></h4></div></div>
                            <div class="panel-body"><img src="images/moneey.PNG" class="img-responsive" style="width:58%" alt="Image"></div>
                            <div class="panel-footer">
                              <div class="wasbokse"> 
                                <strong>Besvar nogle simple spørgsmål</strong> <br> Fortæl os hvor meget du vil låne eller udlåne, hvor længe og med hvilken rente. Send kontrakten til modtageren og afvent. </div>
                            </div>
                        </div>
                    </div> 
                        </div>
                <div class="col-12 col-xs col-sm-4 col-lg-4 col-xl-4" align="center">
                    <div class="panel panel-white">
                        <div class="wasbokse">
                        <div class="panel-heading"> 
                        <div class=" wasbokse1">   
                            <h4><strong>STEP 2</strong></h4></div></div>
                        <div class="panel-body"><img src="images/wait.PNG" class="img-responsive" style="width:40%" alt="Image"></div>
                        <div class="panel-footer">
                            <div class="wasbokse"> 
                            <strong>Modtag kontrakt</strong> <br> På baggrund af dine svar får du som långiver eller låntager en nedskrevet bud fra den anden part. Læs kontrakten og erkend dig enig.</div>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="col-12 col-xs col-sm-4 col-lg-4 col-xl-4" align="center">
                    <div class="panel panel-white">
                        <div class="wasbokse">
                        <div class="panel-heading">
                        <div class="wasbokse1">  
                        <h4><strong>STEP 3</strong></h4></div></div>
                        <div class="panel-body"><img src="images/deall.PNG" class="img-responsive" style="width:55%" alt="Image"></div>
                        <div class="panel-footer">
                        <div class="wasbokse">    
                            <strong>Godkend og underskriv</strong> <br> Når den anden part ser sig tilfreds med kravene, underskrives der og låntageren får pengene overført til sin konto.</div>
                        </div>
                        </div>
                    </div>
                </div>
        </div>
</div>
    

    <br> <br>
    <!-- Second Container-->
    <div class="container-fluid bg-2 text-center">
        <div class="well wasfarve">
            <p><strong>Er du långiver?</strong> <br> Hvis du er bange for, at penge skal komme mellem dig og en af dine nærmeste, er Mutuum din vej at gå. Du vil måske gerne hjælpe, men er bange for at tage risikoen,<br> så kan Mutuum garantere dig, for vi tager ingen. Med en juridisk kontrakt, kan du læne dig tilbage og hjælp med fortjenste og ro i maven.</p>
        </div>
        <br>
        <div class="well wasfarve">
            <p><strong>Er du låntager?</strong> <br> Start dit lån med kun ét klik med hjælp fra Mutuum og en relation. En aftale med din kontakt, kan du oprette dig som bruger og tage et lån på under 5 minutter. Det er et lån <br> mellem dig og en relation, vi blander os ikke. Lån nemt, hurtigt og sikkert med nemID. Bliv godkendt samme dag af långiver og få pengene udbetalt direkte til din konto</p>
        </div>
        <br><br>
        <?php echo $knappaaforsiden; ?>
        <br><br>
    </div>


<br>
<?php
require_once("includes/footer.php");
?>