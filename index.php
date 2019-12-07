<?php
$page = ('Forside');
require_once("includes/header.php");
if (!isset($_SESSION)) session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
<style>
    .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
    }
    .wasfarve {
    border-color: darkorange;
    background: white;
    border-radius: 3em;
    }
    .wasfarve p{
          color: dimgray;
    }
    .wasfarve1 {
          color: dimgray;
    }
    h2 {
          color: darkblue;
    }
    .wastekstboks p{
         color: dimgray;
    }
    h3 {
          color: dimgray;
    }
    .waskasser {
          color: dimgray;
    }
    .wasbokse {
          border-radius: 8em;
    }
    .wasbokserne {
          width: 80%;
      }
</style>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center">
  <div style="text-align:center">
    <hr><h1><strong><i>HJÆLP DINE NÆRMESTE ELLER FJERNESTE</i></strong></h1>
    <hr>
    </div>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4> <br> <strong> Hvad er Mutuum? <br> <br> Mutuum lån er ikke som alle andre traditionelle lån - vi vil ikke sammenlignes med bankerne eller kviklånsmarkedet!</strong> <br> <br> <br></h4>
      </div>
      <div class="item">
        <h4> <br> <strong>Med kun ét klik væk! <br> <br> Start din investering eller lån med kun ét klik. Vi udbyder en platform hvor du frit kan udlåne eller låne med tryghed og sikkerhed. </strong>´<br> <br> <br></h4>
      </div>
 <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
 </div>
</div>
  
<div class="container text-center">    
  <div class="row">
    <div class="col-sm-4 wasfarve1">
<br>
      <img src="images/loock.PNG" style="width:60%" alt="Image">
      <p><strong>Lån sikkert med nemID. Nem og hurtig ansøgning. Bliv godkendt samme dag, pengene udbetales direkte til din konto</strong></p>
    </div>
    <div class="col-sm-4 wasfarve1">
<br>
      <img src="images/betingelser.PNG" style="width:55%" alt="Image">
      <p> <strong> <br>Udfyld ansøgning til kreditgodkendelse - godkend den endelige rente og lånebetingelser. Alt står med stort, ingen skjulte gebyrer</strong></p>    
    </div>
<br>
    <div class="col-sm-4">
      <div class="well wasfarve">
       <p><strong>Långiver</strong> <br> Start din investering med kun ét klik. Med Mutuum behøver du hverken være økonom eller millionær for at have en professionel investering. Opret dig med det samme og indsæt dit beløb ved, at lave en kontrakt - lån dig tilbage og tjen med god samvittighed. </p>
      </div>
      <div class="well wasfarve">
       <p><strong>Låntager</strong> <br> Start dit lån med kun ét klik. Mutuum står klar til at hjælpe dig. Du kan oprette dig som bruger med det samme og tage et lån på under 5 minutter. Det er et lån mellem dig og långiver, vi blander os ikke.</p>
      </div>
<br>
    </div>
  </div>
<div style="text-align:center" class="wastekstboks">
    <h2><strong><i>VÆK MED ALT DET BESVÆRLIGE</i></strong></h2>
    <p> <strong>Med Mutuum kan du investere eller låne fra bare 100 kroner. Det er dine penge, så du bestemmer hvad og hvordan de skal bruges. Med Mutuum kan du løbende se gode bud og dermed tilpasse den til dine ønsker og behov. Mutuum passer på dine penge, så de er i sikre hænder.</strong></p>
</div>
</div><br>
    
<div class="container wasbokserne"> 
<div style="text-align:center" class="wastekstboks">
    <h3><strong>Så let kommer du i gang</strong></h3>
</div>
<br>
  <div class="row waskasser">
    <div class="col-sm-4" align="center">
      <div class="panel panel-primary wasbokse">
        <div class="panel-heading wasbokse"> <strong>STEP 1</strong></div>
        <div class="panel-body"><img src="images/moneey.PNG" class="img-responsive" style="width:60%" alt="Image"></div>
        <div class="panel-footer wasbokse"><strong>Besvar nogle simple spørgsmål</strong> <br> Fortæl os hvor meget du vil låne eller udlåne, hvor længe, med hvilken rente og lidt om din økonomiske situation</div>
      </div>
    </div>
    <div class="col-sm-4" align="center"> 
      <div class="panel panel-primary wasbokse">
        <div class="panel-heading wasbokse"> <strong>STEP 2</strong></div>
        <div class="panel-body"><img src="images/wait.PNG" class="img-responsive" style="width:56%" alt="Image"></div>
        <div class="panel-footer wasbokse"><strong>Se de diverse bud</strong> <br> På baggrund af dine svar får du som låntager forskellige tilbud, som du enten kan takke ja eller nej til. Som långiver afventer du indtil låntageren har godkendt lånet.</div>
      </div>
    </div>
    <div class="col-sm-4" align="center"> 
      <div class="panel panel-primary wasbokse">
        <div class="panel-heading wasbokse"><strong>STEP 3</strong></div>
        <div class="panel-body"><img src="images/deal.PNG" class="img-responsive" style="width:58%" alt="Image"></div>
        <div class="panel-footer wasbokse"><strong>Godkend og underskriv</strong> <br> Når du som låntager ser dig tilfreds med de forskellige krav fra långiveren, underskriver du og får straks pengene sendt til din konto</div>
      </div>
    </div>
  </div>
</div><br>

<?php
require_once("includes/footer.php");
?>