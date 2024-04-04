<?php 
include 'config.php';

if(isset($_POST['id']) && !empty($_POST['id'])){
	$id=$_POST['id'];

	$query = "SELECT * FROM music WHERE id = '$id'";
	$run = mysqli_query($conn,$query);
	while($row = mysqli_fetch_assoc($run)){	
		$result= '<table><tr><td>Name:</td><td>'.$row['mv_name'].'</td></tr><tr><td>Singer</td><td>'.$row['singer'].'</td></tr></table><audio src="music/'.$row['music'].'" controls controlsList="nodownload" style="margin: 15px 0;"></audio>';
	}
}else{
	$result="Nothing to Play";
}






echo $result;

?>