<?php require_once $_SERVER['DOCUMENT_ROOT']."/v2Test/dbsqlconnection.php"; 
session_start();
$work= $_POST['work'];
$extra= $_POST['extra'];
$session=array();
if(isset($work) && isset($extra)){
    $sql = "insert into Person_details (id,Work_Experience, Additional_Details,time) values('".$_SESSION['person_id']."','$work','$extra',CURRENT_TIMESTAMP)";
    $result=sqlsrv_query($conn,$sql);
    if($result){
        $session['success'] = true;
        $session['message']="Work experience updated!";
        echo json_encode($session);
    }
}else{
    $session['success']=false;
    $session['message']="Something went wrong!";
    echo json_encode($session);
}

