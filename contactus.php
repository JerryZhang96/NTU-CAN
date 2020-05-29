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
        color: white;
        font-weight:normal;
        font-size: 18px;
      }
      .auth {
        list-style: none;
        font-weight:bold;
      }
      .contactus{
        width: 80%;
        height: auto;
        font-size: 30px;
        border: 1px solid black;
        color: black;
        text-align:left;
      }
      h4 {
        margin-bottom: 30px;
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
        <li class="li "><a href="menu.php">Menu</a></li>
        <li class="li"><a href="feedback.php">FeedBack</a></li>
        <li class="li"><a href="aboutus.php">About Us</a></li>
        <li class="li active"><a href="contactus.php">Contact Us</a></li>
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
    <div class="contactus">
			<h4 align="center">If you have any questions, please don't hesitate to contact us!</h4>
			<table class="contact" align="center">
				<tr>
					<th>Company Name</th>
					<td>NTU CAN</td>
				</tr>
				<tr>
					<th>Address</th>
					<td>52 Nanyang Walk, 639928</td>
				</tr>
				<tr>
					<th>Service Hotline</th>
					<td>123-456-789</td>
				</tr>
				<tr>
					<th>E-mail Address</th>
					<td><a href="mailto:ntucan@gamail.com"><i>ntucan@gmail.com</i></td>
				</tr>
				<tr>
					<th>Operating Hours</th>
					<td>11am to 11pm (Monday to Saturday)</td>
			</table>
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
