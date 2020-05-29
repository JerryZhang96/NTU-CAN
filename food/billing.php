<?php
	include("../config/db.inc.php");
	include("functions.php");
	if(!isset($_SESSION)) 
	{ 
		session_start(); 
	} 
    
    if (isset($_SESSION['userId'])) {
        echo "<nav>
        <div class='burger '>
          <div class='line1'></div>
          <div class='line2'></div>
          <div class='line3'></div>
        </div>
        <ul class='nav-links'>
          <li><a href='../index.php'>Home</a></li>
          <li><a href='../menu.php'>Menu</a></li>
          <li><a href='../feedback.php'>FeedBack</a></li>
          <li><a href='../aboutus.php'>About Us</a></li>
          <li><a href='../contactus.php'>Contact Us</a></li>
          <li><a href='shoppingcart.php'>Cart</a></li>
          <div class='auth'>Hi {$_SESSION['userUid']}!</div>
          <form action='../config/logout.inc.php' method='POST' >
                <button type='submit' class='btn' name='logoutbtn'>Logout</button>
            </form>
        </ul>
      </nav>";
    } 

	if(isset($_REQUEST['command']) && $_REQUEST['command']=='update'){
		$name=$_REQUEST['name'];
		$email=$_REQUEST['email'];
		$address=$_REQUEST['address'];
		$phone=$_REQUEST['phone'];

		$result=mysqli_query($conn, "INSERT INTO customers VALUES('','$name','$email','$address','$phone')");
        $customerid=mysqli_insert_id($conn);
        date_default_timezone_set('Asia/Singapore');
		$date=date('Y-m-d H:i:s');
		$result=mysqli_query($conn, "INSERT INTO orders VALUES('','$date','$customerid')");
		$orderid=mysqli_insert_id($conn);

		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=$_SESSION['cart'][$i]['qty'];
			$price=get_price($pid);
			mysqli_query($conn, "INSERT INTO order_detail VALUES ($orderid,$pid,$q,$price)");
        }
        echo '<script type="text/javascript">alert("Thank you for the purchase! A confirmation email will be sent to you soon! Click OK button to back to our Home Page :).");';
        echo 'window.location.href = "../index.php"';
        echo '</script>';
        unset($_SESSION['cart']);
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../mystyle.css">
	<title>Billing Info</title>
	<script type="text/javascript" defer>
		function validate(){
			var f=document.form1;
			f.command.value='update';
			f.submit()
	}
    </script>
    <style>
        table { 
            font-family: Verdana, Geneva, sans-serif; 
            font-size: 14px; 
            background-color: #bfbfbf;
            border: 1px solid black;
            padding: 20px 20px;
        }
        tr {
            font-weight:bold;
            font-size: 14px;
            color: black;
        }
        
        .input-field {
            padding: 3px;
        }

        .auth {
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

        h1 {
            margin-left: 50px;
            text-align: center;
            color: black;
        }

    </style>
</head>
<body>
<form name="form1" onsubmit="return validate()">
    <input type="hidden" name="command" />
	<div align="center">
        <h1 align="center">Billing Info</h1>
        <table border="0">
        	<tr><td>Order Total: </td><td style="color: #e67300;">S$ <?php echo get_order_total()?></td></tr>
            <tr><td>Your Name:</td><td><input type="text" name="name" class="input-field" size="45" required/></td></tr>
            <tr><td>Address:</td><td><input type="text" name="address" class="input-field" size="45" required/></td></tr>
            <tr><td>Email:</td><td><input type="email" name="email" class="input-field" size="45" required/></td></tr>
            <tr><td>Phone:</td><td><input type="text" name="phone" class="input-field" size="45" required/></td></tr>
            <td colspan="10" align="right">
                <input type="button" class="btn" value="Go Back" onclick="window.history.back()">
                <input type="submit" class="btn" value="Place Order" />
            </td>
        </table>
	</div>
</form>
<footer>
    <ul class="footer-links">
    <li><a href="../index.php">Home</a></li>
    <li><a href="../aboutus.php">About Us</a></li>
    <li><a href="../contactus.php">Contact Us</a></li>
    </ul>
    <strong><i>&copy; Copyright 2019 NTUCan</i></strong>
</footer>
<script src="../app.js"></script>
</body>
</html>


