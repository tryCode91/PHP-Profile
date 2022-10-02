<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'header.php';?>
    <div class="container">
        <div class="row border mt-5 bg-light col-md-8 offset-xl-2 py-5 rounded" id="dynamicValue">
            <form method="POST" action="BE_contact.php" id="contactDetails" class="row g-3">
                <div class="col-md-12 text-center">
                        <div  class="h4 text-dark mb-4">Enter details below</div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">* Name</label>
                        <input type="text" id="name" name="name" class="form-control"
                            placeholder="Please enter your name" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">* Email</label>
                        <input type="text" id="email" name="email" class="form-control"
                            placeholder="Please enter your Email" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">* Subject</label>
                        <input type="text" id="subject" name="subject" class="form-control"
                            placeholder="Please enter a Subject" required />
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="textarea">* Message</label>
                        <textarea class="form-control" id="textarea" name="textarea" rows="3" placeholder="Please write your message here."></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="submit" id="submitContact" class="btn btn-lg btn-primary btn-block" value="Send"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>