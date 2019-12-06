<?php
$page = ('FAQ');
require_once("includes/header.php");
if (!isset($_SESSION)) session_start();
?>


<!--Nedenstående kode er implementere fra en template fra Bootstrap. Der er foretaget rettelser mhp. tekst og indhold.-->

<div class="container">
    <br />
    <br />
    <br />

    <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        Hvis du ikke finder svaret på dine spørgsmål herinde, så er du velkommen til at kontakte os via mobil eller email.  
    </div>

    <br />

    <div class="panel-group" id="accordion">
        <div class="faqHeader">Generelle spørgsmål</div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Hvordan opretter jeg et udlån?</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                    Så snart du har oprettet en profil så er du godt på vej. Når du tilgår "Min side" så vil du se en funktion der lader dig oprettet et lån. Ved et klik her kommer du til kontraktsiden, hvor du selv vælger hvilke oplysninger og handelsbetingelser som skal være i dit udlån. 
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">Hvad gør jeg hvis jeg har glemt mit password?</a>
                </h4>
            </div>
            <div id="collapseTen" class="panel-collapse collapse">
                <div class="panel-body">
                    Skulle det ske at du havner i den uheldige situation hvor du glemmer dit password, så kan du på login-siden trykke på knappen "Glemt password" og få tilsendt et nyt via din tilknyttede email adresse.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">Hvordan får jeg kontakt til jer?</a>
                </h4>
            </div>
            <div id="collapseEleven" class="panel-collapse collapse">
                <div class="panel-body">
                    Du kan sende os en email eller ringe os op i åbningstiden. Så vil vi hjælpe dig med, at løse de problemer du måtte have.    
                </div>
            </div>
        </div>

        <div class="faqHeader">Långiver</div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Hvem kan jeg låne ud til?</a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    På mutuum lader vi lånet blive bestemt af långiveren. Det betyder altså, at du må låne ud til <strong>hvem som helst!</strong>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Bestemmer jeg selv renten og løbetiden på mit udlån?</a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    Når du først er i gang med, at oprette en kontrakt vil du blive spurgt om hvad denne skal indeholde. Nogle af de ting du <strong>skal</strong> udfylde er bl.a.
                    <hr>
                    <ul>
                        <li>Rente</li>
                        <li>Bindingsperiode</li>
                        <li>Løbetid</li>
                    </ul>
                    Der er selvfølgelig stillet nogle min. og maks. grænser for hvor langt disse kan strækkes over, men i mellem disse bestemmer du helt selv.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Hvor meget kan jeg få i afkast fra hvert udlån?</a>
                </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse">
                <div class="panel-body">
                   Hvert lån har forskellige renter og løbetider tilknyttet. Det betyder også at et eventuelt afkast vil variere fra lån til lån. Når du opretter en kontrakt kan du via en hjælpefunktion udregne det afkast der vil være ifm. tilbagebetalingen af dit lån.
                    <br />
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Hvorfor skal jeg låne ud fra jeres hjemmeside??</a>
                </h4>
            </div>
            <div id="collapseSix" class="panel-collapse collapse">
                <div class="panel-body">
                    Der er en række af forskellige årsager hvorfor du skal bruge Mutuum: 
                <hr>
                    <ul>
                        <li>Sikkerheden er i top og du får et lån direkte mellem långiver og låntager uden en mellemmand eller bank.</li>
                        <li>Hurtig respons tid. Mange banker kan tage uger om, at fastlå hvorvidt et lån skal gennemføres eller ej. Hos Mutuum er du sikret penge på din konto efter 5 min.</li>
                        <li>Du har muligheden for, at sætte sanktioner ifm. din kontrakt. I det her tilfælde menes der kontraktbrud, hvor långiveren f.eks. kan hæve rente eller sende lånet til inkasso.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="faqHeader">Låntager</div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Hvordan kan jeg tage et lån?</a>
                </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
                <div class="panel-body">
                   For at tage et lån skal du først modtage en anmodning fra en ven eller relation. Anmodninger vil du modtage over den email som er tilknyttet Mutuum. Her har du så muligheden for, at gå ind og acceptere og underskrive det lån som den pågældende person har sendt til dig. 
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">Hvad sker der hvis jeg ikke betaler mit lån tilbage til tiden?</a>
                </h4>
            </div>
            <div id="collapseSeven" class="panel-collapse collapse">
                <div class="panel-body">
                    Såfremt du ikke lever op til tilbagebetalingen af dit lån kan dette have forskellige konsekvenser alt afhængig af hvilke kontraktbrug långiveren har valgt under oprettelsen af kontrakten. Dette kan være konsekvenser såsom; 
                    <hr>
                    <ul>
                        <li>Lånt kan sende til inddrivelse hos inkasso</li>
                        <li>Renten på dit lån kan blive hævet</li>
                        <li>Din rating på Mutuum vil falde</li>
                    <br>
                    Vi anbefaler altid vores kunder til, at betale deres lån tilbage til den aftalte tid. Derfor er det også vigtigt, at man gør sig dissse overvejelser inden man skriver under på en aftale. 
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .faqHeader {
        font-size: 27px;
        margin: 20px;
    
    }

</style>

<?php
require_once("includes/footer.php");
?>