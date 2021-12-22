<?php
session_start();

if (!isset($_SESSION['username'])) {
  $message = "You must log in first";
  header('refresh:5; url=login.php');
  echo "<script type='text/javascript'>alert('$message');
  window.location = '../ManageLogin/login.php';</script>";
}

?>

<!DOCTYPE html>
<html>
<head>
<?php include"../../includes/head.php";?>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>RMS</title>



</head>


<body>

<!-- NAVBAR -->
<?php     
      include "../../includes/header.php";    
    ?>
<center>
<h1>Food Home</h1>
</center>
<!-- BACKGROUND -->

<style>

    body{

        background-image: url("../../img/foodBackground.png");
      
    }

    </style>

<!-- CONTENT -->

<center>
<br></br><br></br><br></br><br></br><br></br>
<h1>Order Delicious Food Online</h1>
<h3>Order food online from the best restaurants near you</h3>

<form action="/rms/ApplicationLayer/ManageFood/foodList.php" method="POST">
<button class="button button2 buttonlength" type="submit" name ="food" value="Foodlist">Food List</button>
</form>

</center>

 </body>





  

	

</div>

<!-- FOOTER -->
<div class="footer">
  <div>
  <p>All Right Reserved Marverick &#8482;</p>
  </div> 
</div>

</html>
