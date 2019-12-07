<?php
require_once('conn.php');
if (!isset($_SESSION)) session_start();
if(isset($_SESSION['user_id'])) {
	$menu = '
				    <ul class="nav navbar-nav">
                    <li class="active"><a href="minside.php">Min Side</a></li>
                    <li><a href="opretkontrakt.php">Opret kontrakt</a></li>
                    <li><a href="raadgivning.php">Økonomisk rådgivning</a></li>
                    <li><a href="index.php">Forside</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>Log ud</a></li>
                    </ul>';
} else {
	$menu = '
                    <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Forside</a></li>
                    <li><a href="omos.php">Om Mutuum</a></li>
                    <li><a href="handelsbetingelser.php">Handelsbetingelser</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Log Ind</a></li>
                    <li><a href="opretbruger.php"><span class="glyphicon glyphicon-user"></span> Opret bruger</a></li>
                    </ul>';
	
}
?>
<!-- Dette gør siden dynamisk, så navbaren bliver ændret alt efter om brugerne er logget ind eller ej-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Projektgruppe 3">
    <title><?php echo $page;?></title> <!-- Gør siderne dynamiske, så der ændres navn i toppen -->
    <!--Google skrifttyper-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="images/mutuum.ico">
    <link rel="stylesheet" href="includes/styles/overallstyle.css" type="text/css">
    <!-- Custom styles for this template -->
    <link href="css/heroic-features.css" rel="stylesheet">
    <!-- js bootstrap -->
</head>

<body>
    <!-- Navigation -->

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Mutuum</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <?php echo $menu; ?>
            </div>
        </div>
    </nav>
