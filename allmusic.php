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
    <title>Sonic View</title>
</head>
<body>
<style>
  .container{
    margin-top:100px;
    color:white;
  }
  .item{
    max-width:100%;
  }
</style>
<?php include 'header.php'?>
  <div class="container">
    <div class="games">
      <h2><b>All Music</b></h2>
      <div class="music">
        <div class="row">
          <div class="col-md-3">
            <ol>
            <p><b>Playlist</b></p>
            <?php 
              $query = "SELECT * FROM music ORDER BY id ASC";
              $run = mysqli_query($conn,$query);
              while($row = mysqli_fetch_assoc($run)){
            ?>
           
              <li><a style="cursor: pointer;" onclick="PlaySong(<?php echo $row['id'];?>)"><?php echo $row['mv_name']; ?></a></li>
            <?php } ?>
            </ol>
          </div>
          <div class="col-md-9">
          <div id="play_section">

          </div>
        </div>
        </div>
      </div>
    </div>
    
  </div>
<?php include'footer.php';?>
<script>
  function PlaySong(id){
    console.log(id);
    $.ajax({
      type: "POST",
      url: "ajax.php",
      data: "id=" + id,
      success: function(data){
        $('#play_section').html(data); 
      }
    });
  }
</script>
</body>
</html>