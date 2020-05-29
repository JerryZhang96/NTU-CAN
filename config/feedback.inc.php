<?php 
    
    if(isset($_POST['submit'])) {
        
        require 'db.inc.php';
    
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        mysqli_query($conn, "insert into feedback(name, email, message ) values('$name', '$email', '$message')");
        echo '<script type="text/javascript">alert("We have received your feedback!");';
        echo 'window.location.href = "../index.php"';
        echo '</script>';
    }
    