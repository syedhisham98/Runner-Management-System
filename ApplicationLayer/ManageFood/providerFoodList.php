<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>


	<?php
	$Role = $_SESSION['role'];
	$providerID = $_SESSION['providerID'];

	if(isset($_POST['update'])){
		require_once $_SERVER["DOCUMENT_ROOT"].'/rms/BusinessServiceLayer/Controller/foodController.php';

		$updateFood = new foodServicesController();
		$updateFood->updateFood();
	}

	if(isset($_POST['delete'])){
		require_once $_SERVER["DOCUMENT_ROOT"].'/rms/BusinessServiceLayer/Controller/foodController.php';

		$deleteFood= new foodServicesController();
		$deleteFood->deleteFood();
	}
	?>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>RMS</title>

<link rel="stylesheet" href="../../asset/navbar.css">
<link rel="stylesheet" href="../../asset/main.css">

</head>
<style>

	

table {
    border-collapse:separate;
    border:solid orange 3px;
    border-radius:20px;
    -moz-border-radius:6px;
	width: 70%;
	background: #DFDCBB;
	padding: 20px; 
}

td, th {
    border-left:solid orange 3px;
    border-top:solid orange 3px;
	padding: 20px; 
}

th {
    
    border-top: none;
}

td:first-child, th:first-child {
     border-left: none;
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

<h1>Food List</h1>

<!-- BACKGROUND -->

	<!-- Product list Content -->
	<?php
		require_once $_SERVER["DOCUMENT_ROOT"].'/rms/BusinessServiceLayer/Controller/foodController.php';

		$productdata = new foodServicesController();

		$data = $productdata->viewFoodDetails($providerID);
	?>

	<div>
	<center>
		<table id="tableJoblist" style="margin-top: 20px; margin-left: 0px">
			<tr id="tableJoblisttr">
			<center>
				<th style="width: 20px;">No</th>
				<th>Food Image</th>
				<th>Food Name</th>
				<th>Food Details</th>
				<th>Food Price</th>
				<th>Update</th>
				<th>Delete</th>
			</center>
			</tr>
			<?php
				$i=1;
				foreach ($data as $row) {
			?>
			<form action="" method="POST">
			<tr>
				<td><?=$i?></td>
				<td><img src="<?=$row['food_image']?>" style="width: 80px;height: 80px;"></td>
				<td><input type="text" name="FName" value="<?=$row['food_name']?>"></td>
				<td><textarea style="height: 50px;" name="FDescription"><?=$row['food_details']?></textarea></td>
				<td><input type="text" name="FPrice" value="<?=$row['food_price']?>"></td>
				<td>
					<input type="hidden" name="FoodID" value="<?=$row['Food_ID']?>">
					<input type="submit" name="update" value="" style="background-image: url('../../img/updateFood.png'); border:none; background-repeat:no-repeat;background-size:100% 100%; background-color:transparent;">
				</td>
				<td><input type="submit" name="delete" value="" style="background-image: url('../../img/deleteFood.png'); border:none; background-repeat:no-repeat;background-size:100% 100%; background-color:transparent;"></td>
				
			</tr>
			</form>
			<?php
			$i = $i+1;
			}
			?>
		</table>
		</center>
	</div>
<!-- FOOTER -->
<div class="footer">
  <div>
  <p>All Right Reserved Marverick &#8482;</p>
  </div> 
</body>
</html>
