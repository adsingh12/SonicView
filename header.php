<?php include"config.php";?>
<style>
    .menu{
    display: flex;
    justify-content: space-around;
    align-items: center;
    background: #171d21;
}
.nav>li>a:focus, .nav>li>a:hover {
    text-decoration: none;
    background-color: transparent;
}

.nav a:hover {
    background: transparent;
    color: #e2d703;
}
.logo a:focus, a:hover {
    color: white;
    text-decoration: none;
}
</style>
    <header>
        <div class="menu fixed-top">
            <a href="index.php" class="logo">SONIC-VIEW</a>
            <ul class="nav">
                <li><a href="index.php">HOME</a></li>
                <li><a href="allmovies.php">MOVIES</a></li>
                <li><a href="allmusic.php">MUSIC</a></li>
                <li><a href="allgames.php">GAMES</a></li>
            </ul>
            <div class="action">
                

    <?php
    if(isset($_SESSION['user_login_details'])){
      echo '<a class="dropdown-toggle" style="color:white;" data-toggle="dropdown" href="#">'.ucwords(strtolower($_SESSION['user_login_details']['fname'])).'
            <ul class="dropdown-menu">
              <li><a>'.$_SESSION['user_login_details']['subscription'].' User</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>';
          }else{
            echo '<a href="login.php" class="btn btn-success btn2">Login</a>';
          }
    ?>

                
            </div>
        </div>
    </header>

