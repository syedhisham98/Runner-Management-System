<?php
session_start();
require_once '../../BusinessServiceLayer/controller/foodController.php';
require_once '../../BusinessServiceLayer/controller/cartController.php';
$food = new foodServicesController();
$cart = new cartController();
$data = $food->allFood(); 
$view_variable = 'a string here';

  if (!isset($_SESSION['username'])) {
    $message = "You must log in first";
        header('refresh:5; url=../../ApplicationLayer/ManageLogin/login.php');
        echo "<script type='text/javascript'>alert('$message');
        window.location = '../view';</script>";
  }

  if (isset($_POST ['delete'])) {
    $food->delete();
  }

  if(isset($_POST['buy'])){
    $cart->add();
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>RMS</title>
<?php include"../../includes/head.php";?>
</head>

<body>



<!-- NAVBAR -->
<?php     
      include "../../includes/header.php";    
    ?>
<center>

<img src="../../img/menu.jpeg" height = "10%" width = "30%">

</center>

<!-- BACKGROUND -->



<!-- CONTENT -->

<?php
	

	$productdata = new foodServicesController();
	$data = $productdata->allFood();


		?>
			<?php
  foreach ($data as $row) {

   ?>
   <center>
   <a href="../ManageFood/foodDetails.php?food_id=<?=$row['food_id'];?>">
   <div>
   <div style="height: 60px; width: 40%; background-color: black;text-align: center;color: white;">
     <h3 style="text-align: center;color: white;padding-top: 10px;font-size: 30px;"><?=$row['food_name'];?></h3></div>
    <div style="height: 60%;">
     <img src="<?=$row['food_image'];?>" style="width: 20%;height: 20%;margin-left: 12px; margin-top: 20px;">
    </div>
    <div style="height: 80px; width: 250px; text-align: center;color: black;">
     
     <label style="font-size: 50px;">RM <?=$row['food_price'];?></label>
    </div>
   </div></a>
   </center>
   <?php
   }
   ?>


<!-- FOOTER -->
<div class="footer">
  <div>
  <p>All Right Reserved Marverick &#8482;</p>
  </div> 
</body>
</html>