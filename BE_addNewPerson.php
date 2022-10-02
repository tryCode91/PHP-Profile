<?php require_once $_SERVER['DOCUMENT_ROOT']."/Test/dbsqlconnection.php"; ?>
<?php
require_once $_SERVER['DOCUMENT_ROOT']."/Test/functions.php";      
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $age = $_POST["age"];
        $musictaste = $_POST["musictaste"];
        $status = $_POST["status"];
        $language=$_POST['language'];
        if($status == "Active"){
            $status = 1;
        }else{
            $status = 0;     
        }
        $sql = "select Email from Persons where Email='$email'";
        $result = sqlsrv_query($conn,$sql);
        if($row=sqlsrv_has_rows($result)){
            echo '1';
        }else{
            $sql = "INSERT INTO Persons (FirstName, LastName, Email, Age, Musictaste, Status, language) VALUES ('$firstname', '$lastname','$email', '$age','$musictaste','$status','$language')";
            $result=sqlsrv_query($conn,$sql);
            echo '0';
        }
 
?>

