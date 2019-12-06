<?php
$page = ('Min side');
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
  </div>
    
    <div class="row mineaftaler text-center">
      <!-- Mine aftaler sektionen -->
          <div class="col-sm-3">
              <h2>Kontrakter til dig</h2> 
                  <div class="panel panel-default text-center">
                    <div class="panel-heading">
                    <h3>Afsender</h3>
                    </div>
                        <div class="panel-body">
                            <p><strong>Beløb</strong> Lorem</p>
                            <p><strong>Rente</strong> Ipsum</p>
                            <p><strong>Dato</strong> Dolor</p>
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-lg">Vis kontrakt</button>
                        </div>
                    </div>        
            </div>
    
            <div class="col-sm-3">
                <h2>Kontrakter du har oprettet</h2>
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h1>Dato for oprettelse</h1>
                        </div>
                            <div class="panel-body">
                                <p><strong>Beløb</strong> Lorem</p>
                                <p><strong>Rente</strong>  
                            </div>
                            <div class="panel-footer">
                                <button class="btn btn-lg">Vis kontrakt</button>
                            </div>
                    </div>      
            </div>        
          
            <div class="col-sm-3">
                <h2>Historik</h2>
                    <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1>Dato</h1>
                    </div>
                        <div class="panel-body">
                            <p><strong>Afsender</strong> Lorem</p>
                            <p><strong>Beløb</strong> Ipsum</p>
                            <p><strong>Rente</strong> Sit</p>
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-lg">Vis kontrakt</button>
                        </div>
                    </div>      
            </div>    
        </div>
</div> 


<?php
require_once("includes/footer.php");
?>
