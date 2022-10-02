<?php require_once $_SERVER['DOCUMENT_ROOT']."/Test/BE_showPerson.php";?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html" charset="ISO-8859-1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link rel="stylesheet" href="styles.css">
    <title>Persons</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>    
</head>
<body class="bg-light">
<?php include "header.php"?>
    <div class="container mt-5 mb-5">
        <div class="row mb-2 mt-4 mr-1 float-right">
            <button class="btn mb-2 text-dark buttonADD" style="background-color: #f39245;">Add Person</button>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover custom-table">
                <thead class="thead-dark">
                    <tr class="bg-dark text-light">  
                        <th>Name</th>
                        <th>Age</th>
                        <th>Language</th>
                        <th>Active</th>
                        <th>Musictaste</th>
                        <th>Email</th>
                        <th>Start Date</th>
                        <th>Change</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($result_arr as $x => $x_value) {
                            if ($x_value['Status'] == "1") {
                                $x_value['Status'] = "Yes";
                            } else if ($x_value['Status'] == "0") {
                                $x_value['Status'] = "No";
                            }
                    ?>
                        <tr data-id="<?php echo $x_value['ID'];?>">
                            <td style="width:12.5%"><?php echo $x_value['Name']; ?></td>
                            <td style="width:12.5%"><?php echo $x_value['Age'];?></td>
                            <td style="width:12.5%"><?php echo $x_value['Language'];?></td>
                            <td style="width:12.5%"><?php echo $x_value['Status'];?></td>
                            <td style="width:12.5%"><?php echo $x_value['Musictaste'];?></td>              
                            <td style="width:16.5%"><?php echo $x_value['Email']; ?></td>
                            <td style="width:12.5%"><?php echo $x_value['Start_time']; ?></td>
                            <td style="width:8.5%">
                                <button type="button" data-toggle="modal" data-target="#showModal" data-id="<?php echo $x_value['ID'];?>" class="btn btn-danger text-dark delete btn-delete">Del</button>
                                
                                <div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="ModalLabel">Confirm</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete this person?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button"  class="btn modalDelete" style="background-color: #e1a356">Confirm</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </td>               
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="row d-flex mt-5 ml-5">
            <canvas id="musicChart" width="500" height="500"></canvas>
            <canvas id="LanguageChart" width="500" height="500"></canvas>
        </div>
    </div>
<script src="jQuery.js"></script>
<script type="text/javascript">
    var musicChart=<?php echo json_encode($music_arr);?>;
    var languageChart=<?php echo json_encode($lang_arr);?>;
</script>
<script src="chart.js"></script>
</body>
</html>