<?php 
session_start();
unset($_SESSION['person_id']);
unset($_SESSION['name']);
session_destroy();
$_SESSION =array();
header("Location:index.php");
?>