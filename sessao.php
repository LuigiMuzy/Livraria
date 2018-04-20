<?php
session_start();
$_SESSION['idioma'] = $_GET['idioma'];
header('location:index.php');
?>

