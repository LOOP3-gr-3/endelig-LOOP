<?php
$page = ('Din side');
require_once("includes/header.php");
if (isset($_SESSION)) session_destroy();
header('Location: index.php');
?>
