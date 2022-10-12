<?php
session_start();
if(empty($_SESSION['person_id'])){
   header('Location: index.php');    
} else { $_SESSION['userIsLoggedIn'] = true?>

<?php require_once $_SERVER['DOCUMENT_ROOT']."/v2Test/BE_showPerson.php"; 
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
    <link rel="stylesheet" href="styles.css">
    <title>Persons</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
<script src="bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>    
</head>
<body>
<!-- Header -->
<?php include "header.php"?>

<!-- sidebar -->
<?php include 'sidebar.php';?>

            <!-- Page content -->
            <div class="row d-flex justify-content-center align-items-center py-4 px-5 flex-column  border bg-white">
                <div class="h3">Music and language distribution amongst registered members on this website</div>             
                <div class="row d-flex mt-5 ml-5">
                    <canvas id="musicChart" width="500" height="500"></canvas>
                    <canvas id="LanguageChart" width="500" height="500"></canvas>
                </div>
            </div>

        </div><!--sidebar end-->
    </div>
</div>
<?php include 'footer.php';?>
<script src="jQuery.js"></script>
<script type="text/javascript">
    var musicChart=<?php echo json_encode($music_arr);?>;
    var languageChart=<?php echo json_encode($lang_arr);?>;
</script>
<script src="chart.js"></script>
</body>
</html>
<?php } ?> <!-- End if lese! -->
 