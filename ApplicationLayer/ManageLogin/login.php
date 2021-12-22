<?php 
	session_start();
	
	require_once '../../BusinessServiceLayer/libs/db.php';
	$db = mysqli_connect("localhost", "root", "", "rms");

	if (isset($_POST['login'])) {
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$password = mysqli_real_escape_string($db,$_POST['password']);
		$userType = mysqli_real_escape_string($db,$_POST['userType']);
	
		$sql = "SELECT * FROM $userType WHERE username='$username' AND password='$password'";
		$result = mysqli_query($db,$sql);
		if (!$result)
           echo(mysqli_error($db));
		if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_row($result);
            $_SESSION['message'] = "You are now logged in";
			      $_SESSION['username'] = $username;
            $_SESSION['usertype'] = $row[10];
            $_SESSION['userid'] = $row[0];
            
			header("location: ../../ApplicationLayer/ManageLogin/home.php"); 
            
           
		}else{

			$_SESSION['message'] = "Username or password combination incorrect";

		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../asset/login.css" />
    <link rel="icon" href="../../img/RMS.png"/>
    <title>RMS Sign In</title>

</head>

<body>
  
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form method="post" action="login.php" class="sign-in-form">
            <h2 class="title">Sign in</h2>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username" required/>
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" required/>
            </div>

            <div> 
              <i class="fas fa-lock"></i>
                <select name="userType" id="usertype" required>
                  <option value="">Choose User Type</option>
                  <option Value="customer">Customer</option>
                  <option value="provider">Service Provide</option>
                  <option value="runner">Runner</option>
                </select>
            </div>
            
            <input type="submit" value="Login" class="btn solid" name="login" />
            </div>
          </form>
        </div>
      </div>

      <form method="post" action="register.php">
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Welcome to Runner Management System</h3>
            <h3>New here ?</h3>
            <p>Please Sign Up for new account.</p>
            <p></p>
            <button class="btn transparent" id="sign-up-btn" action="register.php" type="submit"> 
              Sign up
            </button>
          </div>
          <img src="../../img/log.svg" class="image" alt="" />
        </div>
      </div>
    </div>
    </form>

</body>
</html>