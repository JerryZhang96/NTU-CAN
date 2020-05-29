<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="mystyle.css" />
    <title>NTUCan</title>
    <style>
      header {
        background: center center/cover;
        background-image: url(index.jpg);
        background-repeat: no-repeat;
        background-size: 100% 100%;
        
      }
      .user{
        list-style: none;
        color: white;
        font-weight:normal;
        font-size: 18px;
      }

      .btn {
        margin-left:2px;
        font-size: 15px;
        padding: 3px;
        background: linear-gradient(to bottom, #ffb399 5%, #edddab 100%);
        font-weight: bold;
      }

      .btn:hover {
        background: linear-gradient(to bottom, #edddab 5%, #ffb399 100%);
      }

      .li {
        border-radius: 20px;
        background-color: #1a1a1a;
        padding: 0px 3px 4px 3px;
        cursor: pointer;
        font-size: 18px;
      }

      .active, .li:hover {
        background-color:#404040;
        color: white;
      }
    </style>
  </head>
  <body>
  <nav id="active-nav">
      <div class="burger ">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
      <ul class="nav-links">
        <li class="li active"><a href="index.php">Home</a></li>
        <li class="li"><a href="menu.php">Menu</a></li>
        <li class="li"><a href="feedback.php">FeedBack</a></li>
        <li class="li"><a href="aboutus.php">About Us</a></li>
        <li class="li"><a href="contactus.php">Contact Us</a></li>
        <li class="li"><a href="food/shoppingcart.php">Cart</a></li>
        <li class="li"><a href="checkorder.php">Check Order</a></li>
      <?php 
        if (isset($_SESSION['userId'])) {
          echo "<div class='user'>Hi {$_SESSION['userUid']}!</div>";
          echo '<form action="config/logout.inc.php" method="POST" >
          <button type="submit" class="btn" name="logoutbtn">Logout</button>
      </form>';
      } else {
        echo '<li><a href="login.php" class="btn">Login</a></li>
        <li><a href="signup.php" class="btn">Register</a></li>';
      } 
      
      ?>
      </ul>
    </nav>
    
    <header>
      <div>
        <h1>ARE YOU HUNGRY?</h1>
        <p>
          Why not check out our website to see what we can feed you.
        </p>
        <p>
          Delivery is completely free of charge within campus!
        </p>
        <a href="menu.php" class="btn">View Menu</a>
      </div>
    </header>
    <footer>
      <ul class="footer-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
      </ul>
      <strong><i>&copy; Copyright 2019 NTUCan</i></strong>
    </footer>
    <script src="active.js"></script>
    <script src="app.js"></script>
  </body>
</html>
