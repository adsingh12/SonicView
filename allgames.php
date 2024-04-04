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
<style>
  .container{
    margin-top:100px;
  }
  .games{
    color:white;

  }
  
</style>
<?php include 'header.php'?>
  <div class="container">
    <div class="games">
      <h2>PC Games</h2>
      <div class="row">
        <?php 
          $query = "SELECT * FROM games WHERE type='PC'";
          $run = mysqli_query($conn,$query);
          while($row = mysqli_fetch_assoc($run)){
        ?>
        <div class="col-md-3 item">
          <a href="games.php?id=<?php echo $row['id']; ?>"><img src="thumb/games/<?php echo $row['img']; ?>" class="game_img"></a>
          <p><?php echo $row['mv_name']; ?></p>
        </div>
        <?php } ?>
      </div>
    </div>
    <div class="games">
      <h2>Mobile Games</h2>
      <div class="row">
        <?php 
          $query = "SELECT * FROM games";
          $run = mysqli_query($conn,$query);
          while($row = mysqli_fetch_assoc($run)){
        ?>
        <div class="col-md-3">
          <a href="games.php?id=<?php echo $row['id']; ?>"><img src="thumb/games/<?php echo $row['img']; ?>" class="game_img"></a>
          <p><?php echo $row['mv_name']; ?></p>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
<?php include'footer.php';?>
</body>
</html>