<?php
$page = ('Forside');
require_once("includes/header.php");
if (!isset($_SESSION)) session_start();
?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
      <h4>MUTUUM startede på baggrund af et ønske fra Morten Refsgaard, Jens Eriksen og Sander Dyrvig om at hjælpe dem, der <br> havde brug for lidt ekstra penge til indskud til diverse efter nødssituationer - men også ønsket om at gøre det lettere for to bekendte <br> at låne penge til hinanden og samtidig sikre, at den økonomiske situation ikke kommer mellem dem vha. af en juridisk <br> kontrakt, der skal holde begge parter ansvarlige.</h4>      
      <p>Lorem ipsum..</p>
    </div>
    <div class="col-sm-4 waslogo">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4 waslogo">
      <span class="glyphicon glyphicon-globe logo"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2>
      <h4><strong>MISSION:</strong> Our mission lorem ipsum..</h4>      
      <p><strong>VISION:</strong> Our vision Lorem ipsum..</p>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row">
    <div class="col-sm-4 waslogo">
      <span class="glyphicon glyphicon-off"></span>
      <h4>POWER</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4 waslogo">
      <span class="glyphicon glyphicon-wrench"></span>
      <h4 style="color:#303030;">HARD WORK</h4>
      <p>Lorem ipsum dolor sit amet..</p>
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