<?php require_once $_SERVER['DOCUMENT_ROOT']."/v2test/dbsqlconnection.php"; 

    session_start();

    $id= $_GET['id'];

    $firstname = ucfirst($_POST["firstname"]);
    $lastname = ucfirst($_POST["lastname"]);
    $email = $_POST["email"];
    $age = $_POST["age"];
    $musictaste = $_POST["musictaste"];
    $language=$_POST['language'];
    $status = $_POST["status"];
    if($status == "Active"){
        $status = 1;
    }else{
        $status = 0;
    }

     $sql = "update Persons set Firstname='$firstname', Lastname='$lastname', Email='$email', Musictaste='$musictaste', Age=$age, Status='$status', Language='$language' where id=$id";
    $result = sqlsrv_query($conn,$sql);

    if ($result) {
        echo '1';
    }else{
        echo '0';
    }
?>