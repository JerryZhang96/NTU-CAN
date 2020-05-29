<?php
        session_start();

        require '../config/db.inc.php';

        if(isset($_POST['submitbtn']) && isset($_SESSION['user'])) {
            
            if(isset($_POST['newfood1'])) {
                $newfood1 = $_POST['newfood1'];
                $query = "UPDATE `products` SET `price` = '".$newfood1."' WHERE id=1";
                $result = $conn->query($query); 
            } 
            if(isset($_POST['newfood2'])) {
                $newfood2 = $_POST['newfood2'];
                $query = "UPDATE `products` SET `price` = '".$newfood2."' WHERE id=2";
                $result = $conn->query($query);
            } 
            
            if(isset($_POST['newfood3'])) {
                $newfood3 = $_POST['newfood3'];
                $query = "UPDATE `products` SET `price` = '".$newfood3."' WHERE id=3";
                $result = $conn->query($query);	
            }
            if(isset($_POST['newfood4'])) {
                $newfood4 = $_POST['newfood4'];
                $query = "UPDATE `products` SET `price` = '".$newfood4."' WHERE id=4";
                $result = $conn->query($query);	
            }
            if(isset($_POST['newfood5'])) {
                $newfood5 = $_POST['newfood5'];
                $query = "UPDATE `products` SET `price` = '".$newfood5."' WHERE id=5";
                $result = $conn->query($query);	
            
            }
            if(isset($_POST['newfood6'])) {
                $newfood6 = $_POST['newfood6'];
                $query = "UPDATE `products` SET `price` = '".$newfood6."' WHERE id=6";
                $result = $conn->query($query);	

            }
            if(isset($_POST['newfood7'])) {
                $newfood7 = $_POST['newfood7'];
                $query = "UPDATE `products` SET `price` = '".$newfood7."' WHERE id=7";
                $result = $conn->query($query);	

            }
            if(isset($_POST['newfood8'])) {
                $newfood8 = $_POST['newfood8'];
                $query = "UPDATE `products` SET `price` = '".$newfood8."' WHERE id=8";
                $result = $conn->query($query);	

            }
            if(isset($_POST['newfood9'])) {
                $newfood9 = $_POST['newfood9'];
                $query = "UPDATE `products` SET `price` = '".$newfood9."' WHERE id=9";
                $result = $conn->query($query);	

            }
            if(isset($_POST['newfood10'])) {
                $newfood10 = $_POST['newfood10'];
                $query = "UPDATE `products` SET `price` = '".$newfood10."' WHERE id=10";
                $result = $conn->query($query);	

            }
            if(isset($_POST['newfood11'])) {
                $newfood11 = $_POST['newfood11'];
                $query = "UPDATE `products` SET `price` = '".$newfood11."' WHERE id=11";
                $result = $conn->query($query); 
            } 
            if(isset($_POST['newfood12'])) {
                $newfood12 = $_POST['newfood12'];
                $query = "UPDATE `products` SET `price` = '".$newfood12."' WHERE id=12";
                $result = $conn->query($query);
            } 
            
            if(isset($_POST['newfood13'])) {
                $newfood13 = $_POST['newfood13'];
                $query = "UPDATE `products` SET `price` = '".$newfood13."' WHERE id=13";
                $result = $conn->query($query);	
            }
            if(isset($_POST['newfood14'])) {
                $newfood14 = $_POST['newfood14'];
                $query = "UPDATE `products` SET `price` = '".$newfood14."' WHERE id=14";
                $result = $conn->query($query);	
            }
            if(isset($_POST['newfood15'])) {
                $newfood15 = $_POST['newfood15'];
                $query = "UPDATE `products` SET `price` = '".$newfood15."' WHERE id=15";
                $result = $conn->query($query);	
            
            }
            if(isset($_POST['newfood16'])) {
                $newfood16 = $_POST['newfood16'];
                $query = "UPDATE `products` SET `price` = '".$newfood16."' WHERE id=16";
                $result = $conn->query($query);	

            }
            if(isset($_POST['newfood17'])) {
                $newfood17 = $_POST['newfood17'];
                $query = "UPDATE `products` SET `price` = '".$newfood17."' WHERE id=17";
                $result = $conn->query($query);	

            }
            if(isset($_POST['newfood18'])) {
                $newfood18 = $_POST['newfood18'];
                $query = "UPDATE `products` SET `price` = '".$newfood18."' WHERE id=18";
                $result = $conn->query($query);	

            }
            if(isset($_POST['newfood19'])) {
                $newfood19 = $_POST['newfood19'];
                $query = "UPDATE `products` SET `price` = '".$newfood19."' WHERE id=19";
                $result = $conn->query($query);	

            }
            if(isset($_POST['newfood20'])) {
                $newfood20 = $_POST['newfood20'];
                $query = "UPDATE `products` SET `price` = '".$newfood20."' WHERE id=20";
                $result = $conn->query($query);	

            }
            if(isset($_POST['newfood21'])) {
                $newfood21 = $_POST['newfood21'];
                $query = "UPDATE `products` SET `price` = '".$newfood21."' WHERE id=21";
                $result = $conn->query($query); 
            } 
            if(isset($_POST['newfood22'])) {
                $newfood22 = $_POST['newfood22'];
                $query = "UPDATE `products` SET `price` = '".$newfood22."' WHERE id=22";
                $result = $conn->query($query);
            } 
            
            if(isset($_POST['newfood23'])) {
                $newfood23 = $_POST['newfood23'];
                $query = "UPDATE `products` SET `price` = '".$newfood23."' WHERE id=23";
                $result = $conn->query($query);	
            }
            if(isset($_POST['newfood24'])) {
                $newfood24 = $_POST['newfood24'];
                $query = "UPDATE `products` SET `price` = '".$newfood24."' WHERE id=24";
                $result = $conn->query($query);	
            }
            if(isset($_POST['newfood25'])) {
                $newfood25 = $_POST['newfood25'];
                $query = "UPDATE `products` SET `price` = '".$newfood25."' WHERE id=25";
                $result = $conn->query($query);	
            
            }
            if(isset($_POST['newfood26'])) {
                $newfood26 = $_POST['newfood26'];
                $query = "UPDATE `products` SET `price` = '".$newfood26."' WHERE id=26";
                $result = $conn->query($query);	

            }
            if(isset($_POST['newfood27'])) {
                $newfood27 = $_POST['newfood27'];
                $query = "UPDATE `products` SET `price` = '".$newfood27."' WHERE id=27";
                $result = $conn->query($query);	

            }
            if(isset($_POST['newfood28'])) {
                $newfood28 = $_POST['newfood28'];
                $query = "UPDATE `products` SET `price` = '".$newfood28."' WHERE id=28";
                $result = $conn->query($query);	

            }
            if(isset($_POST['newfood29'])) {
                $newfood29 = $_POST['newfood29'];
                $query = "UPDATE `products` SET `price` = '".$newfood29."' WHERE id=29";
                $result = $conn->query($query);	

            }
            if(isset($_POST['newfood30'])) {
                $newfood30 = $_POST['newfood30'];
                $query = "UPDATE `products` SET `price` = '".$newfood30."' WHERE id=30";
                $result = $conn->query($query);	

            }
            if(isset($_POST['newfood31'])) {
                $newfood31 = $_POST['newfood31'];
                $query = "UPDATE `products` SET `price` = '".$newfood31."' WHERE id=31";
                $result = $conn->query($query); 
            } 
            if(isset($_POST['newfood32'])) {
                $newfood32 = $_POST['newfood32'];
                $query = "UPDATE `products` SET `price` = '".$newfood32."' WHERE id=32";
                $result = $conn->query($query);
            } 
            
            if(isset($_POST['newfood33'])) {
                $newfood33 = $_POST['newfood33'];
                $query = "UPDATE `products` SET `price` = '".$newfood33."' WHERE id=33";
                $result = $conn->query($query);	
            }
            if(isset($_POST['newfood34'])) {
                $newfood34 = $_POST['newfood34'];
                $query = "UPDATE `products` SET `price` = '".$newfood34."' WHERE id=34";
                $result = $conn->query($query);	
            }
            if(isset($_POST['newfood35'])) {
                $newfood35 = $_POST['newfood35'];
                $query = "UPDATE `products` SET `price` = '".$newfood35."' WHERE id=35";
                $result = $conn->query($query);	
            
            }
            if(isset($_POST['newfood36'])) {
                $newfood36 = $_POST['newfood36'];
                $query = "UPDATE `products` SET `price` = '".$newfood36."' WHERE id=36";
                $result = $conn->query($query);	

            }
            if(isset($_POST['newfood37'])) {
                $newfood7 = $_POST['newfood37'];
                $query = "UPDATE `products` SET `price` = '".$newfood37."' WHERE id=37";
                $result = $conn->query($query);	

            }
            if(isset($_POST['newfood38'])) {
                $newfood38 = $_POST['newfood38'];
                $query = "UPDATE `products` SET `price` = '".$newfood38."' WHERE id=38";
                $result = $conn->query($query);	

            }
            if(isset($_POST['newfood39'])) {
                $newfood39 = $_POST['newfood39'];
                $query = "UPDATE `products` SET `price` = '".$newfood39."' WHERE id=39";
                $result = $conn->query($query);	

            }
            if(isset($_POST['newfood40'])) {
                $newfood40 = $_POST['newfood40'];
                $query = "UPDATE `products` SET `price` = '".$newfood40."' WHERE id=40";
                $result = $conn->query($query);	

            }
            if(isset($_POST['newfood41'])) {
                $newfood41 = $_POST['newfood41'];
                $query = "UPDATE `products` SET `price` = '".$newfood41."' WHERE id=41";
                $result = $conn->query($query); 
            } 
            if(isset($_POST['newfood42'])) {
                $newfood42 = $_POST['newfood42'];
                $query = "UPDATE `products` SET `price` = '".$newfood42."' WHERE id=42";
                $result = $conn->query($query);
            } 
            
            if(isset($_POST['newfood43'])) {
                $newfood43 = $_POST['newfood43'];
                $query = "UPDATE `products` SET `price` = '".$newfood43."' WHERE id=43";
                $result = $conn->query($query);	
            }
            if(isset($_POST['newfood44'])) {
                $newfood44 = $_POST['newfood44'];
                $query = "UPDATE `products` SET `price` = '".$newfood44."' WHERE id=44";
                $result = $conn->query($query);	
            }
            if(isset($_POST['newfood45'])) {
                $newfood45 = $_POST['newfood45'];
                $query = "UPDATE `products` SET `price` = '".$newfood45."' WHERE id=45";
                $result = $conn->query($query);	
            
            }
            if(isset($_POST['newfood46'])) {
                $newfood46 = $_POST['newfood46'];
                $query = "UPDATE `products` SET `price` = '".$newfood46."' WHERE id=46";
                $result = $conn->query($query);	

            }
            if(isset($_POST['newfood47'])) {
                $newfood47 = $_POST['newfood47'];
                $query = "UPDATE `products` SET `price` = '".$newfood47."' WHERE id=47";
                $result = $conn->query($query);	

            }
            if(isset($_POST['newfood48'])) {
                $newfood48 = $_POST['newfood48'];
                $query = "UPDATE `products` SET `price` = '".$newfood48."' WHERE id=48";
                $result = $conn->query($query);	

            }
            if(isset($_POST['newfood49'])) {
                $newfood49 = $_POST['newfood49'];
                $query = "UPDATE `products` SET `price` = '".$newfood49."' WHERE id=49";
                $result = $conn->query($query);	

            }
            if(isset($_POST['newfood50'])) {
                $newfood50 = $_POST['newfood50'];
                $query = "UPDATE `products` SET `price` = '".$newfood50."' WHERE id=50";
                $result = $conn->query($query);	

            }
            if(isset($_POST['newfood51'])) {
                $newfood51 = $_POST['newfood51'];
                $query = "UPDATE `products` SET `price` = '".$newfood51."' WHERE id=51";
                $result = $conn->query($query); 
            } 
            if(isset($_POST['newfood52'])) {
                $newfood52 = $_POST['newfood52'];
                $query = "UPDATE `products` SET `price` = '".$newfood52."' WHERE id=52";
                $result = $conn->query($query);
            } 
            
            if(isset($_POST['newfood53'])) {
                $newfood53 = $_POST['newfood53'];
                $query = "UPDATE `products` SET `price` = '".$newfood53."' WHERE id=53";
                $result = $conn->query($query);	
            }
            if(isset($_POST['newfood54'])) {
                $newfood54 = $_POST['newfood54'];
                $query = "UPDATE `products` SET `price` = '".$newfood54."' WHERE id=54";
                $result = $conn->query($query);	
            }
            if(isset($_POST['newfood55'])) {
                $newfood55 = $_POST['newfood55'];
                $query = "UPDATE `products` SET `price` = '".$newfood55."' WHERE id=55";
                $result = $conn->query($query);	
            
            }
            if(isset($_POST['newfood56'])) {
                $newfood56 = $_POST['newfood56'];
                $query = "UPDATE `products` SET `price` = '".$newfood56."' WHERE id=56";
                $result = $conn->query($query);	

            }
            if(isset($_POST['newfood57'])) {
                $newfood57 = $_POST['newfood57'];
                $query = "UPDATE `products` SET `price` = '".$newfood57."' WHERE id=57";
                $result = $conn->query($query);	

            }
            if(isset($_POST['newfood58'])) {
                $newfood58 = $_POST['newfood58'];
                $query = "UPDATE `products` SET `price` = '".$newfood58."' WHERE id=58";
                $result = $conn->query($query);	

            }
            if(isset($_POST['newfood59'])) {
                $newfood59 = $_POST['newfood59'];
                $query = "UPDATE `products` SET `price` = '".$newfood59."' WHERE id=59";
                $result = $conn->query($query);	

            }
            if(isset($_POST['newfood60'])) {
                $newfood60 = $_POST['newfood60'];
                $query = "UPDATE `products` SET `price` = '".$newfood60."' WHERE id=60";
                $result = $conn->query($query);	

            }
            if(isset($_POST['newfood61'])) {
                $newfood61 = $_POST['newfood61'];
                $query = "UPDATE `products` SET `price` = '".$newfood61."' WHERE id=61";
                $result = $conn->query($query); 
            } 
            if(isset($_POST['newfood62'])) {
                $newfood62 = $_POST['newfood62'];
                $query = "UPDATE `products` SET `price` = '".$newfood62."' WHERE id=62";
                $result = $conn->query($query);
            } 
            
            if(isset($_POST['newfood63'])) {
                $newfood63 = $_POST['newfood63'];
                $query = "UPDATE `products` SET `price` = '".$newfood63."' WHERE id=63";
                $result = $conn->query($query);	
            }
            if(isset($_POST['newfood64'])) {
                $newfood64 = $_POST['newfood64'];
                $query = "UPDATE `products` SET `price` = '".$newfood64."' WHERE id=64";
                $result = $conn->query($query);	
            }
            if(isset($_POST['newfood65'])) {
                $newfood65 = $_POST['newfood65'];
                $query = "UPDATE `products` SET `price` = '".$newfood65."' WHERE id=65";
                $result = $conn->query($query);	
            
            }
            if(isset($_POST['newfood66'])) {
                $newfood66 = $_POST['newfood66'];
                $query = "UPDATE `products` SET `price` = '".$newfood66."' WHERE id=66";
                $result = $conn->query($query);	

            }
            if(isset($_POST['newfood67'])) {
                $newfood67 = $_POST['newfood67'];
                $query = "UPDATE `products` SET `price` = '".$newfood67."' WHERE id=67";
                $result = $conn->query($query);	

            }
            if(isset($_POST['newfood68'])) {
                $newfood68 = $_POST['newfood68'];
                $query = "UPDATE `products` SET `price` = '".$newfood68."' WHERE id=68";
                $result = $conn->query($query);	

            }
            if(isset($_POST['newfood69'])) {
                $newfood69 = $_POST['newfood69'];
                $query = "UPDATE `products` SET `price` = '".$newfood69."' WHERE id=69";
                $result = $conn->query($query);	

            }
            if(isset($_POST['newfood70'])) {
                $newfood70 = $_POST['newfood70'];
                $query = "UPDATE `products` SET `price` = '".$newfood70."' WHERE id=70";
                $result = $conn->query($query);	

            }
        } 
        
?>

<?php

        require '../config/db.inc.php';

		$query = "SELECT * FROM `products` WHERE id=1";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
		$pricenewfood1 = $row['price'];

		$query = "SELECT * FROM `products` WHERE id=2";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
		$pricenewfood2 = $row['price'];

		$query = "SELECT * FROM `products` WHERE id=3";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
		$pricenewfood3 = $row['price'];

		$query = "SELECT * FROM `products` WHERE id=4";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
		$pricenewfood4 = $row['price'];

		$query = "SELECT * FROM `products` WHERE id=5";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood5 = $row['price'];
        
        $query = "SELECT * FROM `products` WHERE id=6";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood6 = $row['price'];

        $query = "SELECT * FROM `products` WHERE id=7";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood7 = $row['price'];

        $query = "SELECT * FROM `products` WHERE id=8";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood8 = $row['price'];

        $query = "SELECT * FROM `products` WHERE id=9";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood9 = $row['price'];

        $query = "SELECT * FROM `products` WHERE id=10";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood10 = $row['price'];
        
        $query = "SELECT * FROM `products` WHERE id=11";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood11 = $row['price'];
        
        $query = "SELECT * FROM `products` WHERE id=12";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood12 = $row['price'];
        
        $query = "SELECT * FROM `products` WHERE id=13";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood13 = $row['price'];
        
        $query = "SELECT * FROM `products` WHERE id=14";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood14 = $row['price'];
        
        $query = "SELECT * FROM `products` WHERE id=15";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood15 = $row['price'];
        
        $query = "SELECT * FROM `products` WHERE id=16";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood16 = $row['price'];
        
        $query = "SELECT * FROM `products` WHERE id=17";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood17 = $row['price'];
        
        $query = "SELECT * FROM `products` WHERE id=18";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood18 = $row['price'];
        
        $query = "SELECT * FROM `products` WHERE id=19";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood19 = $row['price'];
        
        $query = "SELECT * FROM `products` WHERE id=20";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood20 = $row['price'];
        
        $query = "SELECT * FROM `products` WHERE id=21";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
		$pricenewfood21 = $row['price'];

		$query = "SELECT * FROM `products` WHERE id=22";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
		$pricenewfood22 = $row['price'];

		$query = "SELECT * FROM `products` WHERE id=23";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
		$pricenewfood23 = $row['price'];

		$query = "SELECT * FROM `products` WHERE id=24";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
		$pricenewfood24 = $row['price'];

		$query = "SELECT * FROM `products` WHERE id=25";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood25 = $row['price'];
        
        $query = "SELECT * FROM `products` WHERE id=26";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood26 = $row['price'];

        $query = "SELECT * FROM `products` WHERE id=27";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood27 = $row['price'];

        $query = "SELECT * FROM `products` WHERE id=28";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood28 = $row['price'];

        $query = "SELECT * FROM `products` WHERE id=29";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood29 = $row['price'];

        $query = "SELECT * FROM `products` WHERE id=30";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood30 = $row['price'];
        
        $query = "SELECT * FROM `products` WHERE id=31";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood31 = $row['price'];
        
        $query = "SELECT * FROM `products` WHERE id=32";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood32 = $row['price'];
        
        $query = "SELECT * FROM `products` WHERE id=33";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood33 = $row['price'];
        
        $query = "SELECT * FROM `products` WHERE id=34";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood34 = $row['price'];
        
        $query = "SELECT * FROM `products` WHERE id=35";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood35 = $row['price'];
        
        $query = "SELECT * FROM `products` WHERE id=36";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood36 = $row['price'];
        
        $query = "SELECT * FROM `products` WHERE id=37";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood37 = $row['price'];
        
        $query = "SELECT * FROM `products` WHERE id=38";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood38 = $row['price'];
        
        $query = "SELECT * FROM `products` WHERE id=39";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood39 = $row['price'];
        
        $query = "SELECT * FROM `products` WHERE id=40";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood40 = $row['price'];
        
        $query = "SELECT * FROM `products` WHERE id=41";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
		$pricenewfood41 = $row['price'];

		$query = "SELECT * FROM `products` WHERE id=42";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
		$pricenewfood42 = $row['price'];

		$query = "SELECT * FROM `products` WHERE id=43";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
		$pricenewfood43 = $row['price'];

		$query = "SELECT * FROM `products` WHERE id=44";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
		$pricenewfood44 = $row['price'];

		$query = "SELECT * FROM `products` WHERE id=45";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood45 = $row['price'];
        
        $query = "SELECT * FROM `products` WHERE id=46";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood46 = $row['price'];

        $query = "SELECT * FROM `products` WHERE id=47";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood47 = $row['price'];

        $query = "SELECT * FROM `products` WHERE id=48";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood48 = $row['price'];

        $query = "SELECT * FROM `products` WHERE id=49";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood49 = $row['price'];

        $query = "SELECT * FROM `products` WHERE id=50";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood50 = $row['price'];
        
        $query = "SELECT * FROM `products` WHERE id=51";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood51 = $row['price'];
        
        $query = "SELECT * FROM `products` WHERE id=52";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood52 = $row['price'];
        
        $query = "SELECT * FROM `products` WHERE id=53";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood53 = $row['price'];
        
        $query = "SELECT * FROM `products` WHERE id=54";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood54 = $row['price'];
        
        $query = "SELECT * FROM `products` WHERE id=55";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood55 = $row['price'];
        
        $query = "SELECT * FROM `products` WHERE id=56";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood56 = $row['price'];
        
        $query = "SELECT * FROM `products` WHERE id=57";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood57 = $row['price'];
        
        $query = "SELECT * FROM `products` WHERE id=58";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood58 = $row['price'];
        
        $query = "SELECT * FROM `products` WHERE id=59";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood59 = $row['price'];
        
        $query = "SELECT * FROM `products` WHERE id=60";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood60 = $row['price'];

        $query = "SELECT * FROM `products` WHERE id=61";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood61 = $row['price'];

        $query = "SELECT * FROM `products` WHERE id=62";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood62 = $row['price'];

        $query = "SELECT * FROM `products` WHERE id=63";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood63 = $row['price'];

        $query = "SELECT * FROM `products` WHERE id=64";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood64 = $row['price'];

        $query = "SELECT * FROM `products` WHERE id=65";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood65 = $row['price'];

        $query = "SELECT * FROM `products` WHERE id=66";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood66 = $row['price'];

        $query = "SELECT * FROM `products` WHERE id=67";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood67 = $row['price'];

        $query = "SELECT * FROM `products` WHERE id=68";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood68 = $row['price'];

        $query = "SELECT * FROM `products` WHERE id=69";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood69 = $row['price'];

        $query = "SELECT * FROM `products` WHERE id=70";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
        $pricenewfood70 = $row['price'];
        
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
            color: black;
        }
        h1 {
            color: black;
        }
        header {
            font-size: 18px;
        }
        input[type=submit] {
            margin-top: 15px;
            margin-bottom: 20px;
        }
        .btn {
            margin-left: 10px;
        }
        .auth {
          color: white;
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
    <h1><strong>Update product prices</strong></h1>
    <table>
    <form action="update.php" method="POST">
        <tr>
            <td><input type="checkbox" id="chkbox1" onchange="chkbox()"/></td>
            <th><b>Cheese Stuffed Beef Burger</b></th>
            <td>Mac Donald<br>S$<?php echo number_format((float)$pricenewfood1,2);?></td>
            <td>S$: <input type="text" name="newfood1" id="newfood1" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox2" onchange="chkbox()"/></td>
            <th><b>Grilled Cheese Beef Burger</b></th>
            <td>Pen & Inc<br>S$<?php echo number_format((float)$pricenewfood2,2);?></td>
            <td>S$:  <input type="text" name="newfood2" id="newfood2" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox3" onchange="chkbox()"/></td>
            <th><b>Double Cheese Beef Burger</b></th>
            <td>Hot Tomatoes<br>S$<?php echo number_format((float)$pricenewfood3,2);?></td>
            <td>S$:  <input type="text" name="newfood3" id="newfood3" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox4" onchange="chkbox()"/></td>
            <th><b>Cheese Beef Burger</b></th>
            <td>Canteen 2<br>S$<?php echo number_format((float)$pricenewfood4,2);?></td>
            <td>S$:  <input type="text" name="newfood4" id="newfood4" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox5" onchange="chkbox()"/></td>
            <th><b>Fried Chicken Burger</b></th>
            <td>Canteen 1<br>S$<?php echo number_format((float)$pricenewfood5,2);?></td>
            <td>S$:  <input type="text" name="newfood5" id="newfood5" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox6" onchange="chkbox()"/></td>
            <th><b>Grilled Chicken Thigh Burger</b></th>
            <td>Canteen 16<br>S$<?php echo number_format((float)$pricenewfood6,2);?></td>
            <td>S$:  <input type="text" name="newfood6" id="newfood6" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox7" onchange="chkbox()"/></td>
            <th><b>Salted Chicken Thigh Burger</b></th>
            <td>North Hill<br>S$<?php echo number_format((float)$pricenewfood7,2);?></td>
            <td>S$:  <input type="text" name="newfood7" id="newfood7" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox8" onchange="chkbox()"/></td>
            <th><b>Cheese Stuffed Chicken Burger</b></th>
            <td>Tamarind<br>S$<?php echo number_format((float)$pricenewfood8,2);?></td>
            <td>S$:  <input type="text" name="newfood8" id="newfood8" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox9" onchange="chkbox()"/></td>
            <th><b>Hawaii Pizza</b></th>
            <td>Pizza Hut<br>S$<?php echo number_format((float)$pricenewfood9,2);?></td>
            <td>S$:  <input type="text" name="newfood9" id="newfood9" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox10" onchange="chkbox()"/></td>
            <th><b>Pepperoni Pizza</b></th>
            <td>Pizza Hut<br>S$<?php echo number_format((float)$pricenewfood10,2);?></td>
            <td>S$:  <input type="text" name="newfood10" id="newfood10" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox11" onchange="chkbox()"/></td>
            <th><b>Chicken Supreme Pizza</b></th>
            <td>Pizza Hut<br>S$<?php echo number_format((float)$pricenewfood11,2);?></td>
            <td>S$: <input type="text" name="newfood11" id="newfood11" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox12" onchange="chkbox()"/></td>
            <th><b>Seafood Spaghetti</b></th>
            <td>Spaghetti house<br>S$<?php echo number_format((float)$pricenewfood12,2);?></td>
            <td>S$:  <input type="text" name="newfood12" id="newfood12" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox13" onchange="chkbox()"/></td>
            <th><b>Chicken Spaghetti</b></th>
            <td>Spaghetti house<br>S$<?php echo number_format((float)$pricenewfood13,2);?></td>
            <td>S$:  <input type="text" name="newfood13" id="newfood13" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox14" onchange="chkbox()"/></td>
            <th><b>Beef Spaghetti</b></th>
            <td>Spaghetti house<br>S$<?php echo number_format((float)$pricenewfood14,2);?></td>
            <td>S$:  <input type="text" name="newfood14" id="newfood14" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox15" onchange="chkbox()"/></td>
            <th><b>Sirloin Steak</b></th>
            <td>Hot Tomatoes<br>S$<?php echo number_format((float)$pricenewfood15,2);?></td>
            <td>S$:  <input type="text" name="newfood15" id="newfood15" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox16" onchange="chkbox()"/></td>
            <th><b>T-bone Steak</b></th>
            <td>Hot Tomatoes<br>S$<?php echo number_format((float)$pricenewfood16,2);?></td>
            <td>S$:  <input type="text" name="newfood16" id="newfood16" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox17" onchange="chkbox()"/></td>
            <th><b>Fillet Steak</b></th>
            <td>Hot Tomatoes<br>S$<?php echo number_format((float)$pricenewfood17,2);?></td>
            <td>S$:  <input type="text" name="newfood17" id="newfood17" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox18" onchange="chkbox()"/></td>
            <th><b>Chicken Sanswich</b></th>
            <td>Subway<br>S$<?php echo number_format((float)$pricenewfood18,2);?></td>
            <td>S$:  <input type="text" name="newfood18" id="newfood18" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox19" onchange="chkbox()"/></td>
            <th><b>Beef Sandwich</b></th>
            <td>Subway<br>S$<?php echo number_format((float)$pricenewfood19,2);?></td>
            <td>S$:  <input type="text" name="newfood19" id="newfood19" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox20" onchange="chkbox()"/></td>
            <th><b>Bacon Sandwich</b></th>
            <td>Subway<br>S$<?php echo number_format((float)$pricenewfood20,2);?></td>
            <td>S$:  <input type="text" name="newfood20" id="newfood20" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox21" onchange="chkbox()"/></td>
            <th><b>Garlic Chicken Wings</b></th>
            <td>4-fingers<br>S$<?php echo number_format((float)$pricenewfood21,2);?></td>
            <td>S$: <input type="text" name="newfood21" id="newfood21" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox22" onchange="chkbox()"/></td>
            <th><b>Spicy Chicken Wings</b></th>
            <td>KFC<br>S$<?php echo number_format((float)$pricenewfood22,2);?></td>
            <td>S$:  <input type="text" name="newfood22" id="newfood22" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox23" onchange="chkbox()"/></td>
            <th><b>BBQ Chicken Wings</b></th>
            <td>Pizza Hut<br>S$<?php echo number_format((float)$pricenewfood23,2);?></td>
            <td>S$:  <input type="text" name="newfood23" id="newfood23" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox24" onchange="chkbox()"/></td>
            <th><b>Beef Chinese Noodles</b></th>
            <td>Canteen 16<br>S$<?php echo number_format((float)$pricenewfood24,2);?></td>
            <td>S$:  <input type="text" name="newfood24" id="newfood24" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox25" onchange="chkbox()"/></td>
            <th><b>Pork Ribs Chinese Noodles</b></th>
            <td>Canteen 16<br>S$<?php echo number_format((float)$pricenewfood25,2);?></td>
            <td>S$:  <input type="text" name="newfood25" id="newfood25" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox26" onchange="chkbox()"/></td>
            <th><b>Fish Chinese Noodles</b></th>
            <td>Canteen 16<br>S$<?php echo number_format((float)$pricenewfood26,2);?></td>
            <td>S$:  <input type="text" name="newfood26" id="newfood26" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox27" onchange="chkbox()"/></td>
            <th><b>Spicy Pot A</b></th>
            <td>Canteen 9<br>S$<?php echo number_format((float)$pricenewfood27,2);?></td>
            <td>S$:  <input type="text" name="newfood27" id="newfood27" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox28" onchange="chkbox()"/></td>
            <th><b>Spicy Pot B</b></th>
            <td>Canteen 16<br>S$<?php echo number_format((float)$pricenewfood28,2);?></td>
            <td>S$:  <input type="text" name="newfood28" id="newfood28" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox29" onchange="chkbox()"/></td>
            <th><b>Spicy Pot C</b></th>
            <td>Tamarind<br>S$<?php echo number_format((float)$pricenewfood29,2);?></td>
            <td>S$:  <input type="text" name="newfood29" id="newfood29" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox30" onchange="chkbox()"/></td>
            <th><b>Chicken Rice A</b></th>
            <td>Canteen A<br>S$<?php echo number_format((float)$pricenewfood30,2);?></td>
            <td>S$:  <input type="text" name="newfood30" id="newfood30" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox31" onchange="chkbox()"/></td>
            <th><b>Chicken Rice B</b></th>
            <td>Canteen B<br>S$<?php echo number_format((float)$pricenewfood31,2);?></td>
            <td>S$: <input type="text" name="newfood31" id="newfood31" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox32" onchange="chkbox()"/></td>
            <th><b>Chicken Rice C</b></th>
            <td>Canteen 16<br>S$<?php echo number_format((float)$pricenewfood32,2);?></td>
            <td>S$:  <input type="text" name="newfood32" id="newfood32" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox33" onchange="chkbox()"/></td>
            <th><b>Seafood Japanese Noodles</b></th>
            <td>Canteen 16<br>S$<?php echo number_format((float)$pricenewfood33,2);?></td>
            <td>S$:  <input type="text" name="newfood33" id="newfood33" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox34" onchange="chkbox()"/></td>
            <th><b>Pork Japanese Noodles</b></th>
            <td>Canteen 16<br>S$<?php echo number_format((float)$pricenewfood34,2);?></td>
            <td>S$:  <input type="text" name="newfood34" id="newfood34" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox35" onchange="chkbox()"/></td>
            <th><b>Chicken Japanese Noodles</b></th>
            <td>Canteen 16<br>S$<?php echo number_format((float)$pricenewfood35,2);?></td>
            <td>S$:  <input type="text" name="newfood35" id="newfood35" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox36" onchange="chkbox()"/></td>
            <th><b>Tuna Sushi</b></th>
            <td>Sushi Hub<br>S$<?php echo number_format((float)$pricenewfood36,2);?></td>
            <td>S$:  <input type="text" name="newfood36" id="newfood36" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox37" onchange="chkbox()"/></td>
            <th><b>Floss Sushi</b></th>
            <td>Sushi Hub<br>S$<?php echo number_format((float)$pricenewfood37,2);?></td>
            <td>S$:  <input type="text" name="newfood37" id="newfood37" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox38" onchange="chkbox()"/></td>
            <th><b>Vegetarian Sushi</b></th>
            <td>Sushi Hub<br>S$<?php echo number_format((float)$pricenewfood38,2);?></td>
            <td>S$:  <input type="text" name="newfood38" id="newfood38" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox39" onchange="chkbox()"/></td>
            <th><b>Chicken Curry Rice</b></th>
            <td>Canteen 16<br>S$<?php echo number_format((float)$pricenewfood39,2);?></td>
            <td>S$:  <input type="text" name="newfood39" id="newfood39" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox40" onchange="chkbox()"/></td>
            <th><b>Beef Curry Rice<</b></th>
            <td>Canteen 16<br>S$<?php echo number_format((float)$pricenewfood40,2);?></td>
            <td>S$:  <input type="text" name="newfood40" id="newfood40" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox41" onchange="chkbox()"/></td>
            <th><b>Vegetarian Curry Rice</b></th>
            <td>Canteen 16<br>S$<?php echo number_format((float)$pricenewfood41,2);?></td>
            <td>S$: <input type="text" name="newfood41" id="newfood41" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox42" onchange="chkbox()"/></td>
            <th><b>Korean Bibibmap</b></th>
            <td>Canteen 14<br>S$<?php echo number_format((float)$pricenewfood42,2);?></td>
            <td>S$:  <input type="text" name="newfood42" id="newfood42" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox43" onchange="chkbox()"/></td>
            <th><b>Korean Beef rice</b></th>
            <td>Canteen 14<br>S$<?php echo number_format((float)$pricenewfood43,2);?></td>
            <td>S$:  <input type="text" name="newfood3" id="newfood43" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox44" onchange="chkbox()"/></td>
            <th><b>Korean Pork rice</b></th>
            <td>Canteen 14<br>S$<?php echo number_format((float)$pricenewfood44,2);?></td>
            <td>S$:  <input type="text" name="newfood44" id="newfood44" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox45" onchange="chkbox()"/></td>
            <th><b>Korean Fish rice</b></th>
            <td>Canteen 14<br>S$<?php echo number_format((float)$pricenewfood45,2);?></td>
            <td>S$:  <input type="text" name="newfood45" id="newfood45" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox46" onchange="chkbox()"/></td>
            <th><b>Korean Chicken rice</b></th>
            <td>Canteen 14<br>S$<?php echo number_format((float)$pricenewfood46,2);?></td>
            <td>S$:  <input type="text" name="newfood46" id="newfood46" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox47" onchange="chkbox()"/></td>
            <th><b>Korean Chicken Soup</b></th>
            <td>Canteen 14<br>S$<?php echo number_format((float)$pricenewfood47,2);?></td>
            <td>S$:  <input type="text" name="newfood47" id="newfood47" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox48" onchange="chkbox()"/></td>
            <th><b>Korean Tofu Soup</b></th>
            <td>Canteen 14<br>S$<?php echo number_format((float)$pricenewfood48,2);?></td>
            <td>S$:  <input type="text" name="newfood48" id="newfood48" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox49" onchange="chkbox()"/></td>
            <th><b>Korean Beef Soup</b></th>
            <td>Canteen 14<br>S$<?php echo number_format((float)$pricenewfood49,2);?></td>
            <td>S$:  <input type="text" name="newfood49" id="newfood49" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox50" onchange="chkbox()"/></td>
            <th><b>Indian Chicken Curry</b></th>
            <td>Canteen A<br>S$<?php echo number_format((float)$pricenewfood50,2);?></td>
            <td>S$:  <input type="text" name="newfood50" id="newfood50" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox51" onchange="chkbox()"/></td>
            <th><b>Indian Mutton Curry</b></th>
            <td>Canteen A<br>S$<?php echo number_format((float)$pricenewfood51,2);?></td>
            <td>S$: <input type="text" name="newfood51" id="newfood51" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox52" onchange="chkbox()"/></td>
            <th><b>Indian Vegetarian Curry</b></th>
            <td>Canteen A<br>S$<?php echo number_format((float)$pricenewfood52,2);?></td>
            <td>S$:  <input type="text" name="newfood52" id="newfood52" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox53" onchange="chkbox()"/></td>
            <th><b>Indian White Rice</b></th>
            <td>Canteen A<br>S$<?php echo number_format((float)$pricenewfood53,2);?></td>
            <td>S$:  <input type="text" name="newfood53" id="newfood53" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox54" onchange="chkbox()"/></td>
            <th><b>CIndian Spicy Rice</b></th>
            <td>Canteen A<br>S$<?php echo number_format((float)$pricenewfood54,2);?></td>
            <td>S$:  <input type="text" name="newfood54" id="newfood54" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox55" onchange="chkbox()"/></td>
            <th><b>Indian Bastami Rice</b></th>
            <td>Canteen A<br>S$<?php echo number_format((float)$pricenewfood55,2);?></td>
            <td>S$:  <input type="text" name="newfood55" id="newfood55" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox56" onchange="chkbox()"/></td>
            <th><b>Indian Style Naan</b></th>
            <td>Canteen A<br>S$<?php echo number_format((float)$pricenewfood56,2);?></td>
            <td>S$:  <input type="text" name="newfood56" id="newfood56" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox57" onchange="chkbox()"/></td>
            <th><b>Indian Pineapple Naan</b></th>
            <td>Canteen A<br>S$<?php echo number_format((float)$pricenewfood57,2);?></td>
            <td>S$:  <input type="text" name="newfood57" id="newfood57" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox58" onchange="chkbox()"/></td>
            <th><b>Indian Butter Naan</b></th>
            <td>Canteen A<br>S$<?php echo number_format((float)$pricenewfood58,2);?></td>
            <td>S$:  <input type="text" name="newfood58" id="newfood58" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox59" onchange="chkbox()"/></td>
            <th><b>Coke</b></th>
            <td>Canteen 2<br>S$<?php echo number_format((float)$pricenewfood59,2);?></td>
            <td>S$:  <input type="text" name="newfood59" id="newfood59" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox60" onchange="chkbox()"/></td>
            <th><b>Sprite</b></th>
            <td>Canteen 2<br>S$<?php echo number_format((float)$pricenewfood60,2);?></td>
            <td>S$:  <input type="text" name="newfood60" id="newfood60" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox61" onchange="chkbox()"/></td>
            <th><b>Ice Lemon Tea</b></th>
            <td>Canteen 2<br>S$<?php echo number_format((float)$pricenewfood61,2);?></td>
            <td>S$: <input type="text" name="newfood6" id="newfood61" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox62" onchange="chkbox()"/></td>
            <th><b>Soy Milk</b></th>
            <td>Canteen 2<br>S$<?php echo number_format((float)$pricenewfood62,2);?></td>
            <td>S$:  <input type="text" name="newfood62" id="newfood62" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox63" onchange="chkbox()"/></td>
            <th><b>Mineral Water</b></th>
            <td>Canteen 2<br>S$<?php echo number_format((float)$pricenewfood63,2);?></td>
            <td>S$:  <input type="text" name="newfood63" id="newfood63" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox64" onchange="chkbox()"/></td>
            <th><b>Tiger Beer</b></th>
            <td>Giant<br>S$<?php echo number_format((float)$pricenewfood64,2);?></td>
            <td>S$:  <input type="text" name="newfood64" id="newfood64" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox65" onchange="chkbox()"/></td>
            <th><b>Heineken Beer</b></th>
            <td>Giant<br>S$<?php echo number_format((float)$pricenewfood65,2);?></td>
            <td>S$:  <input type="text" name="newfood65" id="newfood65" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox66" onchange="chkbox()"/></td>
            <th><b>Wine</b></th>
            <td>Giant<br>S$<?php echo number_format((float)$pricenewfood66,2);?></td>
            <td>S$:  <input type="text" name="newfood66" id="newfood66" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox67" onchange="chkbox()"/></td>
            <th><b>Tiramisu</b></th>
            <td>Canteen 13<br>S$<?php echo number_format((float)$pricenewfood67,2);?></td>
            <td>S$:  <input type="text" name="newfood67" id="newfood67" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox68" onchange="chkbox()"/></td>
            <th><b>Strawberry Ice cream</b></th>
            <td>Canteen 13<br>S$<?php echo number_format((float)$pricenewfood68,2);?></td>
            <td>S$:  <input type="text" name="newfood68" id="newfood68" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox69" onchange="chkbox()"/></td>
            <th><b>Orange Ice Cream</b></th>
            <td>Canteen 13<br>S$<?php echo number_format((float)$pricenewfood69,2);?></td>
            <td>S$:  <input type="text" name="newfood69" id="newfood69" size="2" disabled="true"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="chkbox70" onchange="chkbox()"/></td>
            <th><b>Mint Ice Cream</b></th>
            <td>Canteen 13<br>S$<?php echo number_format((float)$pricenewfood70,2);?></td>
            <td>S$:  <input type="text" name="newfood70" id="newfood70" size="2" disabled="true"></td>
        </tr>
    </table>
    <input type="submit" class="btn" name ="submitbtn" id="submit" value="Update Price">
    </form>
    <b>
    <a href="adminpage.php"><button class="btn">Go Back</button></a>
    <a href="report.php"><button class="btn">Sales Report</button></a>
    </b>
    <script type="text/javascript">
        function chkbox(){
            var chkbox1 = document.getElementById("chkbox1");
            var chkbox2 = document.getElementById("chkbox2");
            var chkbox3 = document.getElementById("chkbox3");
            var chkbox4 = document.getElementById("chkbox4");
            var chkbox5 = document.getElementById("chkbox5");
            var chkbox6 = document.getElementById("chkbox6");
            var chkbox7 = document.getElementById("chkbox7");
            var chkbox8 = document.getElementById("chkbox8");
            var chkbox9 = document.getElementById("chkbox9");
            var chkbox10 = document.getElementById("chkbox10");
            var chkbox11 = document.getElementById("chkbox11");
            var chkbox12 = document.getElementById("chkbox12");
            var chkbox13 = document.getElementById("chkbox13");
            var chkbox14 = document.getElementById("chkbox14");
            var chkbox15 = document.getElementById("chkbox15");
            var chkbox16 = document.getElementById("chkbox16");
            var chkbox17 = document.getElementById("chkbox17");
            var chkbox18 = document.getElementById("chkbox18");
            var chkbox19 = document.getElementById("chkbox19");
            var chkbox20 = document.getElementById("chkbox20");
            var chkbox21 = document.getElementById("chkbox21");
            var chkbox22 = document.getElementById("chkbox22");
            var chkbox23 = document.getElementById("chkbox23");
            var chkbox24 = document.getElementById("chkbox24");
            var chkbox25 = document.getElementById("chkbox25");
            var chkbox26 = document.getElementById("chkbox26");
            var chkbox27 = document.getElementById("chkbox27");
            var chkbox28 = document.getElementById("chkbox28");
            var chkbox29 = document.getElementById("chkbox29");
            var chkbox30 = document.getElementById("chkbox30");
            var chkbox31 = document.getElementById("chkbox31");
            var chkbox32 = document.getElementById("chkbox32");
            var chkbox33 = document.getElementById("chkbox33");
            var chkbox34 = document.getElementById("chkbox34");
            var chkbox35 = document.getElementById("chkbox35");
            var chkbox36 = document.getElementById("chkbox36");
            var chkbox37 = document.getElementById("chkbox37");
            var chkbox38 = document.getElementById("chkbox38");
            var chkbox39 = document.getElementById("chkbox39");
            var chkbox40 = document.getElementById("chkbox40"); 
            var chkbox41 = document.getElementById("chkbox41");
            var chkbox42 = document.getElementById("chkbox42");
            var chkbox43 = document.getElementById("chkbox43");
            var chkbox44 = document.getElementById("chkbox44");
            var chkbox45 = document.getElementById("chkbox45");
            var chkbox46 = document.getElementById("chkbox46");
            var chkbox47 = document.getElementById("chkbox47");
            var chkbox48 = document.getElementById("chkbox48");
            var chkbox49 = document.getElementById("chkbox49");
            var chkbox50 = document.getElementById("chkbox50");
            var chkbox51 = document.getElementById("chkbox51");
            var chkbox52 = document.getElementById("chkbox52");
            var chkbox53 = document.getElementById("chkbox53");
            var chkbox54 = document.getElementById("chkbox54");
            var chkbox55 = document.getElementById("chkbox55");
            var chkbox56 = document.getElementById("chkbox56");
            var chkbox57 = document.getElementById("chkbox57");
            var chkbox58 = document.getElementById("chkbox58");
            var chkbox59 = document.getElementById("chkbox59");
            var chkbox60 = document.getElementById("chkbox60");   
            var chkbox61 = document.getElementById("chkbox61");
            var chkbox62 = document.getElementById("chkbox62");
            var chkbox63 = document.getElementById("chkbox63");
            var chkbox64 = document.getElementById("chkbox64");
            var chkbox65 = document.getElementById("chkbox65");
            var chkbox66 = document.getElementById("chkbox66");
            var chkbox67 = document.getElementById("chkbox67");
            var chkbox68 = document.getElementById("chkbox68");
            var chkbox69 = document.getElementById("chkbox69");
            var chkbox70 = document.getElementById("chkbox70");


            var newfood1 = document.getElementById("newfood1");
            var newfood2 = document.getElementById("newfood2");
            var newfood3 = document.getElementById("newfood3");
            var newfood4 = document.getElementById("newfood4");
            var newfood5 = document.getElementById("newfood5");
            var newfood6 = document.getElementById("newfood6");
            var newfood7 = document.getElementById("newfood7");
            var newfood8 = document.getElementById("newfood8");
            var newfood9 = document.getElementById("newfood9");
            var newfood10 = document.getElementById("newfood10");
            var newfood11 = document.getElementById("newfood11");
            var newfood12 = document.getElementById("newfood12");
            var newfood13 = document.getElementById("newfood13");
            var newfood14 = document.getElementById("newfood14");
            var newfood15 = document.getElementById("newfood15");
            var newfood16 = document.getElementById("newfood16");
            var newfood17 = document.getElementById("newfood17");
            var newfood18 = document.getElementById("newfood18");
            var newfood19 = document.getElementById("newfood19");
            var newfood20 = document.getElementById("newfood20");
            var newfood21 = document.getElementById("newfood21");
            var newfood22 = document.getElementById("newfood22");
            var newfood23 = document.getElementById("newfood23");
            var newfood24 = document.getElementById("newfood24");
            var newfood25 = document.getElementById("newfood25");
            var newfood26 = document.getElementById("newfood26");
            var newfood27 = document.getElementById("newfood27");
            var newfood28 = document.getElementById("newfood28");
            var newfood29 = document.getElementById("newfood29");
            var newfood30 = document.getElementById("newfood30");
            var newfood31 = document.getElementById("newfood31");
            var newfood32 = document.getElementById("newfood32");
            var newfood33 = document.getElementById("newfood33");
            var newfood34 = document.getElementById("newfood34");
            var newfood35 = document.getElementById("newfood35");
            var newfood36 = document.getElementById("newfood36");
            var newfood37 = document.getElementById("newfood37");
            var newfood38 = document.getElementById("newfood38");
            var newfood39 = document.getElementById("newfood39");
            var newfood40 = document.getElementById("newfood40"); 
            var newfood41 = document.getElementById("newfood41");
            var newfood42 = document.getElementById("newfood42");
            var newfood43 = document.getElementById("newfood43");
            var newfood44 = document.getElementById("newfood44");
            var newfood45 = document.getElementById("newfood45");
            var newfood46 = document.getElementById("newfood46");
            var newfood47 = document.getElementById("newfood47");
            var newfood48 = document.getElementById("newfood48");
            var newfood49 = document.getElementById("newfood49");
            var newfood50 = document.getElementById("newfood50");
            var newfood51 = document.getElementById("newfood51");
            var newfood52 = document.getElementById("newfood52");
            var newfood53 = document.getElementById("newfood53");
            var newfood54 = document.getElementById("newfood54");
            var newfood55 = document.getElementById("newfood55");
            var newfood56 = document.getElementById("newfood56");
            var newfood57 = document.getElementById("newfood57");
            var newfood58 = document.getElementById("newfood58");
            var newfood59 = document.getElementById("newfood59");
            var newfood60 = document.getElementById("newfood60");   
            var newfood61 = document.getElementById("newfood61");
            var newfood62 = document.getElementById("newfood62");
            var newfood63 = document.getElementById("newfood63");
            var newfood64 = document.getElementById("newfood64");
            var newfood65 = document.getElementById("newfood65");
            var newfood66 = document.getElementById("newfood66");
            var newfood67 = document.getElementById("newfood67");
            var newfood68 = document.getElementById("newfood68");
            var newfood69 = document.getElementById("newfood69");
            var newfood70 = document.getElementById("newfood70");
          
            if(chkbox1.checked){
                newfood1.disabled=false;
            }
            else{
                newfood1.disabled=true;
            }

            if(chkbox2.checked){
                newfood2.disabled=false;
            }
            else{
                newfood2.disabled=true;
            }
            
            if(chkbox3.checked){
                newfood3.disabled=false;
            }
            else{
                newfood3.disabled=true;
            }
            if(chkbox4.checked){
                newfood4.disabled=false;
            }
            else{
                newfood4.disabled=true;
            }
            if(chkbox5.checked){
                newfood5.disabled=false;
            }
            else{
                newfood5.disabled=true;
            }
            if(chkbox6.checked){
                newfood6.disabled=false;
            }
            else{
                newfood6.disabled=true;
            }
            if(chkbox7.checked){
                newfood7.disabled=false;
            }
            else{
                newfood7.disabled=true;
            }
            if(chkbox8.checked){
                newfood8.disabled=false;
            }
            else{
                newfood8.disabled=true;
            }
            if(chkbox9.checked){
                newfood9.disabled=false;
            }
            else{
                newfood9.disabled=true;
            }
            if(chkbox10.checked){
                newfood10.disabled=false;
            }
            else{
                newfood10.disabled=true;
            }
            if(chkbox11.checked){
                newfood11.disabled=false;
            }
            else{
                newfood11.disabled=true;
            }

            if(chkbox12.checked){
                newfood12.disabled=false;
            }
            else{
                newfood12.disabled=true;
            }
            
            if(chkbox13.checked){
                newfood13.disabled=false;
            }
            else{
                newfood13.disabled=true;
            }
            if(chkbox14.checked){
                newfood14.disabled=false;
            }
            else{
                newfood14.disabled=true;
            }
            if(chkbox15.checked){
                newfood15.disabled=false;
            }
            else{
                newfood15.disabled=true;
            }
            if(chkbox16.checked){
                newfood16.disabled=false;
            }
            else{
                newfood16.disabled=true;
            }
            if(chkbox17.checked){
                newfood17.disabled=false;
            }
            else{
                newfood17.disabled=true;
            }
            if(chkbox18.checked){
                newfood18.disabled=false;
            }
            else{
                newfood18.disabled=true;
            }
            if(chkbox19.checked){
                newfood19.disabled=false;
            }
            else{
                newfood19.disabled=true;
            }
            if(chkbox20.checked){
                newfood20.disabled=false;
            }
            else{
                newfood20.disabled=true;
            }            
            if(chkbox21.checked){
                newfood21.disabled=false;
            }
            else{
                newfood21.disabled=true;
            }

            if(chkbox22.checked){
                newfood22.disabled=false;
            }
            else{
                newfood22.disabled=true;
            }
            
            if(chkbox23.checked){
                newfood23.disabled=false;
            }
            else{
                newfood23.disabled=true;
            }
            if(chkbox24.checked){
                newfood24.disabled=false;
            }
            else{
                newfood24.disabled=true;
            }
            if(chkbox25.checked){
                newfood25.disabled=false;
            }
            else{
                newfood25.disabled=true;
            }
            if(chkbox26.checked){
                newfood26.disabled=false;
            }
            else{
                newfood26.disabled=true;
            }
            if(chkbox27.checked){
                newfood27.disabled=false;
            }
            else{
                newfood27.disabled=true;
            }
            if(chkbox28.checked){
                newfood28.disabled=false;
            }
            else{
                newfood28.disabled=true;
            }
            if(chkbox29.checked){
                newfood29.disabled=false;
            }
            else{
                newfood29.disabled=true;
            }
            if(chkbox30.checked){
                newfood30.disabled=false;
            }
            else{
                newfood30.disabled=true;
            }            
            if(chkbox31.checked){
                newfood31.disabled=false;
            }
            else{
                newfood31.disabled=true;
            }

            if(chkbox32.checked){
                newfood32.disabled=false;
            }
            else{
                newfood32.disabled=true;
            }
            
            if(chkbox33.checked){
                newfood3.disabled=false;
            }
            else{
                newfood33.disabled=true;
            }
            if(chkbox34.checked){
                newfood34.disabled=false;
            }
            else{
                newfood34.disabled=true;
            }
            if(chkbox35.checked){
                newfood35.disabled=false;
            }
            else{
                newfood35.disabled=true;
            }
            if(chkbox36.checked){
                newfood36.disabled=false;
            }
            else{
                newfood36.disabled=true;
            }
            if(chkbox37.checked){
                newfood37.disabled=false;
            }
            else{
                newfood37.disabled=true;
            }
            if(chkbox38.checked){
                newfood38.disabled=false;
            }
            else{
                newfood38.disabled=true;
            }
            if(chkbox39.checked){
                newfood39.disabled=false;
            }
            else{
                newfood39.disabled=true;
            }
            if(chkbox40.checked){
                newfood40.disabled=false;
            }
            else{
                newfood40.disabled=true;
            }            
            if(chkbox41.checked){
                newfood41.disabled=false;
            }
            else{
                newfood41.disabled=true;
            }

            if(chkbox42.checked){
                newfood42.disabled=false;
            }
            else{
                newfood42.disabled=true;
            }
            
            if(chkbox43.checked){
                newfood43.disabled=false;
            }
            else{
                newfood43.disabled=true;
            }
            if(chkbox44.checked){
                newfood44.disabled=false;
            }
            else{
                newfood44.disabled=true;
            }
            if(chkbox45.checked){
                newfood45.disabled=false;
            }
            else{
                newfood45.disabled=true;
            }
            if(chkbox46.checked){
                newfood46.disabled=false;
            }
            else{
                newfood46.disabled=true;
            }
            if(chkbox47.checked){
                newfood47.disabled=false;
            }
            else{
                newfood47.disabled=true;
            }
            if(chkbox48.checked){
                newfood48.disabled=false;
            }
            else{
                newfood48.disabled=true;
            }
            if(chkbox49.checked){
                newfood49.disabled=false;
            }
            else{
                newfood49.disabled=true;
            }
            if(chkbox50.checked){
                newfood50.disabled=false;
            }
            else{
                newfood50.disabled=true;
            }            
            if(chkbox51.checked){
                newfood51.disabled=false;
            }
            else{
                newfood51.disabled=true;
            }

            if(chkbox52.checked){
                newfood52.disabled=false;
            }
            else{
                newfood52.disabled=true;
            }
            
            if(chkbox53.checked){
                newfood53.disabled=false;
            }
            else{
                newfood53.disabled=true;
            }
            if(chkbox54.checked){
                newfood54.disabled=false;
            }
            else{
                newfood54.disabled=true;
            }
            if(chkbox55.checked){
                newfood55.disabled=false;
            }
            else{
                newfood55.disabled=true;
            }
            if(chkbox56.checked){
                newfood56.disabled=false;
            }
            else{
                newfood56.disabled=true;
            }
            if(chkbox57.checked){
                newfood57.disabled=false;
            }
            else{
                newfood57.disabled=true;
            }
            if(chkbox58.checked){
                newfood58.disabled=false;
            }
            else{
                newfood58.disabled=true;
            }
            if(chkbox59.checked){
                newfood59.disabled=false;
            }
            else{
                newfood59.disabled=true;
            }
            if(chkbox60.checked){
                newfood60.disabled=false;
            }
            else{
                newfood60.disabled=true;
            }            
            if(chkbox61.checked){
                newfood61.disabled=false;
            }
            else{
                newfood61.disabled=true;
            }

            if(chkbox62.checked){
                newfood62.disabled=false;
            }
            else{
                newfood62.disabled=true;
            }
            
            if(chkbox63.checked){
                newfood63.disabled=false;
            }
            else{
                newfood63.disabled=true;
            }
            if(chkbox64.checked){
                newfood64.disabled=false;
            }
            else{
                newfood64.disabled=true;
            }
            if(chkbox65.checked){
                newfood65.disabled=false;
            }
            else{
                newfood65.disabled=true;
            }
            if(chkbox66.checked){
                newfood66.disabled=false;
            }
            else{
                newfood66.disabled=true;
            }
            if(chkbox67.checked){
                newfood67.disabled=false;
            }
            else{
                newfood67.disabled=true;
            }
            if(chkbox68.checked){
                newfood68.disabled=false;
            }
            else{
                newfood68.disabled=true;
            }
            if(chkbox69.checked){
                newfood69.disabled=false;
            }
            else{
                newfood69.disabled=true;
            }
            if(chkbox70.checked){
                newfood70.disabled=false;
            }
            else{
                newfood70.disabled=true;
            }
        }
    </script>
</div>
</body>
</html>