<?php
    require_once('includes/header.php');
    echo "<pre>";
    print_r($_POST);
    echo mysqli_error($con);
    echo "</pre>";
?>