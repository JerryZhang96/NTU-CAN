<?php
  session_start();
	include("../config/db.inc.php");
	include("functions.php");

	if(isset($_REQUEST['command']) && $_REQUEST['command']=='add' && $_REQUEST['productid']>0 ){
    if(!isset($_SESSION['userUid'])) {
      echo '<script type="text/javascript">alert("Please Log In To Make An Order");';
      echo 'window.location.href = "../login.php"';
      echo '</script>';
    }
    else {
      $pid=$_REQUEST['productid'];
      addtocart($pid,1);
      header("Location: shoppingcart.php");
      exit();
    }	
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="../mystyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Select Your Food</title>
  <script type="text/javascript">
    function addtocart(pid){
      document.form1.productid.value=pid;
      document.form1.command.value='add';
      document.form1.submit();
    }
  </script>
  <style>
      body {
        font-weight:bold;
        color: black;
      }
      .auth {
        list-style: none;
        font-weight: bold;
        color:white;
        font-weight:normal;
        font-size: 18px;
        
      } 
      .responsive {
        padding: 0 6px;
        float: left;
        width: 320px;
        margin-left: 120px;
        margin-right: 5px;
      }
      .foodposter {
        text-align:center;
        padding: 5px;
        font-size: 15px;
      }
      h1 {
        margin-left: 125px;
      }
      .checked {
        color: orange;
      }
      img {
        max-height: 150px;
        max-width: 300px;
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
    <form name="form1">
        <input type="hidden" name="productid" />
        <input type="hidden" name="command" />
    </form>
    <nav>
      <div class="burger ">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
      <ul class="nav-links">
        <li class="li"><a href="../index.php">Home</a></li>
        <li class="li active"><a href="../menu.php">Menu</a></li>
        <li class="li"><a href="../feedback.php">FeedBack</a></li>
        <li class="li"><a href="../aboutus.php">About Us</a></li>
        <li class="li"><a href="../contactus.php">Contact Us</a></li>
        <li class="li"><a href="shoppingcart.php">Cart</a></li>
        <li class="li"><a href="../checkorder.php">Check Order</a></li>
      <?php 
        if (isset($_SESSION['userId'])) {
          echo "<div class='auth'>Hi {$_SESSION['userUid']}!</div>";
          echo '<form action="../config/logout.inc.php" method="POST" >
          <button type="submit" class="btn" name="logoutbtn">Logout</button>
      </form>';
      } else {
        echo '<li class="auth"><a href="../login.php" class="btn">Login</a></li>
        <li class="auth"><a href="../signup.php" class="btn">Register</a></li>';
      } 
      ?>
      </ul>
    </nav>
        <button style="margin-left: 120px;" class="btn" onclick="window.history.back()">Go Back</button>
        <h1>Korean Rice Menu</h1>
            <?php
                $result=mysqli_query($conn, "SELECT * FROM products LIMIT 41,5") or die("SELECT * FROM products"."<br/><br/>".mysqli_error($conn));
                while($row=mysqli_fetch_array($result)){
            ?>
            <div class="responsive">
                <div class="foodposter">
                    <img src="<?php echo $row['picture']?>"/>
                    <?php echo $row['pname']?>
                    <?php 
                      if($row['rating'] == 5) {
                        for ($x = 0; $x < $row['rating']; $x++) {
                          echo '<span class="fa fa-star checked"></span>';
                        }
                        for ($x = 0; $x < 5-$row['rating']; $x++) {
                          echo '<span class="fa fa-star"></span>';
                        }
                      }
                      if($row['rating'] == 4) {
                        for ($x = 0; $x < $row['rating']; $x++) {
                          echo '<span class="fa fa-star checked"></span>';
                        }
                        for ($x = 0; $x < 5-$row['rating']; $x++) {
                          echo '<span class="fa fa-star"></span>';
                        }
                      }
                      if($row['rating'] == 3) {
                        for ($x = 0; $x < $row['rating']; $x++) {
                          echo '<span class="fa fa-star checked"></span>';
                        }
                        for ($x = 0; $x < 5-$row['rating']; $x++) {
                          echo '<span class="fa fa-star"></span>';
                        }
                      }
                      if($row['rating'] == 2) {
                        for ($x = 0; $x < $row['rating']; $x++) {
                          echo '<span class="fa fa-star checked"></span>';
                        }
                        for ($x = 0; $x < 5-$row['rating']; $x++) {
                          echo '<span class="fa fa-star"></span>';
                        }
                      }
                      if($row['rating'] == 1) {
                        for ($x = 0; $x < $row['rating']; $x++) {
                          echo '<span class="fa fa-star checked"></span>';
                        }
                        for ($x = 0; $x < 5-$row['rating']; $x++) {
                          echo '<span class="fa fa-star"></span>';
                        }
                      }
                    ?><br/>
                    <?php echo $row['description']?><br />
                    <strong style="color: #f94306">
                    S$ <?php echo $row['price']?></strong>
                    <input type="button" class="btn" value="Add to Cart" id="add-to-cart" onclick="addtocart(<?php echo $row['id']?>)" />
                </div>
            </div>
            <?php } ?>
    <footer>
      <ul class="footer-links">
        <li><a href="../index.php">Home</a></li>
        <li><a href="../aboutus.php">About Us</a></li>
        <li><a href="../contactus.php">Contact Us</a></li>
      </ul>
      <strong><i>&copy; Copyright 2019 NTUCan</i></strong>
    </footer>
    <script src="../active.js"></script>
    <script src="../app.js"></script>
</body>
</html>
