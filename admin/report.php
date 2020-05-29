<?php
  session_start();
  require '../config/db.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" type="text/css" href="../mystyle.css" />
    <title>Sales Report</title>
    <style>
        table {
            color: black;
            margin-left: 20px;
        }
        h1 {
            color: black;
            text-align:center;
        }
        input[type=submit] {
            margin-top: 25px;
        }
        body {
          color: black;
        }
        .auth {
          color: white;
        }
        td {
          font-size: 17px;
        }
    </style>
  </head>
  <body>
    <nav>
        <div class='burger '>
          <div class='line1'></div>
          <div class='line2'></div>
          <div class='line3'></div>
        </div>
        <ul class='nav-links'>
            <li><a href='../index.php'>Home</a></li>
            <li><a href='../menu.php'>Menu</a></li>
            <li><a href="../feedback.php">FeedBack</a></li>
            <li><a href='../aboutus.php'>About Us</a></li>
            <li><a href='../contactus.php'>Contact Us</a></li>
            <?php 
            if (isset($_SESSION['user'])) {
                echo "<div class='auth'>Hi {$_SESSION['user']}!</div>
                <form action='logout.php' method='POST' >
                    <button type='submit' class='btn' name='submit'>Logout</button>
                </form>";
                }
            ?>
        </ul>
    </nav>
    <h1><strong>Daily Sales Report</strong></h1>
    <header>
      <form action="total.php">
        <input class="btn" type="submit" value="" />
        <strong>Total dollar sales by products</strong>
      </form>
      <form action="sales.php">
        <input class="btn" type="submit" value="" />
        <strong>Sales quantities by product categories</strong>
      </form>
      <form action="update.php" method="post">
          <a href="adminpage.php"><button class="btn">Go Back</button></a>
      </form>
    </header>
  </body>
</html>
