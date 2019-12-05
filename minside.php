<?php
require_once("includes/header.php");
if (!isset($_SESSION)) session_start();
?>

    <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px} /* ved ikke om class for row påvirker hele hjemme siden - måske skab en anden class efterfølgende :) knus fra Mette */
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }

    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px; /* Ved ikke om denne skaber problemer, da header og footer ikke er rigtig på denne side, men er god nok på omos.php */
      }
      .row.content {height: auto;} 
    }
  </style>
    

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h2>DIN PROFIL</h2>
        <img src="images/logo">
      <ul class="nav nav-pills nav-stacked">
        <li class="dinprofildineoplysninger"><a href="#section1">Dine oplysninger</a></li>
        <li>Navn...</li>
        <li>Efternavn...</li>
        <li>Email...</li>
      </ul><br>
    
    </div>
   

    
<div class="row mineaftaler text-center">
      <div class="col-sm-3">
        <h2>Kontrakter til dig</h2>
        <!-- Container (Pricing Section) -->
<div class="container-fluid">
  <div class="row">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h3>Basic</h3>
        </div>
        <div class="panel-body">
          <p><strong>20</strong> Lorem</p>
          <p><strong>15</strong> Ipsum</p>
          <p><strong>5</strong> Dolor</p>
          <p><strong>2</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>$19</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Vis kontrakt</button>
        </div>
      </div>        

    <div class="col-sm-3">
        <h2>Kontrakter du har oprettet</h2>
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Pro</h1>
        </div>
        <div class="panel-body">
          <p><strong>50</strong> Lorem</p>
          <p><strong>25</strong> Ipsum</p>
          <p><strong>10</strong> Dolor</p>
          <p><strong>5</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>$29</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Vis kontrakt</button>
        </div>
      </div>      
    </div>        
          
        <div class="col-sm-3">
        <h2>Historik</h2>
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Premium</h1>
        </div>
        <div class="panel-body">
          <p><strong>100</strong> Lorem</p>
          <p><strong>50</strong> Ipsum</p>
          <p><strong>25</strong> Dolor</p>
          <p><strong>10</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>$49</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Vis kontrakt</button>
        </div>
      </div>      
    </div>    
  </div>
</div>
        
    </div>
</div>
</div>
</div>  

<?php
require_once("includes/footer.php");
?>
