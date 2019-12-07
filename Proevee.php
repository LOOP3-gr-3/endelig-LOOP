<?php
$page = ('Forside');
require_once("includes/header.php");
if (!isset($_SESSION)) session_start();
?>
  <style>
  .wasoverskrift {
    background-color: darkblue;
    color: #fff;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo {
    font-size: 10em;
  }
  @media screen {
    .waslogo {
      text-align: center;
      margin: 3em 0;
    }
  }
  </style>
<body>

<div class="jumbotron text-center wasoverskrift">
  <h1>Om os</h1> 
  <p>Læs om Mutuum og få indblik i din kommende verden</p> 
</div>

<!-- Container (About Section) -->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Tanken bag Mutuum</h2>
      <h4> <br> MUTUUM startede på baggrund af et ønske fra Morten Refsgaard, Jens Eriksen og Sander Dyrvig om at hjælpe dem, der havde brug for lidt ekstra penge til indskud til diverse efter nødssituationer - men også ønsket om at gøre det lettere for to bekendte at låne penge til hinanden og samtidig sikre, at den økonomiske situation ikke kommer mellem dem vha. af en juridisk kontrakt, der skal holde begge parter ansvarlige.</h4> <br>      
      <p>Designet, foretningsmodellen og det videre koncept er udarbejdet af en gruppe 3. semester studerende fra Aarhus Universitet. Teamet har arbejdet ud fra konceptet og ønsket om, at man skal kunne lån direkte mellem hinanden og undgå bankerne. Visionen for de tre samarbejdspartnere er at lave en app, der er professionel med sikkerhed i højsædet vha. samarbejdspartnere såsom nemID, Likvido etc.</p>
    </div>
<div class="col-sm-4 waslogo"> <br>
    <img src="images/logo.png" style="width:70%" alt="Image">
</div>
</div>

<!-- Container (Services Section) -->
<div class="container-fluid text-center">
  <h2>Hvem er vi?</h2>
  <div class="row">
    <div class="col-sm-4 waslogo">
      <img src="images/Morten.jpg" style="width:50%" alt="Image">
      <h4>Morten Refsgaard</h4>
      <p>Uddannelse: Cand. Oecon. fra Århus Universitet <br> Erhvervserfaring: <br> Bankpartner, Selvstændig finansiel rådgiver (14-19)<br> Compliance og risikoansvarlig, Skjern Bank (12-13) <br> Stedfortrædende kreditchef, Skjern Bank (10-11) Erhvervsrådgiver, Sydbank (06-10)</p>
    </div>
      <br>
    <div class="col-sm-4 waslogo">
      <img src="images/gruppeen.PNG" style="width:50%" alt="Image">
      <h4 style="color:#303030;">Teamet</h4>
      <p>Lasse Hvisthule <br> Maja Pallesen <br> Mette Weyergang <br> Mikkel Holt <br> Wasfia Hashemi <br> Business Development studerende på 3. semester</p>
    </div>
    <div class="col-sm-4 waslogo">
      <span class="glyphicon glyphicon-lock"></span>
      <h4>JOB DONE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
  <br><br>
</div>
<?php
require_once("includes/footer.php");
?>