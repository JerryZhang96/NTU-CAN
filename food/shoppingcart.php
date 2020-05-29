<?php 
      session_start();
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
          <li class='li'><a href='../index.php'>Home</a></li>
          <li class='li'><a href='../menu.php'>Menu</a></li>
          <li class='li'><a href='../feedback.php'>FeedBack</a></li>
          <li class='li'><a href='../aboutus.php'>About Us</a></li>
          <li class='li'><a href='../contactus.php'>Contact Us</a></li>
          <li class='li active'><a href='shoppingcart.php'>Cart</a></li>
          <li class='li'><a href='../checkorder.php'>Check Order</a></li>
          <div class='auth'>Hi {$_SESSION['userUid']}!</div>
          <form action='../config/logout.inc.php' method='POST' >
                <button type='submit' class='btn' name='logoutbtn'>Logout</button>
            </form>
        </ul>
      </nav>";
      } 
      else {
        echo "<nav>
        <div class='burger '>
          <div class='line1'></div>
          <div class='line2'></div>
          <div class='line3'></div>
        </div>
        <ul class='nav-links'>
          <li class='li'><a href='../index.php'>Home</a></li>
          <li class='li'><a href='../menu.php'>Menu</a></li>
          <li class='li'><a href='../feedback.php'>FeedBack</a></li>
          <li class='li'><a href='../aboutus.php'>About Us</a></li>
          <li class='li'><a href='../contactus.php'>Contact Us</a></li>
          <li class='li active'><a href='shoppingcart.php'>Cart</a></li>
          <li class='li'><a href='../checkorder.php'>Check Order</a></li>
          <li class='auth'><a href='../login.php' class='btn'>Login</a></li>
          <li class='auth'><a href='../signup.php' class='btn'>Register</a></li>
        </ul>
      </nav>";
      } 
              

      if(isset($_REQUEST['command']) && $_REQUEST['command']=='delete' && $_REQUEST['pid']>0){
        remove_product($_REQUEST['pid']);
        header('Location: ' . $_SERVER['PHP_SELF']);
        }
        else if(isset($_REQUEST['command']) && $_REQUEST['command']=='clear'){
            unset($_SESSION['cart']);
            header('Location: ' . $_SERVER['PHP_SELF']);

        } 
        else if(isset($_REQUEST['command']) && $_REQUEST['command']=='update'){
            $max=count($_SESSION['cart']);
            for($i=0;$i<$max;$i++){
                $pid=$_SESSION['cart'][$i]['productid'];
                $q=intval($_REQUEST['product'.$pid]);
                if($q>0 && $q<=999){
                    $_SESSION['cart'][$i]['qty']=$q;
                }
                else{
                    $msg='Some proudcts not updated!, quantity must be a number between 1 and 999';
                }
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
    <title>Shopping Cart</title>
    <script type="text/javascript" defer>
        function del(pid){
            if(confirm('Do you really mean to delete this item')){
                document.form1.pid.value=pid;
                document.form1.command.value='delete';
                document.form1.submit();
            }
        }
        function clear_cart(){
            if(confirm('This will empty your shopping cart, continue?')){
                document.form1.command.value='clear';
                document.form1.submit();
            }
        }
        function update_cart(){
            document.form1.command.value='update';
            document.form1.submit();
        }
	</script>
    <style>
        table { 
            font-family: Verdana, Geneva, sans-serif; 
            font-size: 14px; 
            background-color: #bfbfbf;
            width: 100%;
        }
        tr {
            font-weight:bold;
            font-size: 14px;
            color: black;
            padding: 50px;
        }

        .auth {
          list-style: none;
          font-weight: bold;
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

        
        h1 {
            margin-left: 50px;
            text-align: center;
            color: black;
        }

        img {
            max-height: 70px;
            max-width: 70px;
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
<form name="form1" method="post">
<input type="hidden" name="pid" />
<input type="hidden" name="command" />
	<div style="margin:0px auto; width:800px;" >
    <div style="padding-bottom:10px">
        <h1>Your Shopping Cart</h1>
    </div>
    	<table border="0" style="text-align:center;" cellpadding="10px" cellspacing="2px">
        <?php 
			if(isset($_SESSION['cart']) && (is_array($_SESSION['cart'])) && isset($_SESSION['userId'])){
                echo "<input type='button' class='btn' style='margin-bottom:10px;' value='Go To Menu Page' onclick=window.location='../menu.php'  />
            	    <tr><td>Id</td><td>Name</td><td>Item</td><td>Caterer</td><td>Price</td><td>Qty</td><td>Amount</td><td>Options</td></tr>";
				$max=count($_SESSION['cart']);
				for($i=0;$i<$max;$i++){
					$pid=$_SESSION['cart'][$i]['productid'];
					$q=$_SESSION['cart'][$i]['qty'];
                    $pname=get_product_name($pid);
                    $ppic=get_picture($pid);
                    $plocation=get_location($pid);
					if($q==0) continue;
			?>
                    <tr style="background-color:#f2f2f2; text-align:center;">
                    <td><?php echo $i+1 ?></td>
                    <td><?php echo $pname ?></td>
                    <td><img src="<?php echo $ppic?>"/></td>
                    <td><?php echo $plocation?></td>
                    <td>S$ <?php echo get_price($pid)?></td>
                    <td><input type="text" name="product<?php echo $pid?>" value="<?php echo $q?>" maxlength="5" size="1" min="1" oninput="update_cart()"/></td>
                    <td>S$ <?php echo get_price($pid)*$q?></td>
                    <td ><a href="javascript:del(<?php echo $pid?>)" style="text-decoration:none; color: red;">Remove</a></td></tr>
            <?php
				}
			?>
                <tr>
                    <td>
                        Order Total: </td><td style="color: #e67300; text-align: left;" >S$ <?php echo get_order_total()?></td>
                    </td>
                    <td colspan="100" align="right">
                        <input type="button"  name="cart" class="btn" id="clear" value="Clear Cart" onclick="clear_cart()">
                        <input type="button"  class="btn" id="checkout" value="Checkout" onclick="window.location='billing.php'">
                    </td>
                </tr>
			<?php
            }
            else if(!isset($_SESSION['userId'])) {
                echo '<script type="text/javascript">alert("Please login in order to view your cart items! Click OK button to go to Login Page :).");';
                echo 'window.location.href = "../login.php"';
                echo '</script>';
            }
			else{
                echo "<tr><td>There are no items in your shopping cart!</td></tr>
                     <input type='button' class='btn' style='margin-bottom:10px;' value='Go To Menu Page' onclick=window.location='../menu.php'  />";
			}
		?>
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
<script src="../active.js"></script>
<script src="../app.js"></script>
</body>
</html>



