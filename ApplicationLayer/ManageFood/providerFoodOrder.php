<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Manage Order</title>
   	
   	<?php
	$Role = $_SESSION['role'];
	$providerID = $_SESSION['providerID'];



	?>

<style>

	table, th, td {
  		border: 1px solid black;
  		border-collapse: collapse;
  		text-align: center;
  		background-color: ;
	}

	table tr#first {border:inset 4px solid black; color:white;  background-color:rgb(51, 63, 80);}

</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>RMS</title>

<link rel="stylesheet" href="../../asset/navbar.css">
<link rel="stylesheet" href="../../asset/main.css">

</head>

<body>

<!-- NAVBAR -->
<ul>
  <li><a href="../ManageLogin/home.php">Home</a></li>
  <li><a href="providerFoodList.php">Food List</a></li>
  <li><a href="providerAddFood.php">Add Food</a></li>
  <li><a href="providerFoodOrder.php">Order</a></li>
  <li><a href="#User" style="float:right">User</a></li>
  </ul>

<h1>Provider Food Order </h1>

<!-- BACKGROUND -->

	<?php 
			
			   
			   if(isset($_POST['update'])){
				require_once $_SERVER["DOCUMENT_ROOT"].'/rms/BusinessServiceLayer/Controller/foodController.php';
		
				$updateOrderSatus = new foodServicesController();
				$updateOrderSatus->updateManageOrder();
				header("Location:../ManageFood/spAcceptFood.php");
		
			}
		?>

<div>
</div>

	<?php
		require_once $_SERVER["DOCUMENT_ROOT"].'/rms/BusinessServiceLayer/Controller/foodController.php';

		$productdata = new foodServicesController();

		$data = $productdata->viewManageOrder($providerID);
	?>


    <div id="frm">
    	<center><h2>UPDATE ORDER</h2></center>
			<center><table style="margin-top: 20px;" width="90%">
				
				<form action="" method="POST">
				<tr id="first">
					<th style="width: 20px;">Order ID</th>
					<th>Customer Info</th>
					<th>Order Info</th>
					<th>Current Status</th>
					<th>Update Status</th>
					<th>Update Assignation</th>
					<th>Action</th>
				</tr>
				<?php
				$i=1;
				foreach ($data as $row) {
				?>
				<tr>
					<td><?=$row['Order_ID']?></td>
					<td style="text-align: left; width: 300px;">
						<label>Name: </label><?=$row['Cus_Name']?><br>
						<label>Address: </label><?=$row['Cus_Address']?><br>
						<label>Phone Number: </label><?=$row['Cus_PhoneNo']?>	
					</td>
					<td style="text-align: left; width: 300px;">
						<label>Food Description: </label><?=$row['OD_Details']?><br>
						<label>Price: </label><?=$row['OD_TotalPrice']?>			
					</td>
					<td><?=$row['ready']?></td>
					<td>
						<select name="Ready">
							<option value="Ready">Ready</option>
							<option value="Not Ready">Not Ready</option>
						</select>
					</td>
					<td>
						<select name="assignation">
							<option value="Ready">Ready</option>
							<option value="Not Ready">Not Ready</option>
						</select>
					</td>

					<td>
						<input type="hidden" name="OrderID" value="<?=$row['Order_ID']?>">
						<input type="hidden" name="TrackingID" value="<?=$row['Tracking_ID']?>">
						<br><input type="submit" name="update" value="update" id="updateButton"><br>
						<br><input type="button" onclick="location.href='providerFoodOrder.php'" value="BACK" id="backButton"><br>
					</td>
				</tr>
				<?php
			$i = $i+1;
			}
			?>
			</table></center>
		</form>
		
   		
    </div>
</body>
<!-- FOOTER -->
<div class="footer">
  <div>
  <p>All Right Reserved Marverick &#8482;</p>
  </div> 

</html>
