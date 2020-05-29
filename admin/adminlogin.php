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
    <title>Admin Auth</title>
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
       
        label {
            font-size: 17px;
            color:black;
            margin-right: 20px;
        }
        
        label:nth-child(1) {
            margin-left: 18px;
        }
        
        .btn {
            margin-left: 0px;
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
        <h2>This is Admin Page!</h2>
        <h3>Please login as an admin to gain access!</h3>
        <?php  
            if (isset($_SESSION['user'])) {
                echo "<div class='user'>Hi {$_SESSION['user']}!</div>";
                echo '<a href="adminpage.php"><button type="submit" class="btn" name="mainbtn">Main Page</button></a>
                        <form action="logout.php" method="POST" >
                        <button type="submit" class="btn" name="logoutbtn">Logout</button>
                    </form>';
            } 
            else {
                echo '<form action="loginauth.php" method="POST">
                <label>User Id: </label>
                <input type="text" name="user" placeholder="Enter Id Here" required><br>
                <label>Password: </label>
                <input type="password" name="pass" placeholder="Enter Password Here" required><br>
                <button type="submit" style="margin-left: 80px;" class="btn" name="submit">Login</button>

            </form>';
            }
        ?>
    </header>
    <script src="../app.js"></script>
    <script type=text/javascript>
    function hideMessage() {
        document.getElementById("loginmsg").style.display = "none";
    };
    setTimeout(hideMessage, 2000); 
</body>
</html>