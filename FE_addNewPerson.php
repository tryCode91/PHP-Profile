<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <title>Add Person</title>
</head>
<body class="form">
    <?php include 'header.php';?>
    <div class="container">
        <div class="row border mt-5 bg-light col-xl-8 offset-xl-2 py-5 rounded" id="dynamicValue">
                <form method="POST" action="BE_addNewPerson.php" id="personDetails" class="row g-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="firstname">Firstname *</label>
                            <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Please enter your firstname" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lastname">Lastname *</label>
                            <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Please enter your lastname" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="text" id="email" name="email" class="form-control" placeholder="Please enter your Email" required/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="age">Age *</label>
                            <input type="text" id="age" name="age" class="form-control" placeholder="Please enter your Age" required/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title">Select Language:</label>
                            <select id="language" name="language" class="form-control" required>
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
                            <select id="musictaste" name="musictaste" class="form-control" required>
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
                            <select id="status" name="status" class="form-control" required>
                                <option name="1">Active</option>
                                <option name="0">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 mt-4" style="top: 8px;">
                        <div class="form-group">
                            <input type="button" id="btnCancel" class="btn btn-secondary btn-block" value="Cancel"/>
                        </div>
                    </div>
                    <div class="col-md-3 mt-4" style="top: 8px;">
                        <div class="form-group">
                            <input type="submit" id="submitDetails" class="btn btn-primary btn-block" value="Add"/>
                        </div>
                    </div>
                </form>
                <div style="display:none; font-weight:bold; color:red;" class="ml-1 mt-1 errorMessage"></div>
            </div>
        </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>     
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>     
<script src="jQuery.js"></script>
</body>
</html>
