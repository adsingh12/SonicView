
<?php $error_msg='';?>
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
			<?php 
	       		if(isset($_POST['submit'])){
	       			if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['pswd'])){
	       				if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['pswd'])){
	       					$fname = $_POST['fname'];
	       					$lname = $_POST['lname'];
	       					$email = $_POST['email'];
	       					$pswd = $_POST['pswd'];

	       					$sql = "INSERT INTO `user`(`fname`, `lname`, `email`, `password`) VALUES ('$fname', '$lname', '$email', '$pswd')";
	       					if ($conn->query($sql) === TRUE) {
							  $error_msg= "<p style='color:green'>New account created successfully. <a href='login.php'>Click here</a> to login.</p>";
							} else {
							  $error_msg= "Error: " . $sql . "<br>" . $conn->error;
							}

							$conn->close();
	       				}
	       			}
	       		}

	       	?>
			<h2>Create An Account</h2>
			<span><?php echo "$error_msg";?></span>
			<form method="POST">
				<div class="form-group">
	                <label for="fname">First Name:</label>
	                <input type="text" class="form-control" id="fname" placeholder="Enter your name" name="fname">
	            </div>
	            <div class="form-group">
	                <label for="lname">Last Name:</label>
	                <input type="text" class="form-control" id="lname" placeholder="Enter your name" name="lname">
	            </div>
	            <div class="form-group">
	                <label for="email">Email:</label>
	                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
	            </div>
	            <div class="form-group">
	                <label for="pwd">Password:</label>
	                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
	            </div>
	            
	            <button type="submit" name="submit" class="btn btn-success">Sign Up</button>
	        </form>
	       	



        </div>
    </div>	
<?php include"footer.php"?>
</body>
</html>