<?php 
require_once $_SERVER['DOCUMENT_ROOT']."/v2Test/dbsqlconnection.php";


session_start();
$error=array();
$res=array();

if(empty($_POST['email'])){
    $error[]='Email field is required';
}
if(empty($_POST['password'])){
    $error[]='Password field is required';
}

if(!empty($_POST['email']) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $error[]="Enter Valid Email Address";
}

if(count($error)>0){
    $resp['msg']=$error;
    $resp['status'] = false;
    echo json_encode($resp);
    exit;
}

$sql="select * from Persons where Email = '".$_POST['email']."'";
$result = sqlsrv_query($conn,$sql);
$row=sqlsrv_fetch_array($result);

if($row>0){
        
    if(!password_verify($_POST['password'], $row['Password'])) {
            $error[]="password is not valid";
            $resp['msg'] = $error;
            $resp['status'] = false;
            echo json_encode($resp);
            exit;
    }

        $_SESSION['person_id']=$row['ID'];
        $_SESSION['name']=$row['Firstname'];
        $resp['status']=true;
        echo json_encode($resp);
        exit;

}else{
    $error[]="Email does not match";
    $resp['msg']=$error;
    $resp['status']=false;
    echo json_encode($resp);
    exit;
}
?>