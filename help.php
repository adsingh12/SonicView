<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <script src="https://kit.fontawesome.com/14e35b2842.js" crossorigin="anonymous"></script>


	<link rel="stylesheet" href="css/style.css">

    <style>
		body{
			background: hsl(207, 19%, 11%);
		}
 *{
margin:0;
padding:0;
font-family:'poppins', sans-serif;
box-sizing:border-box;
}
.hero{
width:100%;
height:100vh;
background-image: linear-gradient(hsl(207, 19%, 11%),#3551b5),url(images/back.jpg);
background-position: center;
background-size: cover;
display:flex;
align-items:center;
justify-content:center;

}
form{
	width:90%;
	max-width: 600px;
}
.input-group{
	margin-bottom:30px;
	position:relative;
}
input,textarea{
	width:100%;
	padding:10px;
	outline:0;
	border:1px solid #fff;
	color:#fff;
	background:transparent;
	font-size:15px;
}
label{
	height:100%;
	position:absolute;
	left:0;
	top:0;
	padding:10px;
	color:#fff;
	cursor:text;
	transition:0.2s;
}
button{
	padding:10px 0;
	color:#fff;
	outline:none;
	background:transparent;
	border: 1px solid #fff;
	width: 100%;
	cursor:pointer;
}
input:focus~label,
input:valid~label,
textarea:focus~label,
textarea:valid~label{
	top:-35px;
	font-size:14px;

}
.row{
	display:flex;
	align-items:center;
	justify-content:space-between;
}
.row .input-group{
	flex-basis:48%;
}

    </style>
</head>
<body>
 <?php include "header.php"?>
<div class="hero">
<form onsubmit="showMessage()">
	<div class="row">
	<div class="input-group">
<input type="text" id="name" required>
<label for="name"><i class="fa-solid fa-user"></i> Your Name</label>
</div>
<div class="input-group">
<input type="text" id="number" required>
<label for="number"><i class="fas fa-phone-square-alt"></i> Phone No.</label>
</div>
</div>
	
<div class="input-group">
<input type="email" id="email" required>
<label for="email"><i class="fa-solid fa-envelope"></i> Email Id</label>
</div>
<div class="input-group">
<textarea id="message" rows="8" required></textarea>
<label for="message"><i class="fa-solid fa-comments"></i> Message</label>
</div>
<button type="submit">SUBMIT<i class="fa-solid fa-paper-plane"></i></button>
</form>
<p id="successMessage" style="display: none;">Thank you for your submission!</p>
</div>

<script>
    function showMessage() {
        document.getElementById('successMessage').style.display = 'block';
        return false; // Prevents the form from being submitted
    }
</script>
</body>
</html>

