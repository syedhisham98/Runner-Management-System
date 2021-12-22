<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"].'/rms/BusinessServiceLayer/Controller/foodController.php';
?>

<!DOCTYPE html>
<style>



#tableProductDetails {
		width: 70%;
		height: 400px;
		border-collapse: collapse;
		margin-left: 250px;
		
	}

	#tableProductDetails th{
		width: 50%;
		border-collapse: collapse;
		background-color: grey;
	}

	#buttonOrder {
		background-color: black;
		color: white;
		width: 300px;
		height: 100px;
		
	}

	#buttonOrder:hover {
		background-color: grey;
		border: 1px solid grey;
		cursor: pointer;
}
	#buttonPaid {
		background-color: red;
		color: white;
		width: 150px;
		height: 30px;
		border: 1px solid red;
		border-radius: 20px;
	}

</style>
<html>
<head>
	
	<?php
	$Role=$_SESSION['role'];
	$Food_ID = $_GET['food_id'];



	$foodDetails = new foodServicesController();
	$data = $foodDetails->viewFood($food_id);
	?>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>RMS</title>

<link rel="stylesheet" href="../../asset/navbar.css">
<link rel="stylesheet" href="../../asset/main.css">

</head>
<body>
<!-- NAVBAR -->
<ul>
  <li><a href="../ManageLogin/Home.php">Home</a></li>
  <li><a href="#Services">Services</a></li>
  <li><a href="#Order">Order</a></li>
  <li><a href="#About">About</a></li>
  <li><a href="#User" style="float:right">User</a></li>
  </ul>

  <style>

    body{

        background-image: url("../../img/foodBackground.png");
      
    }

    </style>

<h1>Food Description</h1>

	<div style="margin: 50px;float: center; background-color: white;">
		<table id="tableProductDetails">
			<?php
			foreach ($data as $row) {
			?>

			<tr>
			<th rowspan ="4"><img src="<?=$row['food_image'];?>" style="width: 80%;height: 80%;"></th>
			
			</tr>
		
			<tr>
				<td><p style="font-size: 30px;">&emsp;<?=$row['food_name'];?></p></td>
				
			</tr>
			<tr>
				<td><p style="font-size: 30px;">&emsp;RM <?=$row['food_price'];?></p></td>
				
			</tr>
			<tr>
			<td>
			<div style="float: left;padding: 40px;margin-right: 200px;">
			<input type="button" name="order" value="BUY" id="buttonOrder" onclick="location.href='/rms/ApplicationLayer/ManageFood/foodCart.php?Food_ID=<?=$row['Food_ID'];?>'">
			</div>
			</td>
			
			</tr>
			<tr>
			<td colspan ="2"><p style="font-size: 30px;">&emsp;Food Description</p></td>
			
			</tr>
			<tr>
			<br><br>
				<td colspan ="2"><p style="font-size: 30px;">&emsp;<?=$row['food_details'];?></p></td>
				
			</tr>
			<?php
			}
			?>
		</table>
	</div>

	

	
</body>
<!-- FOOTER -->
<div class="footer">
  <div>
  <p>All Right Reserved Marverick &#8482;</p>
  </div> 
</html>