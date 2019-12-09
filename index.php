<?php
$page = ('MUTUUM');
require_once("includes/header.php");
?>
<style>
  p {font-size: 1em;}
  .margin {margin-bottom: 1.8em;}
  .bg-1 { 
    background-color: black;
    color: #ffffff;
    }
    .bg-2 { 
    background-color: white;
    color: black;
    }
    .bg-4 { 
    background-color: #2f2f2f;
    color: #fff;
    }
   .wasfarve {
    border-color: orange;
    background: white;
    border-radius: 3em;
    }
    .wasfarve p{
    color: black;
    }
    .wasbokse {
    border-radius: 8em;
    color: black;
    background: white;
    }
    .wasbokserne {
    width: 85%;
    }
  </style>
<body>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <h1 class="margin">VELKOMMEN TIL MUTUUM</h1>
  <img src="images/benjamin-sow-CB4z0uTFSYg-unsplash.jpg" class="img-responsive img-circle margin" style="display:inline" width="350" height="350">
    <h3 class="margin"><strong>VÆK MED ALT DET BESVÆRLIGE</strong></h3>
  <p>Med Mutuum kan du investere eller låne fra bare 100 kroner. Det er dine penge, så du bestemmer hvad og hvordan de skal bruges. Med Mutuum kan du løbende se gode bud og dermed tilpasse <br> den til dine ønsker og behov. Mutuum passer på dine penge, så de er i sikre hænder. </p>
  <button href="#" class="btn btn-warning btn-block"> <strong>OPRET BRUGER</strong></button>
    <br>
</div>
<br>
<div class="container wasbokserne"> 
  <div class="row waskasser">
    <div class="col-sm-4" align="center">
      <div class="panel panel-white wasbokse">
        <div class="panel-heading wasbokse1"> <strong>STEP 1</strong></div>
        <div class="panel-body"><img src="images/moneyy.PNG" class="img-responsive" style="width:60%" alt="Image"></div>
        <div class="panel-footer wasbokse"><strong>Besvar nogle simple spørgsmål</strong> <br> Fortæl os hvor meget du vil låne eller udlåne, hvor længe, med hvilken rente og lidt om din økonomiske situation</div>
      </div>
    </div>
<div class="col-sm-4" align="center"> 
    <div class="panel panel-white wasbokse">
        <div class="panel-heading wasbokse1"> <strong>STEP 2</strong></div>
        <div class="panel-body"><img src="images/waiit.PNG" class="img-responsive" style="width:45%" alt="Image"></div>
        <div class="panel-footer wasbokse"><strong>Se de diverse bud</strong> <br> På baggrund af dine svar får du som låntager forskellige tilbud, som du enten kan takke ja eller nej til. Som långiver afventer du indtil låntageren har godkendt lånet.</div>
    </div>
</div>
    <div class="col-sm-4" align="center"> 
      <div class="panel panel-white wasbokse">
        <div class="panel-heading wasbokse1"><strong>STEP 3</strong></div>
        <div class="panel-body"><img src="images/deall.PNG" class="img-responsive" style="width:62%" alt="Image"></div>
        <div class="panel-footer wasbokse"><strong>Godkend og underskriv</strong> <br> Når du som låntager ser dig tilfreds med de forskellige krav fra långiveren, underskriver du og får straks pengene sendt til din konto</div>
      </div>
    </div>
  </div>
</div>
<br> <br>
<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
      <div class="well wasfarve">
       <p><strong>Er du långiver?</strong> <br> Start din investering med kun ét klik. Med Mutuum behøver du hverken være økonom eller millionær for at have en professionel investering. Opret dig med det samme <br> og indsæt dit beløb  ved, at lave en kontrakt - læn dig tilbage og tjen med god samvittighed. </p>
      </div>
      <div class="well wasfarve">
       <p><strong>Er du låntager?</strong> <br> Start dit lån med kun ét klik. Mutuum står klar til at hjælpe dig. Du kan oprette dig som bruger med det samme og tage et lån på under 5 minutter. <br> Det er et lån mellem dig og långiver, vi blander os ikke.Lån sikkert med nemID. Nem og hurtig ansøgning. Bliv godkendt samme dag, pengene udbetales direkte til din konto</p>
      </div>
</div>
<?php
require_once("includes/footer.php");
?>