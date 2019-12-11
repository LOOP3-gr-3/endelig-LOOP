<?php
$page = ('Rådgivning og kontakt');
require_once("includes/header.php");
if (!isset($_SESSION)) session_start();
?>


    <div class="jumbotron text-center wasoverskrift">
            <h1>Økonomisk Rådgivning</h1>
            </div> 
<div class="container-fluid lasseMargin">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-lg-4">   
            <h3>Step by step guide</h3>
            <h4><strong>1) Få et overblik af dit budget</strong></h4>
            <p>Første step til at få styr på din økonomi er ved at danne et overblik på dit nuværende budget. Dette kan med fordel laves i excel, så er det nemmere at rette til løbende.</p>
            <div class=text-center>
            <button data-toggle="collapse" data-target="#step1" class="btn btn-warning text-center pull-left">Læs mere</button>
                <br>
            </div>
            <div id="step1" class="collapse">
            <br>
            <ul>
                <li><p>Oplist alle dine udgifter. Kig gerne på kontoudtog fra banken eller dine regninger. Dette gør, at du vil få et overblik til at se, hvad du bruger dine penge på. Bolig, mad og transport vil være nogle af de store kategorier. Forbrug såsom el, vand, gaver, tøj osv. vil også være en del af din økonomi</p></li>
                <li><p>Mange udgifter er ikke fast hver måned. Det kan eks. være forsikringer, gaver til jul og fødselsdage. Disse omkostninger kan fordeles ud på årets 12 måneder, så du skaber et månedlig overblik af disse</p></li>
                <li><p>Det er også vigtigt, at du indsætter din månedlige indtægt. Du kan nu skabe et overblik på dine nuværende indtægter og udgifter</p></li>
            </ul>
        </div>
            <br>
            <h4><strong>2) Læg et nyt realistisk budget, som du kan overholde</strong></h4>
            <p>Efter step 1 vil du nu have et overblik på dine nuværende indtægter og udgifter. Det vil nu være muligt at lave et nyt budget, som kan hjælpe dig til at holde dine udgifter under din indtægt.</p>
            <div class=text-center>
            <button data-toggle="collapse" data-target="#step2" class="btn btn-warning text-center pull-left">Læs mere</button>
                <br>
            </div>
            <div id="step2" class="collapse">
            <br>
            <ul>
                <li><p><strong>Mine indtægter er større end mine udgifter:</strong></p>
                    <ul>
                        <li><p>Dette er rigtig godt. Hæv dog ikke dit forbrug, før du ved om det er realistisk</p></li>
                    </ul>
                </li>
                <li><p><strong>Mine udgifter er større end indtægter:</strong></p>
                    <ul>
                        <li><p>Her skal du finde en løsning på, hvordan dine udgifter kan minimeres </p></li>
                    </ul>
                </li>
                <li><p><strong>Læg et budget</strong></p>
                    <ul>
                        <li><p>Analyser dine udgifter. Er der nogle områder, hvor du tænker, at du bruger for mange penge. Kategoriser dine udgifter og se, hvor meget du bruger.</p></li>
                    </ul>
                </li>
            </ul>
            </div>
            <br>
            <h4><strong>3) Brug for økonomisk rådgivning?</strong></h4>
            <p>KFUM Økonomisk Rådgivning står klar til at hjælpe dig med at få styr på økonomien.
                <br><strong>Find rådgivning her:  </strong><a href="https://www.kfumsoc.dk/projekter/paa-fode-igen/"> KFUM</a></p>
            
            
        </div>
            <div class="col-xs-12 col-sm-4 col-lg-4">
                <!-- Container (Contact Section) -->
                <h1>Spørgsmål?</h1>
                <p>Har du flere spørgsmål, så er du meget velkommen til at kontakte os</p>
                    <div id="contact">
                    <div class="text-center">
                        <button data-toggle="collapse" data-target="#kontaktformular" class="btn btn-warning mutuumknap btn-lg" onclick="this.innerHTML == &quot;Luk&quot; ? this.innerHTML = &quot;Kontakt os via email&quot; : this.innerHTML = &quot;Luk&quot;;">Kontakt os via email</button>
                    </div>
                    <div id="kontaktformular" class="collapse">
                        <div class="slideanim">

                            <br>
                            <div class="form-group">
                                <input class="form-control" name="name" placeholder="Navn" type="text" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="email" placeholder="Indtast din email her" type="email" required>
                            </div>

                            <textarea class="form-control" name="comments" placeholder="Besked" rows="5"></textarea><br>
                            <div class="form-group">
                                <a href="sendtmail.php"><button class="btn btn-warning mutuumknap pull-right" type="submit">Send</button></a>
                     </div>
                        </div>
                    </div>
                </div>    
        </div>
        <div class="col-xs-12 col-sm-4 col-lg-4">
            
        </div>    
</div>
    <br>
</div>



<?php 
require_once("includes/footer.php");
?>