<?php
	session_start();
?>

<!DOCTYPE html>
<style>


	table {
    border-collapse:separate;
    border:solid orange 3px;
    border-radius:20px;
    -moz-border-radius:6px;
	width: 80%;
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
<html>
<head>
	


	<?php
		$Role=$_SESSION['role'];
		$CusID=$_SESSION['customerID'] ;
		$FoodID = $_GET['Food_ID'];

		require_once $_SERVER["DOCUMENT_ROOT"].'/food2/BusinessServiceLayer/Controller/foodController.php';

		require_once $_SERVER["DOCUMENT_ROOT"].'/food2/BusinessServiceLayer/Controller/Registration Controller.php';
		$viewUserData = new registrationController();
		$data = $viewUserData->viewDataCustomer($CusID);
		
		foreach ($data as $row) {
			$cusAdd=$row['Cus_Address'];
		}


		$foodDetails = new foodServicesController();
		$data = $foodDetails->foodDetails($FoodID);
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

<h1>My Order</h1>

<!-- BACKGROUND -->


	<div style="width: 60%; margin-left: 100px;">
	
		<table>
			<tr>
				<th style="width: 20px;">No</th>
				<th>Food Name</th>
				<th>Quantity</th>
				<th>Price</th>
			
			</tr>
			<?php
			foreach ($data as $row) {
			?>
			<form action="" method="POST">
			<tr>
				<td>1</td>
				<td><?=$row['food_name'];?></td>
				<td>
				<?php
						$date = date("Y-m-d"); 
						$FoodID = $row['Food_ID']; 
						$FoodName = $row['food_name']; 
						$spID = $row['ServiceP_ID']; 
						$F_Description = $row['food_details'];
					?>
				<input type="number" name="quantity" value="1" style="width: 40px;"><input type="submit" name="update" value="Add">
				
				</td>
				<td>
					<?php $totalprice = $row['food_price'];?>
					RM <?=$row['food_price'];?>
				</td>

			</tr>
			</form>
			<?php
			}

			if(isset($_POST['update'])){
				$quantity = $_POST['quantity'];
				$totalprice = $totalprice * $quantity;
			}
			else{
				$totalprice = $totalprice;
			}
			?>

			<tr>
				<td colspan="3" style="text-align: right;">Total Price</td>
				<td colspan="2">RM <?=$totalprice;?></td>
			</tr>
			
		
		<tr>
		
		<td colspan = "4">

		<div style="float: right;margin: 20px;">
			<form action="paymenturl" method="POST">
				<input type="hidden" name="cusID" value="<?=$CusID;?>">
				<input type="hidden" name="FoodID" value="<?=$FoodID;?>">
				<input type="hidden" name="spID" value="<?=$spID;?>">
				<input type="hidden" name="Quantity" value="<?=$quantity;?>">
				<input type="hidden" name="totalPrice" value="<?=$totalprice;?>">		
				<input type="hidden" name="cusAdd" value="<?=$cusAdd;?>">	
				<input type="hidden" name="F_Name" value="<?=$FoodName;?>">	
				<input type="hidden" name="F_description" value="<?=$F_Description;?>">		
				<input type="submit" name="checkoutF" value="pay">							
			</form>
		</div>
		</td>
		</tr>
		</table>
	</div>
	
	
	
	
</div>
<!-- FOOTER -->
<div class="footer">
  <div>
  <p>All Right Reserved Marverick &#8482;</p>
  </div> 

</body>
</html>