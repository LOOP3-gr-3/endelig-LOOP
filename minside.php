<?php
require_once("includes/header.php");
if (!isset($_SESSION)) session_start();
if (isset($_SESSION['user_id']));
?>

    <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }

    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
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

    <div class="col-sm-9">
      
    </div>
    </div>
</div>
<?php
require_once("includes/footer.php");
?>
