<?php
$page = ('Om os');
require_once("includes/header.php");
if (!isset($_SESSION)) session_start();
?>
  
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
      .active {
          background-color: white;
          background-image: none;
      }
  </style>
</head>
<body>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center">
  <h2>Tanken bag MUTUUM</h2>
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
        <h4> <br> MUTUUM startede på baggrund af et ønske fra Morten Refsgaard, Jens Eriksen og Sander Dyrvig om at hjælpe dem, der <br> havde brug for lidt ekstra penge til indskud til diverse efter nødssituationer - men også ønsket om at gøre det lettere for to bekendte <br> at låne penge til hinanden og samtidig sikre, at den økonomiske situation ikke kommer mellem dem vha. af en juridisk <br> kontrakt, der skal holde begge parter ansvarlige for aftalen. <br> <br></h4>
      </div>
      <div class="item">
        <h4>Designet, foretningsmodellen og det videre koncept er udarbejdet af en gruppe 3. semester studerende <br> fra Aarhus Universitet. Teamet har arbejdet ud fra konceptet og ønsket om, at man skal kunne lån direkte mellem hinanden <br> og undgå bankerne. Visionen for de tre samarbejdspartnere er at lave en app, der er professionel med sikkerhed <br> i højsædet vha. samarbejdspartnere såsom nemID, Likvido etc. <br> <br></h4>
      </div>
      <div class="item">
        <h4>"Visionen er at lave en app, der er professionel med sikkerhed i højsædet vha. samarbejdspartnere såsom nemID, Likvido etc."<br><span>Xander, opdragsgiver</span></h4>
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
  <h2>HVEM ER VI?</h2><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Morten Refsgaard</p>
    </div>
    <div class="col-sm-4"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Projektgruppen</p>    
    </div>
    <div class="col-sm-4">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div>
  </div>
</div><br>

</body>
</html>

<?php
require_once("includes/footer.php");
?>

