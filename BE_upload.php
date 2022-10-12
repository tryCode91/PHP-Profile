<?php session_start();
require_once $_SERVER['DOCUMENT_ROOT']."/v2Test/dbsqlconnection.php";
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); 
$path = 'uploads/';
if(isset($_FILES['image']))
{
    $img = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];
    $errorimg = $_FILES["image"]["error"];
    $imgSize = $_FILES['image']['size'];
    if($errorimg === 0){
        if($imgSize > 205000){
            echo "Your file is too large";
        }else{
            // get uploaded file's extension
            $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
            // can upload same image using rand function
            $final_image = rand(1000,1000000).$img;
                // check's valid format
                if(in_array($ext, $valid_extensions)) 
                { 
                    $path = $path.strtolower($final_image); 
                    if(move_uploaded_file($tmp,$path)) 
                    {
                        $res['image']="<img src='$path' />";
    
                        $sql="insert into storeImage (imageID, Image, time_added) values('".$_SESSION['person_id']."', '".$path."', CURRENT_TIMESTAMP)";
                        $result= sqlsrv_query($conn,$sql);
                        $res['success'] = true;
                        echo json_encode($res);
                    }
                } else {
                    echo 'You cant upload files of this type';
                }
        }
    }else{
        echo "unknown error occurred!";//theres no errors 
    }
}else{
    echo "File is not valid!";//image is empty
}
?>