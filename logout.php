<?php 
session_start();
unset($_SESSION['person_id']);
unset($_SESSION['name']);
header("Location:index.php");
?>