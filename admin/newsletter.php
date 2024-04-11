<?php 
include 'header.php';
include 'ft.php';
 ?>

<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Registered users for newsletter</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
</div>

		
	
		
<div class="container">
  

<div class="row">
  <ul>
<?php 

$query = "SELECT * FROM newsletter";
$run = mysqli_query($conn,$query);

if ($run) {
	while ($row = mysqli_fetch_assoc($run)) {
		?>
  
   
        <li> <?php echo $row['email']; ?></li>
      
  <?php		
	}}

 ?>
</ul>
</div>
	</div>