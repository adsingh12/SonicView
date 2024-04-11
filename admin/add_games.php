<?php 
include 'header.php';
include 'ft.php';
 ?>

<div class="container">
	<div class="jumbotron">
		<form  method="post" enctype="multipart/form-data">
  <div class="form-group">
    <input type="text" name="mv_name" class="form-control" placeholder="Enter Game Name" >
  </div>
  <div class="form-group">
   
    <input type="number" name="mv_year" class="form-control" placeholder="Enter Game Launch Year" >
  </div>
  <div class="form-group">
   
    <input type="text" name="mv_size" class="form-control" placeholder="Enter Game Size" >
  </div>
  <div class="form-group">
   
    <input type="text" name="genre_name" class="form-control" placeholder="Enter Genre" >
  </div>
  <div class="form-group">
   
    <label for="type">Choose Game type:</label>

    <select name="type" id="type" class="form-control">
      <option value="pc">PC</option>
      <option value="mobile">Mobile</option>
    </select>
  </div>
  <div class="custom-file">
    <input type="file" name="fileToUpload" class="custom-file-input" id="customFile">
    <label class="custom-file-label" for="customFile">Choose file</label>
  </div>
  <div class="form-group">
   
    <input type="text" name="game" class="form-control" placeholder="Enter file name" >
  </div>
  
  <button type="submit" name="submit" class="btn btn-info btn-lg">Submit</button>
</form>
	</div>
</div>

<?php 

if (isset($_POST['submit'])) {
  $mv_name = $_POST['mv_name'];
  $mv_year = $_POST['mv_year'];
  $genre_name = $_POST['genre_name'];
  $mv_size = $_POST['mv_size'];
  $game = $_POST['game'];
  $img = $_FILES['fileToUpload']['name'];
  $type = $_POST['type'];

  $target_dir = "../thumb/games/";
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


    $conn->query("INSERT INTO `games`(`genre_name`, `mv_name`, `img`, `year`, `size`, `game`, `type`) VALUES ('$genre_name','$mv_name','$img','$mv_year','$mv_size','$game','type')");
}

 ?>
<!--responder cash security 3658882367--->
<!--  -->

 <!-- window.location.href='movielist.php';
 window.location.href='addmovie.php'; -->