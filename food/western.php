<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../mystyle.css" />
    <title>NTUCan</title>
    <style>
        .user{
            list-style: none;
            font-weight:normal;
            font-size: 18px;
        }
        .auth {
          list-style: none;
          font-weight:bold;
        } 
        
        div.description {
          padding: 5px;
        }
        div.best-seller {
          color: #4d4d4d;
          font-size: 13px;
        }
        .checked {
          color: orange;
        }
        h4 {
          margin-left: 28px;
          margin-right: 28px;
        }
        .arrow {
          animation: slide 1s ease-in-out infinite;
          margin-left: 6px;
          color: red;
        }
        @keyframes slide {
          0%,
          100% {
            transform: translate(0, 0);
          }

          50% {
            transform: translate(10px, 0);
          }
        }
        .responsive {
          padding: 0px 6px;
          float: left;
          width: 340px;
          margin: 8px 145px;
        }
        h1 {
          margin-left: 150px;
          color: black;
        }
        .auth {
          list-style: none;
          font-weight: bold;
          color:white;
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
        <li class="li"><a href="../index.php">Home</a></li>
        <li class="li active"><a href="../menu.php">Menu</a></li>
        <li class="li"><a href="../feedback.php">FeedBack</a></li>
        <li class="li"><a href="../aboutus.php">About Us</a></li>
        <li class="li"><a href="../contactus.php">Contact Us</a></li>
        <li class="li"><a href="shoppingcart.php">Cart</a></li>
        <li class="li"><a href="../checkorder.php">Check Order</a></li>
      <?php 
        if (isset($_SESSION['userId'])) {
          echo "<div class='user'>Hi {$_SESSION['userUid']}!</div>";
          echo '<form action="../config/logout.inc.php" method="POST" >
          <button type="submit" class="btn" name="logoutbtn">Logout</button>
      </form>';
      } else {
        echo '<li><a href="../login.php" class="btn">Login</a></li>
        <li><a href="../signup.php" class="btn">Register</a></li>';
      } 
      ?>
      </ul>
    </nav>
    <button style="margin-left: 150px;" class="btn" onclick="window.history.back()">Go Back</button>
    <h1>Western Menu</h1>
    <div class="responsive">
      <div class="foodposter">
        <a href="pizzamenu.php">
          <img
            src="img/pizzamenu.jpg"
            alt="pizzaposter"
          />
        </a>
        <div class="description">Pizza</div>
        <div class="best-seller">
          <h4>Rating: 
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <i class="fa fa-long-arrow-right arrow" aria-hidden="true"></i>
            &nbsp;&nbsp;&nbsp;North Spine Plaza
          </h4>
          <h4>Rating: 
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <i class="fa fa-long-arrow-right arrow" aria-hidden="true"></i>
            &nbsp;&nbsp;&nbsp;Hot Tomatoes
          </h4>
          <h4>Rating: 
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <i class="fa fa-long-arrow-right arrow" aria-hidden="true"></i>
            &nbsp;&nbsp;&nbsp;Pizza Hut
          </h4>
        </div>
      </div>
    </div>
    
    <div class="responsive">
      <div class="foodposter">
        <a href="burgermenu.php">
          <img
            src="img/burgermenu.jpg"
            alt="burgerposter"
          />
        </a>
        <div class="description">Burger</div>
        <div class="best-seller">
          <h4>Rating: 
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <i class="fa fa-long-arrow-right arrow" aria-hidden="true"></i>
            &nbsp;&nbsp;&nbsp;McDonald's
          </h4>
          <h4>Rating: 
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <i class="fa fa-long-arrow-right arrow" aria-hidden="true"></i>
            &nbsp;&nbsp;&nbsp;Pen & Inc
          </h4>
          <h4>Rating: 
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <i class="fa fa-long-arrow-right arrow" aria-hidden="true"></i>
            &nbsp;&nbsp;&nbsp;Canteen 1
          </h4>
        </div>
      </div>
    </div>

    <div class="responsive">
      <div class="foodposter">
        <a href="spaghettimenu.php">
          <img
            src="img/spaghettimenu.jpg"
            alt="spaghettiposter"
          />
        </a>
        <div class="description">Spaghetti</div>
        <div class="best-seller">
        <h4>Rating: 
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <i class="fa fa-long-arrow-right arrow" aria-hidden="true"></i>
            &nbsp;&nbsp;&nbsp;McDonald's
          </h4>
          <h4>Rating: 
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <i class="fa fa-long-arrow-right arrow" aria-hidden="true"></i>
            &nbsp;&nbsp;&nbsp;Pen & InC
          </h4>
          <h4>Rating: 
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <i class="fa fa-long-arrow-right arrow" aria-hidden="true"></i>
            &nbsp;&nbsp;&nbsp;Canteen 1
          </h4>
        </div>
      </div>
    </div>

    <div class="responsive">
      <div class="foodposter">
        <a href="steakmenu.php">
          <img
            src="img/steakmenu.jpg"
            alt="steakposter"
          />
        </a>
        <div class="description">Steak</div>
        <div class="best-seller">
        <h4>Rating: 
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <i class="fa fa-long-arrow-right arrow" aria-hidden="true"></i>
            &nbsp;&nbsp;&nbsp;McDonald's
          </h4>
          <h4>Rating: 
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <i class="fa fa-long-arrow-right arrow" aria-hidden="true"></i>
            &nbsp;&nbsp;&nbsp;Pen & InC
          </h4>
          <h4>Rating: 
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <i class="fa fa-long-arrow-right arrow" aria-hidden="true"></i>
            &nbsp;&nbsp;&nbsp;Canteen 1
          </h4>
        </div>
      </div>
    </div>

    <div class="responsive">
      <div class="foodposter">
        <a href="sandwichmenu.php">
          <img
            src="img/sandwichmenu.jpg"
            alt="sandwichposter"
          />
        </a>
        <div class="description">Sandwich</div>
        <div class="best-seller">
        <h4>Rating: 
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <i class="fa fa-long-arrow-right arrow" aria-hidden="true"></i>
            &nbsp;&nbsp;&nbsp;McDonald's
          </h4>
          <h4>Rating: 
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <i class="fa fa-long-arrow-right arrow" aria-hidden="true"></i>
            &nbsp;&nbsp;&nbsp;Pen & InC
          </h4>
          <h4>Rating: 
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <i class="fa fa-long-arrow-right arrow" aria-hidden="true"></i>
            &nbsp;&nbsp;&nbsp;Canteen 1
          </h4>
        </div>
      </div>
    </div>

    <div class="responsive">
      <div class="foodposter">
        <a href="chickenmenu.php">
          <img
            src="img/chickenmenu.jpg"
            alt="chickenposter"
          />
        </a>
        <div class="description">Chicken Cuisine</div>
        <div class="best-seller">
        <h4>Rating: 
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <i class="fa fa-long-arrow-right arrow" aria-hidden="true"></i>
            &nbsp;&nbsp;&nbsp;McDonald's
          </h4>
          <h4>Rating: 
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <i class="fa fa-long-arrow-right arrow" aria-hidden="true"></i>
            &nbsp;&nbsp;&nbsp;Pen & InC
          </h4>
          <h4>Rating: 
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <i class="fa fa-long-arrow-right arrow" aria-hidden="true"></i>
            &nbsp;&nbsp;&nbsp;Canteen 1
          </h4>
        </div>
      </div>
    </div>
    
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
