<?php
$page = ('Rådgivning og kontakt');
require_once("includes/header.php");
if (!isset($_SESSION)) session_start();
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-lg-12">
            <h1>Økonomisk Rådgivning</h1>
            <h3>Step by step guide</h3>
            <h4>1) Få et overblik af dit budget</h4>
            <p>Første step til at få styr på din økonomi er ved at danne et overblik på dit nuværende budget. Dette kan med fordel laves i excel, så er det nemmere at rette til løbende.</p>
            <div class=text-center>
            <button data-toggle="collapse" data-target="#step1" class="btn btn-warning text-center">Få ekstra tips til dette step</button>
            </div>
            <div id="step1" class="collapse">
            <br>
            <ul> <!-- http://20stepguide.dk/guide-foelg-disse-tips-og-faa-styr-paa-oekonomien/ -->
                <li><p>Oplist alle dine udgifter. Kig gerne på kontoudtog fra banken eller dine regninger. Dette gør, at du vil få et overblik til at se, hvad du bruger dine penge på. Bolig, mad og transport vil være nogle af de store kategorier. Forbrug såsom el, vand, gaver, tøj osv. vil også være en del af din økonomi</p></li>
                <li><p>Mange udgifter er ikke fast hver måned. Det kan eks. være forsikringer, gaver til jul og fødselsdage. Disse omkostninger kan fordeles ud på årets 12 måneder, så du skaber et månedlig overblik af disse</p></li>
                <li><p>Det er også vigtigt, at du indsætter din månedlige indtægt. Du kan nu skabe et overblik på dine nuværende indtægter og udgifter</p></li>
            </ul>
        </div>
            <br>
            <h4>2) Læg et nyt realistisk budget</h4>
            <p>Efter step 1 vil du nu have et overblik på dine nuværende indtægter og udgifter.</p>
            <div class=text-center>
            <button data-toggle="collapse" data-target="#step2" class="btn btn-warning text-center">Få tips til dette step</button>
            </div>
            <div id="step2" class="collapse">
            <ul>
                <li><p><strong>Mine udgifter er større end udgifter:</strong></p>
                    <ul>
                        <li><p>Dette er rigtig godt. Hæv dog ikke dit forbrug, før du ved om det er realistisk</p></li>
                    </ul>
                </li>
                <li><p><strong>Mine udgifter er større end udgifter:</strong></p>
                    <ul>
                        <li><p>Dette er rigtig godt. Hæv dog ikke dit forbrug, før du ved om det er realistisk</p></li>
                    </ul>
                </li>
            </ul>
            <br>
            </div>

            <div class="col-xs-12 col-sm-12 col-lg-12">
                <!-- Container (Contact Section) -->
                <h1>Spørgsmål?</h1>
                <div>
                    <p>Kontakt os på følgende informationer</p>
                    <p><span class="glyphicon glyphicon-map-marker"></span>Birk Centerpark 15, 7400 Herning</p>
                    <p><span class="glyphicon glyphicon-phone"></span> +45 12345678</p>
                    <p><span class="glyphicon glyphicon-envelope"></span> kontakt@mutuum.dk</p>
                </div>
                <div id="contact">
                    <div class="text-center">
                        <button data-toggle="collapse" data-target="#demo" class="btn btn-default btn-lg majaopretbrugerknap">Åben kontaktformular</button>
                    </div>
                    <div id="demo" class="collapse">
                        <div class="slideanim">

                            <br>
                            <div class="form-group">
                                <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                            </div>

                            <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                            <div class="form-group">
                                <button class="btn btn-warning pull-right" type="submit">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php 
require_once("includes/footer.php");
?>