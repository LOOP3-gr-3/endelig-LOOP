<?php
$page = ('Om os');
require_once("includes/header.php");
if (!isset($_SESSION)) session_start();
?>
 
<div class="jumbotron text-center wasoverskrift">
  <h1>Om os</h1> 
  <p>Læs om Mutuum og få indblik i din kommende verden</p> 
</div>

<!-- Templates fra bootstrap -->
<div class="container-fluid">
    <div class="lasseMargin">
  <div class="row">
    <div class="col-12 col-sm-6 col-lg-8 col-xl-8">
      <h2>Tanken bag Mutuum</h2>
      <h4> <br> MUTUUM startede på baggrund af et ønske fra Morten Refsgaard, Jens Eriksen og Sander Dyrvig om at hjælpe dem, der havde brug for lidt ekstra penge til indskud til diverse efter nødssituationer - men også ønsket om at gøre det lettere for to bekendte at låne penge til hinanden og samtidig sikre, at den økonomiske situation ikke kommer mellem dem vha. af en juridisk kontrakt, der skal holde begge parter ansvarlige.</h4> <br>      
      <p>Designet og det videre koncept er udarbejdet af en gruppe 3. semester studerende fra Aarhus Universitet. Teamet har arbejdet ud fra konceptet og ønsket om, at man skal kunne lån direkte mellem hinanden og undgå bankerne. Visionen for de tre samarbejdspartnere er at lave en app, der er professionel med sikkerhed i højsædet vha. samarbejdspartnere såsom nemID, Likvido etc.</p>
    </div>
<div class="col-12 col-sm-6 col-lg-4 col-xl-8"> <br>
    <img class="waslogo" src="images/logo.png" style="width:70%" alt="Image">
</div>
</div>
<!-- Container (Services Section) -->
<div class="text-center">
    <hr>
  <h2>Hvem er vi?</h2>
  <div class="row wasmargin">
    <div class="col-12 col-sm-6 col-lg-4 col-xl-4">
      <img class="waslogo" src="images/Morten.jpg" style="width:50%" alt="Image">
      <h4>Morten Refsgaard</h4>
      <p><strong>Uddannelse:</strong> Cand. Oecon. fra Århus Universitet <br> Erhvervserfaring: <br> Bankpartner, Selvstændig finansiel rådgiver (14-19)<br> Compliance og risikoansvarlig, Skjern Bank (12-13) <br> Stedfortrædende kreditchef, Skjern Bank (10-11)<br> Erhvervsrådgiver, Sydbank (06-10)</p>
    </div>
      <br>
    <div class="col-12 col-sm-6 col-lg-4 col-xl-4">
      <img class="waslogo" src="images/gruppeen.PNG" style="width:50%" alt="Image">
      <h4 style="color:#303030;">Teamet</h4>
      <p>Lasse Hvisthule <br> Maja Pallesen <br> Mette Weyergang <br> Mikkel Holt <br> Wasfia Hashemi <br> Business Development studerende på 3. semester</p>
    </div>
    <div class="col-12 col-sm-6 col-lg-4 col-lg-4">
      <img class="waslogo" src="images/universitet.PNG" style="width:50%" alt="Image">
      <h4>Aarhus Universitet</h4>
      <p>Universitetet hvor både Morten Refsgaard og de 5 studerende enten har taget sin uddannelse eller er i gang. Universitetet har stået til rådighed under hele forløbet af udviklingen af designet, forretningsmodellen og det videre koncept. Derudover har universitetet været bindeleddet mellem de 5 studerende og opdragsgiveren, Morten Refsgaard.</p>
    </div>
  </div>
</div>
</div>
</div>
<?php
require_once("includes/footer.php");
?>