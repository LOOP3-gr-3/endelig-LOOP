<?php
require_once('conn.php');
if(isset($_SESSION['user_id'])) {
	$menu = '
				    <ul class="nav navbar-nav">
                    <li><a href="minside.php">Min Side</a></li>
                    <li><a href="opretkontraktstep1.php">Opret kontrakt</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                    <li><a href="raadgivning.php">Økonomisk rådgivning</a></li>
                    <li><a href="handelsbetingelser.php">Handelsbetingelser</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log ud</a></li>
                    </ul>';
} else {
	$menu = '
                    <ul class="nav navbar-nav">
                    <li><a href="index.php">Forside</a></li>
                    <li><a href="omos.php">Om Mutuum</a></li>
                    <li><a href="handelsbetingelser.php">Handelsbetingelser</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Log Ind</a></li>
                    <li><a href="opretbruger.php"><span class="glyphicon glyphicon-user"></span> Opret bruger</a></li>
                    </ul>';
}

?>
<!-- Dette gør siden dynamisk, så navbaren bliver ændret alt efter om brugerne er logget ind eller ej-->
<!DOCTYPE html>
<html lang="da">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Projektgruppe 3">
    <title><?php echo $page;?></title> <!-- Gør siderne dynamiske, så der ændres navn i toppen -->
    <link rel="icon" type="image/x-icon" href="images/logo.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"> <!-- Bootstrap core CSS -->   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" type="text/css"> 
    <link rel="stylesheet" href="styles/overallstyles.css" type="text/css">    
</head>          
  
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse no-buttom-margin">
        <div class="navbar-header no-buttom-margin">
                <a href="index.php"><img src="images/logomarkat1.png" class="logoheader"></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <?php echo $menu; ?>
            </div>
        
    </nav>
