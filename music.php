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

<?php include 'header.php'?>

<?php 
if(isset($_GET['id']) && !empty($_GET['id'])){
  $id=$_GET['id'];
}else{
  header('location: allmusic.php');
}
?>
<?php 
  $query = "SELECT * FROM music WHERE id = '$id'";
  $run = mysqli_query($conn,$query);
  while($row = mysqli_fetch_assoc($run)){
?>
<div class="container">
  <h2 style="text-align: center;color:white;"><b><?php echo $row['mv_name'];?></b></h2>
  <div class="mv_details">
    <div class="row">
      <div class="col-md-3">
        <img src="thumb/games/<?php echo $row['img']; ?>" style="width:100%;margin-bottom: 15px;">
        <a href="games/<?php echo $row['game'];?>" download style="margin-right:15px;">Click here to download</a>
      </div>
      <div class="col-md-5">
        <table style="width:100%">
          <tr>
            <td>Desc:</td>
            <td><?php echo $row['mv_des'];?></td>
          </tr>
          <tr>
            <td>Language:</td>
            <td><?php echo $row['lang'];?></td>
          </tr>
          <tr>
            <td>Category: </td>
            <td><?php echo $row['cat_name'];?></td>
          </tr>
          <tr>
            <td>Genre: </td>
            <td><?php echo $row['genre_name'];?></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
<?php } ?>
</div>
<?php include'footer.php'; ?>
</body>
</html>