<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	

	<?php
	$Role = $_SESSION['role'];
	$providerID = $_SESSION['providerID'];
	$providerCompany = $_SESSION['SPName'];


	require_once $_SERVER["DOCUMENT_ROOT"].'/rms/BusinessServiceLayer/Controller/foodController.php';

	$addFood = new foodServicesController();

	if(isset($_POST['registerFood'])){
		$foodImage = "/rms/img/Food/".basename($_FILES['foodImage']['name']);
		$addFood->addFood($foodImage);
	}
	?>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>RMS</title>

<link rel="stylesheet" href="../../asset/navbar.css">
<link rel="stylesheet" href="../../asset/main.css">

</head>
<style>
	.subHeader{
		text-align: center;
		padding-top: 30px;
		padding-bottom: 30px;
		color: black;
		margin: 0px;
	}

	#buttonLogin{
		width: 90px;
		height: 40px;
		background-color: #088A85;
		color: white;
		font-size: 15px;
		font-weight: bold;
		border: #088A85;
		border-collapse: collapse;
		border-radius: 20px;
		margin-left: 300px;
	}
</style>
<body>

<!-- NAVBAR -->
<ul>
  <li><a href="../ManageLogin/home.php">Home</a></li>
  <li><a href="providerFoodList.php">Food List</a></li>
  <li><a href="providerAddFood.php">Add Food</a></li>
  <li><a href="providerFoodOrder.php">Order</a></li>
  <li><a href="#User" style="float:right">User</a></li>
  </ul>



<!-- BACKGROUND -->
	

	

	<div style="margin: 20px; width: 90%;height: 90%;">
		<div style="width: 50%;margin-left: 410px; margin-top: 100px;">
		<center>

		<div id="container" style="white-space:nowrap">

    <div id="image" style="display:inline;">
        <img src="../../img/addFood.jpeg" height = "50px" width = "70px"/>
    </div>

    <div id="texts" style="display:inline; white-space:nowrap; font-size: 60px; font-family: Brush Script MT, Cursive; "> 
	&nbsp;Add New Food Menu
    </div>
	<div id="image" style="display:inline;">
        <img src="../../img/addFood.jpeg" height = "50px" width = "70px"/>
    </div>

</div>

			
		</center>
			
			<hr>
			<form action="" method="POST" enctype="multipart/form-data">
				<table style="width: 100%; margin-left: 150px;margin-top: 60px; margin-left: 0px;">
					<tr>
						<td colspan="2" style="color:grey;"><label style="font-weight: bold;">Food Details</label></td>
					</tr>
					<tr>
						<td><label style="font-weight: bold;">Photo</label></td>
						<td><input type="file" name="foodImage" required></td>
					</tr>
					<tr>
						<td colspan="2" style="color:#088A85;"></td>
					</tr>
					<tr>
						<td><label style="font-weight: bold;">Food Name</label></td>
						<td><input type="text" name="FName" maxlength="50" required></td>
					</tr>
					<tr>
						<td><label style="font-weight: bold;">Food Item</label></td>
						<td><input type="text" name="FDescription"  style="height: 70px;" required></td>
						
					</tr>
					<tr>
						<td><label style="font-weight: bold;">Food Price</label></td>
						<td>RM <input type="float" name="FPrice"  style="width: 90px;" required></td>
						
					</tr>
					
					<tr>
	
				<td></td>	
				<td>
				<input type="hidden" name="providerID" value="<?=$providerID;?>">
				<input type="hidden" name="proServiceType" value="<?=$providerServiceType;?>">
				<input type="submit" name="registerFood" value="Add To Menu" id="buttonLogin" style="width: 250px;margin-bottom: 25px;">
				</td>
				</tr>
				</table>
			</form>
		</div>
	</div>
	<!-- Add product Content End-->
</div>
<!-- FOOTER -->
<div class="footer">
  <div>
  <p>All Right Reserved Marverick &#8482;</p>
  </div> 
</body>
</html>