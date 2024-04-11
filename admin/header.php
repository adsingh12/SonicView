<?php 
include 'config.php';
include 'ft.php';
if (isset($_SESSION['admin_login_details'])) {}
	else{
		echo "<script>alert('You Are not Logged in');window.location.href='login.php';</script>";
		
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin - Cross Cinema</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<!-- nav -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Hello,<?php echo $_SESSION['admin_login_details']['fname']; ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
  <li class="nav-item">
        <a class="nav-link" href="movielist.php">Movie</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="musiclist.php">Music</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gamelist.php">Game</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="newsletter.php">Users</a>
      </li>
      
      <li class="nav-item">
        <a class="btn btn-outline-danger" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
