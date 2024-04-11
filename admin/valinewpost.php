<?php 
include 'header.php';

if (isset($_POST['submit'])) {
	$mv_name = $_POST['mv_name'];
	$mv_m_desc = $_POST['mv_m_desc'];
	$mv_m_tag = $_POST['mv_m_tag'];
	$mv_link1 = $_POST['mv_link1'];
	$mv_link2 = $_POST['mv_link2'];
	$mv_lang = $_POST['mv_lang'];
	$cat_id = $_POST['cat_name'];
	$genre_id = $_POST['genre_name'];
	$mv_desc = $_POST['mv_desc'];
	$mv_director = $_POST['mv_director'];
	$mv_date = date('Y-m-d', strtotime($_POST['mv_date']));
	$target = "../thumb/".basename($_FILES['img']['name']);
	$img = $_FILES['img']['name'];


	$target_dir = "../movies/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


	// Check if file already exists
	if (file_exists($target_file)) {
	  echo "Sorry, file already exists.";
	  $uploadOk = 0;
	}


	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	  echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
	  } else {
	    echo "Sorry, there was an error uploading your file.";
	  }
	}




	$query = "INSERT INTO movie (`cat_name`, `genre_name`, `mv_name`, `mv_des`, `mv_tag`, `img`, `date`, `lang`, `director`, `meta_description`, `movie`) VALUES ('$cat_name','$genre_name','$mv_name','$mv_desc','$mv_m_tag','$img','$mv_date','$mv_lang','$mv_director','$mv_m_desc', '$target_file')";

	$run = mysqli_query($con,$query);
	if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
		echo "<script>alert('Movie Successfully Added.. :)');</script>";
		
	}
	else{
		echo "<script>alert('Something Went Wrong!!.. :(');</script>";
		
	}

}

 ?>

 <!-- window.location.href='movielist.php';
 window.location.href='addmovie.php'; -->