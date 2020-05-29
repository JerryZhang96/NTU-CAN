<?php
	
	function get_product_name($pid) {
		global $conn;
		$result=mysqli_query($conn, "SELECT `pname` FROM products WHERE id=$pid") or die("SELECT `name` FROM products WHERE id=$pid"."<br/><br/>".mysqli_error($conn));
		$row=mysqli_fetch_array($result);
		return $row['pname'];
	}
	function get_location($pid) {
		global $conn;
		$result=mysqli_query($conn, "SELECT `description` FROM products WHERE id=$pid") or die("SELECT `name` FROM products WHERE id=$pid"."<br/><br/>".mysqli_error($conn));
		$row=mysqli_fetch_array($result);
		return $row['description'];
	}
	function get_price($pid){
		global $conn;
		$result=mysqli_query($conn, "SELECT price FROM products WHERE id=$pid") or die("SELECT `name` FROM products WHERE id=$pid"."<br/><br/>".mysqli_error($conn));
		$row=mysqli_fetch_array($result);
		return $row['price'];
	}
	function get_picture($pid) {
		global $conn;
		$result=mysqli_query($conn, "SELECT picture FROM products WHERE id=$pid") or die("SELECT `name` FROM products WHERE id=$pid"."<br/><br/>".mysqli_error($conn));
		$row=mysqli_fetch_array($result);
		return $row['picture'];
	}

	function remove_product($pid){
		global $conn;
		$pid=intval($pid);
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			if($pid==$_SESSION['cart'][$i]['productid']){
				unset($_SESSION['cart'][$i]);
				break;
			}
		}
		$_SESSION['cart']=array_values($_SESSION['cart']);
	}
	function get_order_total(){
		global $conn;
		$max=count($_SESSION['cart']);
		$sum=0;
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=$_SESSION['cart'][$i]['qty'];
			$price=get_price($pid);
			$sum+=$price*$q;
		}
		return $sum;
	}
	function addtocart($pid,$q){
		global $conn;
		if($pid<1 or $q<1) return;

		if(is_array($_SESSION['cart'])){
			if(product_exists($pid)) return;
			$max=count($_SESSION['cart']);
			$_SESSION['cart'][$max]['productid']=$pid;
			$_SESSION['cart'][$max]['qty']=$q;
		}
		else{
			$_SESSION['cart']=array();
			$_SESSION['cart'][0]['productid']=$pid;
			$_SESSION['cart'][0]['qty']=$q;
		}
	}
	function product_exists($pid){
		global $conn;
		$pid=intval($pid);
		$max=count($_SESSION['cart']);
		$flag=0;
		for($i=0;$i<$max;$i++){
			if($pid==$_SESSION['cart'][$i]['productid']){
				$flag=1;
				break;
			}
		}
		return $flag;
	}

?>
