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
        .user{
          list-style: none;
          font-weight:normal;
          font-size: 18px;
        }

        h1 {
          margin-left: 120px;
          color: black;
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
    <nav>
      <div class="burger ">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
      <ul class="nav-links">
        <li class="li"><a href="index.php">Home</a></li>
        <li class="li active"><a href="menu.php">Menu</a></li>
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
    <h1>Menu</h1>
    <div class="main-wrapper">
      <div class="responsive">
        <div class="foodposter">
          <a href="food/chinese.php">
            <img
              src="image/chineseposter.jpg"
              alt="chineseposter"
              width="1000"
              height="600"
            />
          </a>
          <div class="description">Chinese Food</div>
        </div>
      </div>
      <div class="responsive">
        <div class="foodposter">
          <a href="food/western.php">
            <img
              src="image/westernposter.jpg"
              alt="westernposter"
              width="600"
              height="400"
            />
          </a>
          <div class="description">Western Food</div>
        </div>
      </div>
      <div class="responsive">
        <div class="foodposter">
          <a href="food/japanese.php">
            <img
              src="image/japaneseposter.jpg"
              alt="japaneseposter"
              width="600"
              height="400"
            />
          </a>
          <div class="description">Japanese Food</div>
        </div>
      </div>
      <div class="responsive">
        <div class="foodposter">
          <a href="food/korean.php">
            <img
              src="image/koreanposter.jpg"
              alt="koreanposter"
              width="600"
              height="400"
            />
          </a>
          <div class="description">Korean Food</div>
        </div>
      </div>
      <div class="responsive">
        <div class="foodposter">
          <a href="food/indian.php">
            <img
              src="image/indianposter.jpg"
              alt="indianposter"
              width="600"
              height="400"
            />
          </a>
          <div class="description">Indian Food</div>
        </div>
      </div>
      <div class="responsive">
        <div class="foodposter">
          <a href="food/drinkanddessert.php">
            <img
              src="image/drinksposter.jpg"
              alt="drinksposter"
              width="600"
              height="400"
            />
          </a>
          <div class="description">Drinks & Desserts</div>
        </div>
      </div>
    </div>
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
