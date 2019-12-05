<?php
require_once('conn.php');
if (!isset($_SESSION)) session_start();
if (isset($_SESSION['user_id'])) {
    $menu = '<li class="nav-item">
                        <a class="nav-link" href="maja-index.php"> Forside <span class="sr-only">(current)</span> 
                        </a> 
            </li>';
            <li class="nav-item">
                        <a class="nav-link" href="minside.php">Min side
                        </a>
                    </li>';
                echo '<li class="nav-item">
                        <a class="nav-link" href="om_os.php">Om os
                        </a>
                    </li>';
                echo '<li class="nav-item">
                        <a class="nav-link" href="logout.php">Log ud
                        </a>
                    </li>';
            }'
}
?>

<!--skaber connection til databasen-->
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>