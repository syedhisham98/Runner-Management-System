<!-- Start Header Area -->
<header class="htc__header bg--white">
         
                <div class="col-lg-2 col-sm-4 col-md-6 order-1 order-lg-1">
                    <div class="logo">
                        
                    </div>
                </div>
                
            <ul>
                            <?php
                                if ($_SESSION['usertype'] == 1 || $_SESSION['usertype'] == 2) { ?>
                                <li><a href="../../ApplicationLayer/ManageLogin/index.php">Home</a></li>
                                <li class="dropdown"><a href="../../#">Menu</a>
                                   <div class="dropdown-content">
                                        <a href="../../ApplicationLayer/ManageFood/foodHome.php">Food Service</a>
                                        <a href="../../ApplicationLayer/ManageGood/goodHome.php">Good Service</a>
                                        <a href="../../ApplicationLayer/ManageMedical/medicalHome.php">Medical Service</a>
                                        <a href="../../ApplicationLayer/ManagePetAssist/petAsistHome.php">Pet Assist Service</a>
                                    </div>
                                </li>
                                <?php
                             } ?>
                                <?php if ($_SESSION['usertype'] == 1) { ?>
                                                           
                                <li class="dropdown"><a href="#">Order</a>
                                    
                                        <div class="dropdown-content">
                                        <a href="../../ApplicationLayer/ManagePayment/payment.php">Cart Page</a>
                                        <a href="../../ApplicationLayer/ManagePayment/orderStatus.php">Order Status</a>
                                        <a href="../../ApplicationLayer/ProvideTrackingandAnalytic/cust_track.php">Order Track</a>
                                        </div>
                                
                                </li>
                            <?php 
                        } ?>

                    
                        
                <?php
                if ($_SESSION['usertype'] == 3) { ?>
                    <div class="col-lg-9 col-sm-4 col-md-2 order-3 order-lg-2">
                    <div class="main__menu__wrap">
                        <nav class="main__menu__nav d-none d-lg-block">
                            <ul class="mainmenu">
                                <li class="drop"><a href="../../ApplicationLayer/ManageLogin/index.php">Home</a></li>
                                <li class="drop"><a href="../../#">Order</a>
                                    <ul class="dropdown-content">
                                    <li><a href="../../ApplicationLayer/ProvideTrackingandAnalytic/orderlist.php">Order Delivery</a></li>
                                </ul>
                                </li>
                                    </ul>
                                </li>                                    
                                
                        </nav>

                    </div>
                </div>
                <?php
                } ?>         
              
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
                   
                
                <div class="shopping__cart">
                    <?php
                     if ($_SESSION['usertype'] == 1) {
                   echo '<a href="../../ApplicationLayer/ManagePayment/payment.php?'.$id.'='.$_SESSION['userid'].'"><i class="zmdi zmdi-shopping-basket"></i></a>'; 
               } ?>
                </div>



<!-- Mobile Menu -->
<div class="mobile-menu d-block d-lg-none"></div>
<!-- Mobile Menu -->
</div>
</div>
<!-- End Mainmenu Area -->
</header>
        <!-- End Header Area -->