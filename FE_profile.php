<?php
session_start();
if(!isset($_SESSION['person_id'])){
   header('Location: index.php');    
} else { 
    $_SESSION['userIsLoggedIn'] = true; 
    require_once $_SERVER['DOCUMENT_ROOT']."/v2Test/dbsqlconnection.php";
    $sql = "select Firstname, Lastname, Age, Email, Musictaste, Status,Language, format(Start_time, 'yyyy-MM-dd') from Persons WHERE id='".$_SESSION['person_id']."'";
    $result=sqlsrv_query($conn,$sql);
    $row = sqlsrv_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html" charset="ISO-8859-1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles.css">
    <title>Petrus</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js">
    </script>
    <script src="bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: 
    #4542f5;">
        <div class="container-fluid">
            <div class="collapse navbar-collapse w-100" id="navbarNav">
                <a class="navbar-brand" href="FE_secure.php">
                    <img src="images/icon.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                    Profile
                </a>
            </div>
        </div>
    </nav>
    <!-- sidebar -->
    <?php include 'sidebar.php';?>
    <!-- content -->
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-lg-3 border-right ">
                <div class="d-flex flex-column align-items-center p-5 py-5 ">

                       
                            <?php echo "<img width='200' class='img' height='200' style='border-radius:100px' src='$path' />"; ?>
                         
                                <span class="font-weight-bold mt-2"><?php echo $row['Firstname'];?></span>
                                <span class="text-black-50 "><?php echo $row['Email'];?></span>          
                    
                                <form method="POST" action="BE_upload.php" enctype="multipart/form-data" id="form-upload">
                            
                                    <div class="input-group ml-5 mt-3">

                                        <input id="uploadImage" type="file" accept="image/*" name="image"
                                            class="mb-2"/>
                                        <input class="btn btn-sm btn-success" type="submit" value="Upload"/>
                                    </div>
                            
                                </form>
                            </div>
                <div class="display:none" id="err"></div>
            </div>

            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-center align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>

                    <!-- Profile form -->
                    <div class="row mt-2" id="dynamicValue">
                        <form method="POST" action="BE_editCurrentPerson.php" id="profileDetails" class="row g-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="firstname">Firstname *</label>
                                    <input type="text" id="firstname" name="firstname" class="form-control"
                                        value="<?php echo $row['Firstname'];?>" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastname">Lastname *</label>
                                    <input type="text" id="lastname" name="lastname" class="form-control"
                                        value="<?php echo $row['Lastname'];?>" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input type="text" id="email" name="email" class="form-control"
                                        value="<?php echo $row['Email'];?>" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="age">Age *</label>
                                    <input type="text" id="age" name="age" class="form-control" value="<?php echo $row['Age'];?>"
                                        required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password">Password *</label>
                                    <div class="input-group" id="show_hide_password">
                                        <input type="password" id="password" name="password" class="form-control"
                                            placeholder="Enter password" required data-error="#errNm1">
                                        <div class="input-group-addon border text-align-center"
                                            style="padding: 6px; height: 38px; width: 17%;">
                                            <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="errorTxt">
                                        <span id="errNm1"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password_confirm">Confirm Password *</label>
                                    <div class="input-group" id="show_hide_password_confirm">
                                        <input type="password" id="password_confirm" name="password_confirm"
                                            class="form-control" placeholder="Confirm password" required
                                            data-error="#errNm2">
                                        <div class="input-group-addon border text-align-center"
                                            style="padding: 6px; height: 38px; width: 17%;">
                                            <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="errorTxt">
                                        <span id="errNm2"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Select Language:</label>
                                    <select id="language" name="language" value="<?php echo $row['Language'];?>" class="form-control" required>
                                        <option name="Pop">Swedish</option>
                                        <option name="Rock">English</option>
                                        <option name="Rap">Arabic</option>
                                        <option name="RandB">French</option>
                                        <option name="Classic">Mandarin</option>
                                        <option name="Classic">Hindi</option>
                                        <option name="Classic">Russian</option>
                                        <option name="Classic">Japanese</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Select Musictaste:</label>
                                    <select id="musictaste" name="musictaste" class="form-control" required value="<?php echo $row['Musictaste'];?>">
                                        <option name="Pop">Pop</option>
                                        <option name="Rock">Rock</option>
                                        <option name="Rap">Rap</option>
                                        <option name="RandB">R&B</option>
                                        <option name="Classic">Classic</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Select Status:</label>
                                    <select id="status" name="status" value="<?php echo $row['Language'];?>" class="form-control" required>
                                        <option name="1">Active</option>
                                        <option name="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 mt-4" style="top: 8px;">
                                <div class="form-group">
                                    <input type="submit" id="submitDetails" class="btn btn-primary btn-block"
                                        value="Add" />
                                </div>
                            </div>
                        </form>
                        <div class="col-md-3 mt-3 justify-content-center">
                            <div class="row">
                                <div id="errorMsg" class="alert alert-danger" role="alert"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- experience form -->
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience">
                        <span>Add Experience</span>
                            <span class="border px-3 p-1 addExp">
                                <input type="submit" style="display:none">
                                <i class="fa fa-plus"></i>&nbsp;Experience
                            </span>
                        </div>
                        <br>     
                        <form id="add-experience" action="BE_addExperience.php" method="POST">
                            <div class="col-md-12"><label class="labels"> Work</label>
                                <input type="text" id="work" name="work" class="form-control" placeholder="Ex. Designer">
                            </div>            
                            <br>
                            <div class="col-md-12"><label class="labels">Additional Details</label><input id="extra" name="extra"  type="text"
                                    class="form-control" placeholder="additional details">
                            </div>
                        </form>     
                        <div class="col-md-12 mt-3"><div class="msg"></div></div>
                    </div>
                </div>
            </div>
        </div>

    </div><!--end content-->



    </div>
    <!--sidebar end-->
    </div>

    </div>

<script src="jQuery_profile.js"></script>
<script src="jQuery.js"></script>
</body>
</html>
<?php } ?>
<!-- End if lese! -->