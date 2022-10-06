<?php require_once $_SERVER['DOCUMENT_ROOT']."/Test/dbsqlconnection.php"; 

session_start();
$session = array();
require_once $_SERVER['DOCUMENT_ROOT']."/Test/functions.php";      
    
    $firstname = ucfirst($_POST["firstname"]);
    $lastname = ucfirst($_POST["lastname"]);
    $email = $_POST["email"];
    $age = $_POST["age"];
    $musictaste = $_POST["musictaste"];
    $status = $_POST["status"];
    $language=$_POST['language'];
    $password=password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    if($status == "Active"){
        $status = 1;
    }else{
        $status = 0;     
    }
    $sql = "select Email from Persons where Email='$email'";
    $result = sqlsrv_query($conn,$sql);
    if($row=sqlsrv_has_rows($result)){
        $session['userExists'] = true;
        $session['msg'] = "Email Already Exists";
        echo json_encode($session);
    }else{
        $sql = "INSERT INTO Persons (FirstName, LastName, Email, Age, Musictaste, Status, language, Password) VALUES ('$firstname', '$lastname','$email', '$age','$musictaste','$status','$language','$password')";
        $result=sqlsrv_query($conn,$sql);
        $session['userExists'] = false;
        echo json_encode($session);
    }
 
?>

