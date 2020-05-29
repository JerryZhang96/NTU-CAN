<?php 
    session_start();
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
        div.user {
            color: black;
            text-align:center;
        }
        input {
            padding:5px 3px;
        }
        h1 {
            color: black;
        }
       
        label {
            font-size: 17px;
            color:black;
            margin-left: -80px;
            margin-right: 2px;
        }
        
        label:nth-child(1) {
            margin-left: -132px;
        }
        
        h5 {
            margin-top: 15px;
            font-size: 13px;
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
        <li><a href="index.php">Home</a></li>
        <li><a href="menu.php">Menu</a></li>
        <li><a href="feedback.php">FeedBack</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
        <li><a href="food/shoppingcart.php">Cart</a></li>
      </ul>
    </nav>
    <header>
        <?php  
            if (isset($_SESSION['userId'])) {
                echo "<div class='user'>Hi {$_SESSION['userUid']}!</div>";
                echo '<form action="config/logout.inc.php" method="POST" >
                <a href="menu.php"><button type="button" class="btn">Select Food</button></a>
                <button type="submit" class="btn" name="logoutbtn">Logout</button>
            </form>';
            } 
            else {
                echo '<form action="config/login.inc.php" method="POST">
                <label>Email/Username: </label>
                <input type="text" name="email" placeholder="Email/Username" required><br>
                <label>Password: </label>
                <input type="password" name="password" placeholder="Password" required><br>
                <h5>Do Not Have An Account? Sign Up Here!</h5>
                <button type="submit" class="btn" name="loginbtn">Login</button>
                <a href="signup.php"><button type="button" class="btn" name="signupbtn">Sign Up</button></a>
            </form>';
            }
        ?>
    </header> 
    <div>
        <div>
            <?php 
                if (isset($_SESSION['userId']) || isset($_SESSION['userUid'])) {
                    echo '<h1>Welcome to NTUCan</h1>';
                } 
                else {
                    echo '<h1>Please sign up to get the most updated offers and deals.</h1>';
                }

                if (isset($_GET['error'])) {
                    if ($_GET['error'] === "emptyfields") {
                        echo "<p style='color:red;'>Fill in all the fields!</p>";
                    }
                    else if ($_GET['error'] === "nouser") {
                        $msg = "Invalid username!";
                        echo "<script type=text/javascript>alert('$msg')</script>";
                    }
                    
                    else if ($_GET['error'] === "wrongpwd") {
                        $msg = "Incorrect Password!";
                        echo "<script type=text/javascript>alert('$msg')</script>";
                    } 
                }
                else  {
                    if (isset($_GET['login'])) {
                        echo "<p id='loginmsg' style='color:green';>Login successfully!</p>";
                    }
                }
            ?>
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
    <script src="app.js"></script>
    <script type=text/javascript>
    function hideMessage() {
        document.getElementById("loginmsg").style.display = "none";
    };
    setTimeout(hideMessage, 2000);
</script>
</body>
</html>








