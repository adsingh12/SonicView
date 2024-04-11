<?php 
include 'header.php';
include 'ft.php';
 ?>

<div class="container">
	<div class="jumbotron">
		<form  method="post" enctype="multipart/form-data">
  <div class="form-group">
    <input type="text" name="mv_name" class="form-control" placeholder="Enter Movie Name" >
  </div>
  <div class="form-group">
   
    <input type="text" name="mv_lang" class="form-control" placeholder="Enter Movie Language" >
  </div>
  <div class="form-group">
   
    <input type="text" name="mv_director" class="form-control" placeholder="Enter Movie Director" >
  </div>
  <div class="form-group">
   
    <input type="text" name="cat_name" class="form-control" placeholder="Enter Category" >
  </div>
  <div class="form-group">
   
    <input type="text" name="genre_name" class="form-control" placeholder="Enter Genre" >
  </div>
  <div class="custom-file">
    <input type="file" name="fileToUpload" class="custom-file-input" id="customFile">
    <label class="custom-file-label" for="customFile">Choose file</label>
  </div>
  <div class="form-group">
   
    <input type="text" name="movie" class="form-control" placeholder="Enter file name" >
  </div>
  <br>
  <br>
  <br>
  <div class="form-group">
   <textarea type="text" name="mv_desc" class="form-control" placeholder="Enter Movie description" rows="4"></textarea>
    
  </div>


  <button type="submit" name="submit" class="btn btn-info btn-lg">Submit</button>
</form>
	</div>
</div>

<?php 

if (isset($_POST['submit'])) {
  $mv_name = $_POST['mv_name'];
  $mv_lang = $_POST['mv_lang'];
  $cat_name = $_POST['cat_name'];
  $genre_name = $_POST['genre_name'];
  $mv_desc = $_POST['mv_desc'];
  $mv_director = $_POST['mv_director'];
  $movie = $_POST['movie'];
  $img = $_FILES['fileToUpload']['name'];


  $target_dir = "../thumb/";
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

  $query = "INSERT INTO `movie`(`cat_name`, `genre_name`, `mv_name`, `mv_des`,  `img`,  `lang`, `director`, `movie`) VALUES ('$cat_name','$genre_name','$mv_name','$mv_desc','$img','mv_lang','$mv_director','$movie')";

    $conn->query($query);
  

}

 ?>

 <!-- window.location.href='movielist.php';
 window.location.href='addmovie.php'; -->