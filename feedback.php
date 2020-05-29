<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <title>NTUCan</title>
    <style>
        .user{
        list-style: none;
        color: white;
        font-weight:normal;
        font-size: 18px;
        }

        input {
            padding:3px 3px;
            margin: 15px 20px;
            height: 45px;
        }
        
        h1 {
            color: black;
            font-size: 29px;
        }

        .form-control {
            width: 600px;
            background: transparent;
            border: none;
            outline:none;
            border-bottom: 1px solid gray;
            color: black;
            font-size: 18px;
            margin-bottom: 16px;
        }

        textarea {
            font-size: 30px;
        }

        form .submit {
            background: #ff5722;
            border-color: transparent;
            color: #fff;
            font-size: 20px;
            font-weight: bold;
            letter-spacing: 2px;
            height: 50px;
            margin-top: 20px;
        }

        form .submit:hover {
            background-color: #f44336;
            cursor: pointer;
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
        <li class="li active"><a href="feedback.php">FeedBack</a></li>
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
        } 
        else {
            echo '<li><a href="login.php" class="btn">Login</a></li>
            <li><a href="signup.php" class="btn">Register</a></li>';
        } 
        ?>
      </ul>
    </nav>
    <header>
    <div class="main-wrapper">
        <section class="section-default">
            <h1>We need your feedback to serve you better!</h1>
            <form class="form-signup" action="config/feedback.inc.php" method="POST">
            <input type="text" name="name" class="form-control" placeholder="Your Name" required><br>
            <input type="email" name="email" class="form-control" placeholder="Your Email" required><br>
            <textarea id="msg" name="message" class="form-control" placeholder="Message" required></textarea><br>
            <input type="submit" name="submit" class="form-control submit" value="SEND MESSAGE">
            </form>
        </section>
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

