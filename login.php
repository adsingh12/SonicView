<?php
$_SESSION['valid']="";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/style.css">
	<title>Sonic View</title>
</head>
<body>
<?php include"header.php"?>
<div class="helping-block"></div>
	<div class="container">	
		<div class="login-form">
			<h2>Sign In</h2>
			<form method='POST'>
	            <div class="form-group">
	                <label for="email">Email:</label>
	                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
	            </div>
	            <div class="form-group">
	                <label for="pwd">Password:</label>
	                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
	            </div>
	            
	            <button type="submit" class="btn btn-success" name="submit">Login</button>
	        </form>
	        <a href="#">Forgot Password</a> | 
	        <a href="signup.php">Create an account</a>
        </div>

        <?php
        	if(isset($_POST['submit'])){
        		if(isset($_POST['email']) && isset($_POST['pswd'])){
        			if(!empty($_POST['email']) && !empty($_POST['pswd'])){
        				$em=$_POST['email']; $pswd=$_POST['pswd'];
						$sel_q = $conn->query("SELECT * FROM user WHERE email='$em' AND password='$pswd'");
        				
        				if($sel_q->num_rows==1) {
        					$row = $sel_q->fetch_array();
        					$_SESSION['user_login_details']=$row;
        					echo "good";
							  header("Location: index.php");
							} else {
							  $error_msg= "Error: " . $sql . "<br>" . $conn->error;
							}

							$conn->close();
        			}
        		}
        	}
        ?>
    </div>	
<?php include"footer.php"?>
</body>
</html>