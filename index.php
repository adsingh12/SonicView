
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css" type='text/css'>
<link rel="stylesheet" href="css/owl.theme.default.min.css" type='text/css'>
	<title>SONIC VIEW</title>
</head>
<body>
<?php include"header.php"?>

<div class="banner">
	<div class="owl-carousel owl-theme owl1">
		<div class="item">
			<img src="images/1.jpg" href="poater 1" class="owlimg">
		</div>
		<div class="item">
			<img src="images/2.jpg" href="poater 1" class="owlimg">
		</div>
		<div class="item">
			<img src="images/4.jpg" href="poater 1" class="owlimg">
		</div>
	</div>
</div>
<div class="container">

	<div class="movie">
		<p class="on">Online Streaming</p>
		<h1>Upcoming Movies</h1>
		
			<div class="owl-carousel owl-theme owl3">
			<?php 
			$sel_q = $conn->query("SELECT * FROM movie LIMIT 4");
					if($sel_q->num_rows>0){
			
					while($frow = $sel_q->fetch_assoc()){

			?>
			<div class="item">
				<a href="movie.php?id=<?php echo $frow['id']; ?>"><img src="thumb/<?php echo $frow['img'] ?>" style="max-width: 100%;"></a>
				<div class="item-wrapper">
					<p><?php echo $frow['mv_name'] ?></p>
					<p class="on"><?php echo $frow['date'] ?></p>
				</div>
			</div>
		<?php } }?>
			
			<div class="item">
				<div class="item-wrapper2">
					<a href="allmovies.php" class="btn btn-success">Show All</a>
				</div>
			</div>
		</div>
	</div>
	<div class="movie">
		<p class="on">Best Music</p>
		<h1>World Best Music</h1>
		<div class="owl-carousel owl-theme owl3">
			<?php 
			$sel_q = $conn->query("SELECT * FROM music LIMIT 6");
					if($sel_q->num_rows>0){
			
					while($frow = $sel_q->fetch_assoc()){

			?>
			<div class="item">
				<a href="allmusic.php"><img src="thumb/music/<?php echo $frow['img'] ?>" class="song_img" style="max-width: 100%;"></a>
				<div class="item-wrapper">
					<p><?php echo $frow['mv_name'] ?></p>
					<p class="on"><?php echo $frow['genre_name'] ?></p>
				</div>
			</div>
		<?php } }?>
			
			<div class="item">
				<div class="item-wrapper4">
					<a class="btn btn-success" href="allmusic.php">Show All</a>
				</div>
			</div>
		</div>
	</div>
	<div class="movie">
		<p class="on">Play Games</p>
		<h1>Best Games</h1>
		<div class="owl-carousel owl-theme owl3">
			<?php 
			$sel_q = $conn->query("SELECT * FROM games LIMIT 4");
					if($sel_q->num_rows>0){
			
					while($frow = $sel_q->fetch_assoc()){

			?>
			<div class="item">
				<a href="games.php?id=<?php echo $frow['id']; ?>"><img src="thumb/games/<?php echo $frow['img'] ?>" style="max-width: 100%;"></a>
				<div class="item-wrapper">
					<p><?php echo $frow['mv_name'] ?></p>
					<p class="on"><?php echo $frow['year'] ?></p>
				</div>
			</div>
		<?php } }?>
			
			<div class="item">
				<div class="item-wrapper3">
					<a href="allgames.php" class="btn btn-success">Show All</a>
				</div>
			</div>
		</div>
	</div>
	<div class="newsletter">
		<?php 
			if(isset($_POST['submit'])){
				$email=$_POST['email'];
				if(isset($_POST['email']) && !empty($_POST['email'])){
			$email= $_POST['email'];

			$query="INSERT INTO `newsletter`(`email`) VALUES ('$email')";
			$run = mysqli_query($conn,$query);
			if($run==true){
				echo "<script>alert('Registered for Newsletter.');</script>";
				
			}else{
				$result= "<p style='color:red'>Some error came. Contact admin.</p>";
			}	
		}
			}
		?>
		<form method='POST'>
		<input type="text" name="email" class="input-field" id="newsletter" placeholder="Enter your email">
		<input type="submit" name="submit" value="Get Started" class="btn btn-success" style="background: #000;color:#e2d703;width:24%">
		
		</form>
	</div>
</div>
<?php include"footer.php"?>
<script src="js/owl.carousel.js"></script>
<script>
	$('.owl3').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    mouseDrag:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        700:{
            items:4
        },
        
    
    }
    
});
	$('.owl1').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    mouseDrag:true,
    dots:true,
    responsive:{
        0:{
            items:1
        }
        
        
    
    }
    
});
</script>
</body>
</html>