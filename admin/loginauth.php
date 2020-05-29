<?php 
    session_start();
    require '../config/db.inc.php';

    $db = mysqli_select_db($conn, 'ntucanweb');

    if (isset($_POST['submit'])) {

    
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $sql = "SELECT * FROM admins WHERE user = '$username' AND `password` = '$password'";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($query);
            if($row == 1) {
                echo "Login Successful!";
                $_SESSION['user'] = $username;
                header('Location: adminpage.php');
            }
            else {
                echo "<div style='color:red'>Login Failed!</div>";
                header('Location: adminlogin.php');
            }
        }
?>

