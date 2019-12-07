<?php
$page = ('Om os');
require_once("includes/header.php");
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
.wasfarve {
    border-color: darkorange;
    background: white;
    border-radius: 2em;
      }
.wasfarve p{
    color: darkblue;
    }
div.background {
  background: url(klematis.jpg) repeat;
  border: 2px solid black;
}

div.transbox {
  margin: 30px;
  background-color: #ffffff;
  border: 1px solid black;
  opacity: 0.6;
  filter: alpha(opacity=60); /* For IE8 and earlier */
}

div.transbox p {
  margin: 5%;
  font-weight: bold;
  color: #000000;
}
</style>
</head>
<body>
<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center">
  <h2>Tanken bag Mutuum</h2> <br>
<div class="background">
  <div class="transbox">
    <p> MUTUUM startede på baggrund af et ønske fra Morten Refsgaard, Jens Eriksen og Sander Dyrvig om at hjælpe dem, der <br> havde brug for lidt ekstra penge til indskud til diverse efter nødssituationer - men også ønsket om at gøre det lettere for to bekendte <br> at låne penge til hinanden og samtidig sikre, at den økonomiske situation ikke kommer mellem dem vha. af en juridisk <br> kontrakt, der skal holde begge parter ansvarlige. </p>
  </div>
  <div class="transbox">
    <p>Designet, foretningsmodellen og det videre koncept er udarbejdet af en gruppe 3. semester studerende <br> fra Aarhus Universitet. Teamet har arbejdet ud fra konceptet og ønsket om, at man skal kunne lån direkte mellem hinanden <br> og undgå bankerne. Visionen for de tre samarbejdspartnere er at lave en app, der er professionel med sikkerhed <br> i højsædet vha. samarbejdspartnere såsom nemID, Likvido etc. </p>
  </div>
</div>
</div>
   
<div class="container text-center">
  <h2>Hvem er vi?</h2><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="images/Morten.jpg" style="width:90%" alt="Image">
      <p>Morten Refsgaard</p>
    </div>
    <br>
    <div class="col-sm-4"> 
      <img src="images/gruppeen.PNG" style="width:100%" alt="Image">
      <p>Teamet - Aarhus Universitet</p>    
    </div>
    <div class="col-sm-4">
      <div class="well wasfarve">
       <p><strong>Morten Refsgaard</strong> <br> Uddannelse: Cand. Oecon. fra Århus Universitet <br> Erhvervserfaring: <br> Bankpartner, Selvstændig finansiel rådgiver (14-19)<br> Compliance og risikoansvarlig, Skjern Bank (12-13) <br> Stedfortrædende kreditchef, Skjern Bank (10-11) Erhvervsrådgiver, Sydbank (06-10)</p>
      </div>
      <div class="well wasfarve">
       <p> <strong>Teamet</strong> <br> Lasse Hvisthule <br> Maja Pallesen <br> Mette Weyergang <br> Mikkel Holt <br> Wasfia Hashemi <br> <br> Business Development studerende på 3. semester</p>
      </div>
    </div>
  </div>
</div><br>
<?php
require_once("includes/footer.php");
?>

