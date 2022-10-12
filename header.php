<?php
if(!empty($_SESSION['person_id'])){
   ?>
    <nav class="navbar navbar-expand-sm navbar-dark custom-nav" style="background-color: 
    #4542f5;">
    <div class="container-fluid">
        <div class="collapse navbar-collapse w-100" id="navbarNav">
            <a class="navbar-brand" href="FE_secure.php">
            <img src="images/icon.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                Welcome <?php echo $_SESSION['name'];?> 
            </a>
        </div>
    </div>
    </nav>
    
<?php } else {
    ?>
        <nav class="navbar navbar-expand-sm navbar-dark custom-nav" style="background-color: 
        #4542f5;">
            <div class="container-fluid">
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <a class="navbar-brand" href="index.php">
                    Petrus Dughem
                    <img src="images/icon.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                    </a>
                    <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="FE_login.php">Login</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="FE_contact.php">Contact</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#">About</a>
                            </li>
                        </ul>
                </div>
            </div>
        </nav>
<?php } ?>
