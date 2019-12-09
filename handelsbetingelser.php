<?php
$page = ('Handelsbetingelser');
require_once("includes/header.php");
if (!isset($_SESSION)) session_start();
?>


<!--Nedenstående kode er implementere fra en template fra Bootstrap. Der er foretaget rettelser mhp. tekst og indhold.-->

<div class="container">
    <br />
    <br />
    <br />
    <div class="faqHeader" style="text-align:center"><h1>Handelsbetingelser</h1></div>
    <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <p>Hvis du ikke finder svaret på dine spørgsmål herinde, så er du velkommen til at kontakte os via mobil eller email. </p> 
    </div>

    <br />

    <div class="panel-group" id="accordion">
        <div class="faqHeader"><h1>Generelt</h1></div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Lånebetingelser</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                   <p> Mutuum (herefter ”Långiver”) kan bevilge kredit til en fysisk person (herefter ”Låntageren”), som opfylder følgende betingelser</p>
                    <ol>
                        <li><p>Låntageren er ældre end 19 år,</p></li>
                        <li><p>Låntageren er dansk statsborger med CPR-nummer,</p></li>
                        <li><p>Låntageren har folkeregisteradresse i Danmark,</p></li>
                        <li><p>Låntageren har et gyldigt NemID,</p></li>
                        <li><p>Låntageren vurderes kreditværdig af Långiver,</p></li>
                        <li><p>Låntageren har en aktiv e-mailadresse,</p></li>
                        <li><p>Låntageren har et dansk telefonnummer, som Kunden kan kontaktes på, og</p></li>
                        <li><p>Låntageren har en bankkonto registreret i eget navn i et dansk pengeinstitut, som er en Nemkonto.</p></li>
                      
                    </ol>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">Renter og omkostninger</a>
                </h4>
            </div>
            <div id="collapseTen" class="panel-collapse collapse">
                <div class="panel-body">
                    <p><strong>3.1</strong> Kreditten forrentes i år 1 med en variabel debitorrente, som beregnes fra det tidspunkt, hvor Kunden har Kreditten til disposition på Kundens profil på Långivers hjemmeside.</p><br>
                    <p><strong>3.2</strong> Debitorrenten beregnes på daglig basis og tilskrives hver 30. dag, første gang på den af Kunden valgte første udbetalingsdato.</p><br>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">Løbetid</a>
                </h4>
            </div>
            <div id="collapseEleven" class="panel-collapse collapse">
                <div class="panel-body">
                    <p><strong>4.1</strong> Kreditaftalen løber fra den dato, hvor Kunden elektronisk med NemID underskriver Kreditaftalen</p>.<br>
                    <p><strong>4.2</strong> Løbetiden for Kreditten er tidsubestemt, men Kunden er forpligtet til at tilbagebetale Kreditten på anfordring med tre (3) måneders med tillæg af renter og omkostninger, hvorved Kreditten ophøre  </p> 
                </div>
            </div>
        </div>

        <div class="faqHeader"><h1>Behandling af persondataoplysninger</h1></div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">GDPR</a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>Lorem Ipsum er ganske enkelt fyldtekst fra print- og typografiindustrien. Lorem Ipsum har været standard fyldtekst siden 1500-tallet, hvor en ukendt trykker sammensatte en tilfældig spalte for at trykke en bog til sammenligning af forskellige skrifttyper. Lorem Ipsum har ikke alene overlevet fem århundreder, men har også vundet indpas i elektronisk typografi uden væsentlige ændringer. Sætningen blev gjordt kendt i 1960'erne med lanceringen af Letraset-ark, som indeholdt afsnit med Lorem Ipsum, og senere med layoutprogrammer som Aldus PageMaker, som også indeholdt en udgave af Lorem Ipsum.</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Fortrolighed</a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>Lorem Ipsum er ganske enkelt fyldtekst fra print- og typografiindustrien. Lorem Ipsum har været standard fyldtekst siden 1500-tallet, hvor en ukendt trykker sammensatte en tilfældig spalte for at trykke en bog til sammenligning af forskellige skrifttyper. Lorem Ipsum har ikke alene overlevet fem århundreder, men har også vundet indpas i elektronisk typografi uden væsentlige ændringer. Sætningen blev gjordt kendt i 1960'erne med lanceringen af Letraset-ark, som indeholdt afsnit med Lorem Ipsum, og senere med layoutprogrammer som Aldus PageMaker, som også indeholdt en udgave af Lorem Ipsum.</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Klageadgang</a>
                </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>Lorem Ipsum er ganske enkelt fyldtekst fra print- og typografiindustrien. Lorem Ipsum har været standard fyldtekst siden 1500-tallet, hvor en ukendt trykker sammensatte en tilfældig spalte for at trykke en bog til sammenligning af forskellige skrifttyper. Lorem Ipsum har ikke alene overlevet fem århundreder, men har også vundet indpas i elektronisk typografi uden væsentlige ændringer. Sætningen blev gjordt kendt i 1960'erne med lanceringen af Letraset-ark, som indeholdt afsnit med Lorem Ipsum, og senere med layoutprogrammer som Aldus PageMaker, som også indeholdt en udgave af Lorem Ipsum.</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Lovvalg og værneting</a>
                </h4>
            </div>
            <div id="collapseSix" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>Lorem Ipsum er ganske enkelt fyldtekst fra print- og typografiindustrien. Lorem Ipsum har været standard fyldtekst siden 1500-tallet, hvor en ukendt trykker sammensatte en tilfældig spalte for at trykke en bog til sammenligning af forskellige skrifttyper. Lorem Ipsum har ikke alene overlevet fem århundreder, men har også vundet indpas i elektronisk typografi uden væsentlige ændringer. Sætningen blev gjordt kendt i 1960'erne med lanceringen af Letraset-ark, som indeholdt afsnit med Lorem Ipsum, og senere med layoutprogrammer som Aldus PageMaker, som også indeholdt en udgave af Lorem Ipsum.</p>
                </div>
            </div>
        </div>

        <div class="faqHeader"><h1>Låntagers fortrydelsesret</h1></div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Aftalen om lånet</a>
                </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
                <div class="panel-body">
                  <p><strong>6.1</strong> Når Kreditaftalen er underskrevet, stilles Kreditten til rådighed for Kunden på Kundens profil på Långivers hjemmeside. Når Kunden foretager træk på Kreditten, udbetales kreditbeløbet til Kundens Nemkonto (se nærmere om Nemkontoordningen under pkt. 6.4.</p><br>
                   <p><strong> 6.2</strong> Långiver informerer Kunden om tidspunktet for kreditbeløbets udbetaling.</p><br>
                    <p><strong>6.3</strong> Kunden har til enhver tid ret til at få udbetalt uudnyttede beløb på Kreditten via Kundens profil på Långivers hjemmeside i DKK 500 intervaller. jf. pkt. 2.2.</p><br>
                    <p><strong>6.4</strong> Udbetaling via Nemkonto</p> <br>
                    <p><strong>6.4.1</strong> Når Kunden accepterer en Kreditaftale, giver Kunden samtykke til udbetaling via Nemkonto, som blandt andet betyder, at Kunden ikke skal angive kontotinformation i kreditansøgningen, idet Långiver automatisk får besked om ændringer på grund af dataudvekslingen med Kundens Nemkonto. Formålet med denne dataudveksling i forhold til Kundens Nemkonto sker udelukkende med henblik på, at Långiver udbetaler kreditbeløb.</p> <br>
                   <p><strong> 6.4.2</strong> Økonomistyrelsen er dataansvarlig og har således ansvaret for oprettelsen og driften af Nemkontosystemet. Databehandlingsopgaven er dog konkret overdraget til KMD A/S</p>.<br>
                    <p><strong>6.4.3</strong> Når Långiver skal forestå en udbetaling til Kundens Nemkonto, foregår det på følgende måde: Långiver indsender en elektronisk betalingsmeddelelse til Nemkontosystemet. Betalingsmeddelelsen vil identificere Kunden med CPR-nummer, hvis Kunden med sit samtykke har accepteret dets anvendelse ved udbetaling af kreditbeløb. Nemkontosystemet påfører herefter automatisk den indsendte betalingsmeddelelse på den i Kundens navn registrerede Nemkonto og sender betalingsmeddelelsen med kontonummer tilbage til Långiver. Herefter udbetaler Långiver kreditbeløbet til Kundens Nemkonto. Hvis Kunden ikke vil samtykke til udbetaling af kreditbeløb via Nemkonto, skal Långiver straks have underretning herom på mail info@Bedrekredit.dk.</p><br>
                   <p><strong> 6.4.4</strong> Kunden kan til enhver tid rette henvendelse til Nemkonto Support på telefon 44606368 eller support@nemkonto.dk for indsigt i, hvilke oplysninger, som Nemkonto har registreret om Kunden. Kunden kan i den forbindelse ligeledes anmode om, at sådanne registrerede oplysninger rettes eller slettes, hvis oplysningerne er urigtige.</p><br>
                    <p><strong>6.4.5</strong> Kunden kan endvidere se og rette oplysninger på www.nemkonto.dk.</p> 
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">Tilbagebetaling</a>
                </h4>
            </div>
            <div id="collapseSeven" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>Lorem Ipsum er ganske enkelt fyldtekst fra print- og typografiindustrien. Lorem Ipsum har været standard fyldtekst siden 1500-tallet, hvor en ukendt trykker sammensatte en tilfældig spalte for at trykke en bog til sammenligning af forskellige skrifttyper. Lorem Ipsum har ikke alene overlevet fem århundreder, men har også vundet indpas i elektronisk typografi uden væsentlige ændringer. Sætningen blev gjordt kendt i 1960'erne med lanceringen af Letraset-ark, som indeholdt afsnit med Lorem Ipsum, og senere med layoutprogrammer som Aldus PageMaker, som også indeholdt en udgave af Lorem Ipsum.</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwenty">Misligeholdelse</a>
                </h4>
            </div>
            <div id="collapseTwenty" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>Lorem Ipsum er ganske enkelt fyldtekst fra print- og typografiindustrien. Lorem Ipsum har været standard fyldtekst siden 1500-tallet, hvor en ukendt trykker sammensatte en tilfældig spalte for at trykke en bog til sammenligning af forskellige skrifttyper. Lorem Ipsum har ikke alene overlevet fem århundreder, men har også vundet indpas i elektronisk typografi uden væsentlige ændringer. Sætningen blev gjordt kendt i 1960'erne med lanceringen af Letraset-ark, som indeholdt afsnit med Lorem Ipsum, og senere med layoutprogrammer som Aldus PageMaker, som også indeholdt en udgave af Lorem Ipsum.</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwentyone">Overdragelse til tredjemand</a>
                </h4>
            </div>
            <div id="collapseTwentyone" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>Lorem Ipsum er ganske enkelt fyldtekst fra print- og typografiindustrien. Lorem Ipsum har været standard fyldtekst siden 1500-tallet, hvor en ukendt trykker sammensatte en tilfældig spalte for at trykke en bog til sammenligning af forskellige skrifttyper. Lorem Ipsum har ikke alene overlevet fem århundreder, men har også vundet indpas i elektronisk typografi uden væsentlige ændringer. Sætningen blev gjordt kendt i 1960'erne med lanceringen af Letraset-ark, som indeholdt afsnit med Lorem Ipsum, og senere med layoutprogrammer som Aldus PageMaker, som også indeholdt en udgave af Lorem Ipsum.</p>
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