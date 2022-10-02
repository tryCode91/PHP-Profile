<?php require_once $_SERVER['DOCUMENT_ROOT']."/Test/dbsqlconnection.php"; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT']."/Test/functions.php";

if(isset($_POST['dataId'])){
    $id=$_POST['dataId'];
    $sql = "DELETE FROM Persons WHERE id=$id";
    $result = sqlsrv_query($conn, $sql);
    if (!$result) {
        echo "Error in result query";
    }
}else{
    echo "Id not set";
}
?>

