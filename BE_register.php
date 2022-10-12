<?php require_once $_SERVER['DOCUMENT_ROOT']."/v2Test/dbsqlconnection.php";

$sql = "INSERT INTO Persons (FirstName, LastName, Email, Age, Musictaste, Status, language, Password) VALUES ('$firstname', '$lastname','$email', '$age','$musictaste',$status,'$language','$password')";
$result=sqlsrv_query($conn,$sql);
$resp=array();