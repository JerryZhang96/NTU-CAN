<?php 
    session_start();
    require '../config/db.inc.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../mystyle.css">
    <title>Admin Page</title>
    <style>
        div.user {
            color: black;
            text-align:center;
        }
        input {
            padding:5px 3px;
        }
        h2, h3 {
            color: black;
        }
        h3 {
            font-weight: normal;
        }
        label {
            font-size: 17px;
            color:black;
            margin-right: 10px;
        }
        
        label:nth-child(1) {
            margin-left: 20px;
        }
        
        .btn {
            margin-left: 35px;
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
        <li><a href="../index.php">Home</a></li>
        <li><a href="../menu.php">Menu</a></li>
        <li><a href="../feedback.php">FeedBack</a></li>
        <li><a href="../aboutus.php">About Us</a></li>
        <li><a href="../contactus.php">Contact Us</a></li>
      </ul>
    </nav>
    <header>
        <div>
            <div>
                <h2>Hi <?php echo $_SESSION['user'] ?>!</h2>
                <h3>Welcome To Admin Page!</h3>     
                <h3>You have the permission to edit this page!</h3>  
                <a href="update.php"><button class="btn">Update Price of Food</button></a> 
                <a href="report.php"><button class="btn">Sales Report</button></a> 
                <a href="logout.php"><button class="btn">Logout</button></a> 
            </div>
        </div> 
    </header>
</body>
</html>