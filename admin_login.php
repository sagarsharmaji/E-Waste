<?php
session_start();

$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $_user = $_POST["user"];
    $_pass = $_POST["pass"]; 
    
    $sql = "Select * from admin where user='$_user' AND pass='$_pass'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['user'] = $row['user'];
        header("location: admin_panel.php");
    } 
    else{
        $showError = "Invalid Credentials";
    }
}   
?>

<!doctype html>
<html lang="en">
  <head>
  <title>Admin Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
    body{
        background-image : url("img1.jpg");
        font-family: 'Trebuchet MS';
        height:150%;
    }

    .loginbox{
    width: 450px;
    height: 450px;
    background: #fff;
    opacity: 0.85;
    color: #000;
    top: 60%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
	border-radius: 10px;
    }

    .loginbox input[type="text"], input[type="password"]
    {
    border: none;
    opacity: 1;
    border-bottom: 1px solid #fb007d;
    background: transparent;
    outline: border-box;
    height: 40px;
	width: 330px;
    color: #000;
    font-size: 16pff
    }

.loginbox input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
	width: 200px;
    background: #58F186;
    color: #fff;
    font-family: 'Trebuchet MS';
    border-radius: 15px;
    font-size: 25px;
    font-weight: bold;
    border-radius: 15px;
}

    .loginbox input[type="submit"]:hover
    {
        cursor: pointer;
        color: #000;
    }

    h1{
        font-size: 30px;
        text-align: center;
        padding: 20px;
        border-bottom: 5px solid #fb007d;
    }

    a{
    display: block;
    color: black;
    text-align: center;
    font-size: 30px;
    font-weight: bold;
    padding: 16px;
    font-family: 'Trebuchet MS';
    border-radius: 15px;
    text-decoration: none;
    }

    a:hover {
        background-color: rgb(110, 221, 88);
    }

    p{
        font-size: 20px;
        font-weight: bold;
    }

    .avatar{
        width: 100px;
        height: 100px;
        border-radius: 0%;
        position: absolute;
        top: -50px;
        left: calc(50% - 50px);
    }
</style>

  <title>Login</title>
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>
    <?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>

    <div class="loginbox">
    <img src="logo.png" class="avatar">
        <h1>Admin Login</h1><br>
        <form action="/EWMS/admin_login.php" method="post">
            <p>Username</p>
            <input type="text" name="user" id="user" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="pass" id="pass" placeholder="Enter Password">
		    <center><font color="red"><div id='mydiv'></div></font></center><br>
            <center><input type="submit" name="login" value="Login"></center><br>
        </form>
    </div>
  </body>
</html>