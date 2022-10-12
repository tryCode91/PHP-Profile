<?php
session_start();
if(empty($_SESSION['person_id'])){
   header('Location: index.php');    
} else {
    $_SESSION['userIsLoggedIn'] = true;
    
    require_once $_SERVER['DOCUMENT_ROOT']."/v2Test/dbsqlconnection.php";
    $sql2= "SELECT imageID,Image,time_added FROM storeImage WHERE time_added IN (SELECT max(time_added) FROM storeImage) AND imageID = '".$_SESSION['person_id']."'";
    $result2=sqlsrv_query($conn,$sql2);
    $row2=sqlsrv_fetch_array($result2);
    if(!isset($row2['Image'])){
        $path="images/stockimage.jpg";
        $_SESSION['path']=$path;
    }else{
        $path = $row2['Image']; 
        $_SESSION['path']=$path;       
    }
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
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="styles.css">
    <title>Home</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>    
  
</head>
<body class="bg-secure">
<!-- header -->
<?php include "header.php"?>

    <!-- sidebar -->
    <?php include 'sidebar.php';?>
    <div class="container mt-5">
      <!--Section: Content-->
      <section>
        <div class="row">
          <div class="col-md-6 gx-5 mb-4">
            <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
              <img src="https://mdbootstrap.com/img/new/slides/031.jpg" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
          </div>

          <div class="col-md-6 gx-5 mb-4">
            <h4><strong>Example homepage</strong></h4>
            <p class="text-muted">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis
              consequatur eligendi quisquam doloremque vero ex debitis
              veritatis placeat unde animi laborum sapiente illo possimus,
              commodi dignissimos obcaecati illum maiores corporis.
            </p>
            <p><strong>Doloremque vero ex debitis veritatis?</strong></p>
            <p class="text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod
              itaque voluptate nesciunt laborum incidunt. Officia, quam
              consectetur. Earum eligendi aliquam illum alias, unde optio
              accusantium soluta, iusto molestiae adipisci et?
            </p>
          </div>
        </div>
      </section>
      <!--Section: Content-->

      <hr class="my-5" />

      <!--Section: Content-->
      <section class="text-center">
        <h4 class="mb-5"><strong>Facilis consequatur eligendi</strong></h4>

        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make
                  up the bulk of the card's content.
                </p>
                <a href="#!" class="btn btn-primary">Button</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="https://mdbootstrap.com/img/new/standard/nature/023.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make
                  up the bulk of the card's content.
                </p>
                <a href="#!" class="btn btn-primary">Button</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="https://mdbootstrap.com/img/new/standard/nature/111.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make
                  up the bulk of the card's content.
                </p>
                <a href="#!" class="btn btn-primary">Button</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Section: Content-->

      <hr class="my-5" />

      <!--Section: Content-->
      
    </div>
  </main>
 
            
    </div><!--sidebar end-->
</div><!---->
</div><!---->

    <?php include 'footer.php';?>

<script src="jQuery.js"></script>
</body>
</html>
<?php } ?> <!-- End if lese! -->
 