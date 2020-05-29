<?php

if (isset($_POST['loginbtn']))  {
    require 'db.inc.php';

    $mailuid = $_POST['email'];
    $password = $_POST['password'];

    if (empty($mailuid) || empty($password)) {
        header("Location: ../login.php?error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../login.php?error=emptyfields");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt); // raw data from database
            if ($row = mysqli_fetch_assoc($result)) {  //mysqli_fetch_assoc convert it to array
                $pwdCheck = password_verify($password, $row['pwdUsers']);
                if ($pwdCheck == false) {
                    header("Location: ../login.php?error=wrongpwd");
                    exit();
                }
                else if ($pwdCheck == true) {
                    session_start();
                    $_SESSION['userId'] = $row['idUsers'];
                    $_SESSION['userUid'] = $row['uidUsers'];

                    header("Location: ../menu.php?login=success");
                    exit();
                }
                else {
                    header("Location: ../login.php?error=nouser");
                    exit();
                }
            } 
            else {
                header("Location: ../login.php?error=nouser");
                exit();
            }
        }
    }

}
else {
    header("Location: ../menu.php");
    exit();
}

if (isset($_GET['error'])) {

    if ($_GET['error'] === "emptyfields") {
        echo "<p style='color:red;'>Fill in all the fields!</p>";
    }
    else if ($_GET['error'] === "nouser") {
        echo "<p style='color:red;'>Invalid username!</p>";
    }
    // else if ($_GET['error'] === "invaliduid") {
    //     echo "<p style='color:red;'>Invalid username!</p>";
    // }
    // else if ($_GET['error'] === "invalidmail") {
    //     echo "<p style='color:red;' >Invalid e-mail!</p>";
    // }
    else if ($_GET['error'] === "wrongpwd") {
        echo "<p style='color:red;'>The password you entered is incorrect! Please try again!</p>";
    }
    
}
else  {
    if (isset($_GET['login'])) {
        echo "<p style='color:green;'>Log in successful!</p>";
    }
}

?>