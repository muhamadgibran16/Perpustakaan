<?php session_start();

    if(isset($_POST['submit'])) {
        $username=$_POST["username"];
        $password=$_POST["password"];

        if ($_SERVER['REQUEST_METHOD'] = 'POST') {
            if($username == "user" AND $password == "user1234") {
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                header("location:index.php");
            } else {
                $_SESSION['login-failed'] = true;
                header("location:login.php?login-failed");
            }
        }
    }

    // $username=$_POST["username"];
    // $password=$_POST["password"];
    
    // if($username == "user" AND $password == "user1234"){
    //     $_SESSION["username"]=$username;
    //     header("location:index.php");
    // }else{
    //     header("location:login.php?login-failed");
    // }
?>