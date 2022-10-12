<div class="container-fluid">
    <div class="row">
        <div class="col-sm-auto bg-light sticky-top">
            <div class="d-flex flex-sm-column flex-row flex-nowrap bg-light align-items-center sticky-top mt-4">
                <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center align-items-center">
                    <li class="nav-item">
                        <a href="FE_secure.php" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
                            <i class="bi-house fs-1" style="font-size:30px;"></i>
                        </a>
                    </li>
                    <li>
                        <a href="FE_showChart.php" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Chart">
                            <i class="bi-bar-chart fs-1" style="font-size:30px;"></i>
                        </a>
                    </li>
                    <li>
                        <a href="table.php" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Table">
                            <i class="bi-table fs-1" style="font-size:30px;"></i>
                        </a>
                    </li>

                    <li>
                        <a href="FE_people.php" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="People">
                            <i class="bi-people fs-1" style="font-size:30px;"></i>
                        </a>
                    </li>
                </ul>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                        
                        <?php 
                            if(!isset($_SESSION['path'])){
                                $path="images/stockimage.jpg";
                            }else{
                                $path=$_SESSION['path'];
                            }
                            echo "<img width='20' height='20' style='border-radius:100px' src='".$path."' />";
                         ?>
                    </a>
                    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="FE_profile.php">Profile</a></li>
                        <li><a class="dropdown-item" href="BE_logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    <div class="col-sm  min-vh-100 inner-container"> <!-- sidebar top end -->