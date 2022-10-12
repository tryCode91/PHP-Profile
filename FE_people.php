<?php
session_start();
if(empty($_SESSION['person_id'])){
   header('Location: index.php');    
} else { $_SESSION['userIsLoggedIn'] = true ?>
<?php
require_once $_SERVER['DOCUMENT_ROOT']."/v2Test/dbsqlconnection.php";
require_once $_SERVER['DOCUMENT_ROOT']."/v2Test/BE_people.php";
?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html" charset="ISO-8859-1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="people.css">
    <title>Persons</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>    
</head>
<body>
<!-- header -->
<?php include "header.php"?>
    <!-- sidebar -->
    <?php include 'sidebar.php';?>
            <!-- Page content -->
            <!-- Credits to Ritik Chauhan for card -->
            <div class="container rounded mt-5">
                <div class="row m-2">
                    <?php foreach ($res as $key => $value) {
                        echo "<div class='card m-3'>";
                        echo "<div class='overlay d-none'>";
                        echo "<small class='fa fa-close'></small>";
                        echo "<img src='".$value['Image']."'>"; 
                        echo "</div>";
                        echo "<div class='upperborder'>";
                        echo "</div>";
                        echo "<it class='fa fa-plus'></it>";
                        echo "<div class='image'>";
                        echo "<span><img id='userimage' src='".$value['Image']."'></span>";
                        echo "</div>";
                        echo "<div class='text'>";    
                        echo "<h3>".$value['Name']."</h3>";
                        echo "<p>".$value['Work_exp']."</p>";
                        echo "</div>"; 
                        echo "<div class='bottom'>";
                        echo "<div class='social'>";
                        echo            "<i class='fa fa-facebook-f'></i>";
                        echo            "<i class='fa fa-envelope-o'></i>";
                        echo            "<i class='fa fa-linkedin'></i>";
                        echo            "<i class='fa fa-dribbble'></i>";
                        echo        "</div>";
                        echo    "</div>";
                        echo "</div>";             
                    } ?>
                </div>
            </div>
        </div><!--sidebar end-->
    </div>
</div>
<script src="jQuery.js"></script>
</body>
</html>
<?php } ?> <!-- End if lese! -->
 