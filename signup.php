

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
            margin-left:80px;
        }
        input {
            padding:3px 3px;
            margin: 15px 20px;
        }
        .main-wrapper {
            text-align:center;
            height:100%;
        }
        h1 {
            color: black;
        }
       
        button {
            margin-left: 12px;
            margin-right: 13px;
        }
        label {
            font-size: 17px;
            color:black;
        }
        label:nth-child(1){
            margin-left:-52px;
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
        <?php 
            if(!isset($_SESSION['userId'])) {
                echo '<li><a href="login.php" class="btn">Login</a></li>';
            }
        ?>
      </ul>
    </nav>
    <main>
        <div class="main-wrapper">
            <section class="section-default">
                <h1>Sign Up Form</h1>
                <?php 
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] === "emptyfields") {
                            echo "<p style='color:red;'>Fill in all the fields!</p>";
                        }
                        else if ($_GET['error'] === "invaliduidmail") {
                            echo "<p style='color:red;'>Invalid username and e-mail!</p>";
                        }
                        else if ($_GET['error'] === "invaliduid") {
                            echo "<p style='color:red;'>Invalid username!</p>";
                        }
                        else if ($_GET['error'] === "invalidmail") {
                            echo "<p style='color:red;' >Invalid e-mail!</p>";
                        }
                        else if ($_GET['error'] === "passwordcheck") {
                            echo "<p style='color:red;'>Your passwords do not match!</p>";
                        }
                        else if ($_GET['error'] === "usertaken") {
                            echo "<p style='color:red;'>Username already exists!</p>";
                        }
                        else if ($_GET['error'] === "mailtaken") {
                            echo "<p style='color:red;'>Email already exists!</p>";
                        }
                        
                    }
                    else  {
                        if (isset($_GET['signup'])) {
                            echo "<p id='signupmsg' style='color:green;'>Signup successful!</p>";
                            header("Location: login.php");
                        }
                    }
                ?>
                <form class="form-signup" action="config/signup.inc.php" method="POST">
                    <?php 
                        if (isset($_GET['uid']))  {
                            $username = $_GET['uid'];
                            echo '<input type="text" name="uid" placeholder="Username" value="'.$username.'"><br>';
                        }
                        else {
                            echo '<input type="text" name="uid" placeholder="Username"><br>';
                        }
                    ?>
                    <?php 
                        if (isset($_GET['mail']))  {
                            $email = $_GET['mail'];
                            echo '<input type="email" name="email" placeholder="Email" value="'.$email.'"><br>';
                        }
                        else {
                            echo '<input type="email" name="email" placeholder="Email"><br>';
                        }
                    ?>
                    <input type="password" name="password" placeholder="Password"><br>
                    <input type="password" name="cpassword" placeholder="Confirm Password"><br>
                    <button type="submit" name="signupbtn" class="btn">Sign Up</button>
                    <button type="reset" name="resetbtn" class="btn">Reset</button>
                </form>
            </section>
        </div>
    </main>
    <footer>
      <ul class="footer-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
      </ul>
      <strong><i>&copy; Copyright 2019 NTUCan</i></strong>
    </footer>
    <script src="app.js"></script>
</body>
</html>


    