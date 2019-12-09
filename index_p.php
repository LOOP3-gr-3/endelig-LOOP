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
    .wasrulle {
        color: dimgray
    }
    * {box-sizing: border-box}
    body {font-family: Verdana, sans-serif; margin:0}

/* Slideshow container */
    .slideshow-container {
    position: relative;
    background: white;
    }

/* Slides */
    .mySlides {
    display: none;
    padding: 0.6em;
    text-align: center;
    }

/* Next & previous buttons */
    .prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    margin-top: -2.5em;
    padding: 1em;
    color: #888;
    font-weight: bold;
    font-size: 1.2em;
  
    user-select: none;
    }

/* Position the "next button" to the right */
    .next {
    position: absolute;
    right: 0;
    }

/* On hover, add a black background color with a little bit see-through */
    .prev:hover, .next:hover {
    background-color: rgba(0,0,0,0.8);
    color: white;
    }

/* The dot/bullet/indicator container */
    .dot-container {
    text-align: center;
    padding: 1em;
    background: darkblue;
    }

/* The dots/bullets/indicators */
    .dot {
    cursor: pointer;
    height: 0.5em;
    width: 0.5em;
    margin: 0 0.2em;
    background-color: white;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
    }

/* Add a background color to the active dot/circle */
    .active, .dot:hover {
    background-color: darkorange;
    }
</style>
<div style="text-align:center">
    <hr>
    <h2><i><strong><i>DU BEHØVER IKKE AT DRØMME SMÅT!</i></strong></i></h2>
    <hr>
</div>

<div class="slideshow-container">
<div class="mySlides">
  <h4><strong> Hvad er Mutuum? <br> <br> Mutuum lån er ikke som alle andre traditionelle lån - vi vil ikke sammenlignes <br> med bankerne eller kviklånsmarkedet!</strong></h4>
</div>
<div class="mySlides">
  <h4><strong>Med kun ét klik væk! <br> <br> Start din investering eller lån med kun ét klik. <br> Vi udbyder en platform hvor du frit kan udlåne eller låne med tryghed og sikkerhed. </strong></h4>
</div>
<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>
</div>
<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span>  
</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<div class="container text-center">    
  <div class="row">
    <div class="col-sm-4 wasfarve1">
<br>
      <div> <img src="images/loock.PNG" style="width:60%" alt="Image"></div>
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
    <p> <br><strong>Med Mutuum kan du investere eller låne fra bare 100 kroner. Det er dine penge, så du bestemmer hvad og hvordan de skal bruges. Med Mutuum kan du løbende se gode bud og dermed tilpasse den til dine ønsker og behov. Mutuum passer på dine penge, så de er i sikre hænder.</strong></p>
</div>
</div><br> <br>
    
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