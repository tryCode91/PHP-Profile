<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="styles.css">
  <title>Login</title>
</head>
<body>
  <div class="vh-auto gradient-custom">
    <div class="container py-5 h-100">
    <div id="template-bg-1">
    <div
        class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <div class="card p-4 text-light bg-dark mb-5 text-center">
            <div class="card-header">
                <h3>Sign In</h3>
            </div>
            <div class="card-body w-100">
                <form id="login-form" action="BE_login.php" method="post" name="login-form">
                    <div class="input-group form-group mt-3">
                        <div class="bg-secondary rounded-start">
                            <span class="m-3"><i
                                class="fas fa-user mt-2"></i></span>
                        </div>
                        <input type="text" class="form-control"
                            placeholder="email" name="email">
                    </div>
                    <div class="input-group form-group mt-3">
                        <div class="bg-secondary rounded-start">
                            <span class="m-3"><i class="fas fa-key mt-2"></i></span>
                        </div>
                        <input type="password" class="form-control"
                            placeholder="password" name="password">
                    </div>

                    <div class="form-group mt-3">
                        <button id="login" value="Login"
                            class="btn bg-secondary float-end text-white w-100" type="submit">Login</button>
                    </div>
                    
                </form>
			</div>
            <div class="card-footer">
                <div class="d-flex justify-content-center">
                    <div class="text-primary">Don't have an account? <a href="FE_addNewPerson.php">Register here</a></div>
                </div>
            </div>
            <div id="errorMessage" class="alert alert-warning" role="alert"></div>
        
        </div>
    </div>
</div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js" integrity="sha512-5BqtYqlWfJemW5+v+TZUs22uigI8tXeVah5S/1Z6qBLVO7gakAOtkOzUtgq6dsIo5c0NJdmGPs0H9I+2OHUHVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>
  <script src="jQueryLogin.js"></script>
</body>
</html>