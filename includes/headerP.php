
<!-- Start Header Area -->
<header class="htc__header bg--white">
    <!-- Start Mainmenu Area -->
    <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-sm-4 col-md-6 order-1 order-lg-1">
                    <div class="logo">
                        <a href="../../ApplicationLayer/ManageLogin/index.php">
                           
                        </a>
                    </div>
                </div>
                
                            <ul>
                                <li><a href="../../ApplicationLayer/ManageLogin/index.php">Home</a></li>
                                <li class="dropdown"><a href="../../#">Analytic</a>
                                    <div class="dropdown-content">
                                    <a href="../../ApplicationLayer/ProvideTrackingandAnalytic/providerReport.php">Report Analytic</a>
                                    </div>
                                </li>
                                    

                                <?php 
                                if ($_SESSION['usertype'] == 1) {
                                    $id = "customer_id";
                                }
                                else if ($_SESSION['usertype'] == 2) {
                                    $id = "sp_id";
                                }
                                else if ($_SESSION['usertype'] == 3) {
                                    $id = "runner_id";
                                }

                                if(isset($_SESSION['username']))
                                {  

                                    echo '<li class="dropdown"><a>'.$_SESSION['username'].'</a>
                                    <ul>
                                    <div class="dropdown-content">
                                    <a href="../../ApplicationLayer/ManageLogin/profile.php?'.$id.'='.$_SESSION['userid'].'">Profile</a>
                                    <a href="../../ApplicationLayer/ManageLogin/login.php">Logout</a>
                                    </div>
                                    </ul>
                                    </li>';
                                    echo "</ul>";

                                } ?>

                            </ul>
                  

</div>
<!-- Mobile Menu -->
<div class="mobile-menu d-block d-lg-none"></div>
<!-- Mobile Menu -->
</div>
</div>
<!-- End Mainmenu Area -->
</header>
        <!-- End Header Area -->