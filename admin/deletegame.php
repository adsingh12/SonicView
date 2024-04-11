<?php 

include 'db.php';
include 'header.php';
include 'ft.php';

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$query = "DELETE FROM `games` WHERE id=$id";
	$run = mysqli_query($conn,$query);
	if ($run) {
		header('location:gamelist.php');
	}
	else{
		echo "<script>alert('Something went Wrong!!');window.location.href='movielist.php';</script>";
	}
}
else{
	header('location:movielist.php');
}

 ?>