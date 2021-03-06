<?php
    session_start();
    @$db = new mysqli('localhost','root','','ntucanweb');
    if ($db->connect_error){
        echo "Database is not online"; 
        exit();
        }
    if (!$db->select_db ("ntucanweb"))
        exit("<p>Unable to locate the ntucanweb database</p>");
    

    $sql = "SELECT * FROM customers 
            LEFT JOIN orders ON customers.id = orders.customerid 
            LEFT JOIN order_detail ON orders.id = order_detail.orderid 
            LEFT JOIN products ON order_detail.productid = products.id "
            ;
    
    $result = $db->query($sql);
	$num_result = $result->num_rows;
    for($i=0;$i<$num_result;$i++) {
        $row=$result->fetch_assoc();
        $username[$i]=$row['name'];
        $dateorder[$i]=$row['date'];
        $pname[$i]=$row['pname'];
        $plocation[$i]=$row['description'];
        $ppic[$i]=$row['picture'];
        $price[$i]=$row['price'];
        $qty[$i]=$row['quantity'];
        // $maxprice=array();
        // array_push($maxprice, ($price[$i]*$qty[$i]));
        // $max=max($maxprice);

    }

    $db->close();

?>

    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../mystyle.css">
    <title>Update Product Price</title>
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
<div style="margin:0px auto; width:800px;" >
    <div style="padding-bottom:10px">
        <h1>Total Sales</h1>
    </div>
        <table border="0" style="text-align:center;" cellpadding="10px" cellspacing="2px">
        <?php
            if(isset($username[0])){
                echo '<p style="color: black; font-size: 18px;">Dear '.$username[0].', <strong>Highest Dollar Sales Food</strong> are shown below: </p>';
                echo '<tr><td>Order Time</td><td>Name</td><td>Item</td><td>Caterer</td><td>Price</td><td>Qty</td><td>Amount</td></tr>'; 
                for($i=0;$i<$num_result;$i++){

                    echo '<tr style="background-color:#f2f2f2; text-align:center;">
                    <td> '.$dateorder[$i].'</td>
                    <td> '.$pname[$i].'</td>
                    <td><img src=" ../food/'.$ppic[$i].'"></td>
                    <td> '.$plocation[$i].'</td>
                    <td>S$  '.$price[$i].'</td>
                    <td> '.$qty[$i].'</td>
                    <td>S$  '.$price[$i]*$qty[$i].'</td>';
                    
                    }
                $sum=0;
                $max=$price[0]*(int)$qty[0];
                for($i=1;$i<$num_result;$i++) {
                    // $maxprice=array();
                    // array_push($maxprice, $price[$i]*$qty[$i]);
                    // $msg=$pname[$i];
                    // print_r($maxprice);
                    // print_r($msg);
                    $sum=$price[$i]*(int)$qty[$i];
                    if($max<$sum) {
                        $max=$price[$i]*(int)$qty[$i];
                        $msg=$pname[$i];
                    } 
                    else {
                        $max=$price[0]*(int)$qty[0];
                        $msg=$pname[0];
                    }
                } 
                
                ?>     
            <tr>
                <td>
                    Maximum Sales: </td><td style="color: #e67300; text-align: left;" >S$ <?php echo $max;?></td>
                    <td><?php echo $msg ;?> has the highest sales by dollars!</td>
                </td></tr>
                <br><button style="margin-bottom: 15px;" class="btn" onclick="window.location.href='report.php'">Back to Report Page</button>
            
            <?php 
            }
            else{
                echo '<p style="color: black; font-size: 18px;">We could not find any purchase history. Go to order now!</p>';
                echo '<br><button style="margin-bottom: 15px;" class="btn" onclick=window.location.href="report.php">Back to Home Page</button>';
            }
        ?>
        </table>
    </div>
</body>
</html>
