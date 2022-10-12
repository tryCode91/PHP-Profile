<?php require_once $_SERVER['DOCUMENT_ROOT']."/v2Test/dbsqlconnection.php"; 
session_start();
$session = array();
     
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
    }else if($status =="Inactive"){
        $status = 0;     
    }
    $sql = "select Email from Persons where Email='$email'";
    $result = sqlsrv_query($conn,$sql);
    if($row=sqlsrv_has_rows($result)){
        $session['userExists'] = true;
        $session['msg'] = "Email Already Exists";
        echo json_encode($session);
    }else{
        
        if(isset($_SESSION['person_id'])){
            $sql = "INSERT INTO Persons (FirstName, LastName, Email, Age, Musictaste, Status, language, Password) VALUES ('$firstname', '$lastname','$email', '$age','$musictaste',$status,'$language','$password')";
            $result=sqlsrv_query($conn,$sql);
            $session['userExists'] = false;
            $session['location']=true;//FE_secure.php;
            echo json_encode($session);
        }else{
            $sql = "INSERT INTO Persons (FirstName, LastName, Email, Age, Musictaste, Status, language, Password) VALUES ('$firstname', '$lastname','$email', '$age','$musictaste',$status,'$language','$password')";
            $result=sqlsrv_query($conn,$sql);
            $session['userExists'] = false;
            $session['location']=false;//FE_login.php;
            echo json_encode($session);
        }
    }
 
?>

