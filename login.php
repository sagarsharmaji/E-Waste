<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $email = $_POST["cemail"];
    $pass = $_POST["pass"]; 
    
    $sql = "Select * from users where email='$email' AND pass='$pass'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    $fname = $_GET["fname"];
    
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['fname'] = $fname;
        header("location: welcome.php");
    } 
    else{
        $showError = "Invalid Credentials";
    }
}   
?>

<!doctype html>
<html lang="en">
  <head>
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
    opacity: 0.75;
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
    font-size: 18px;
    border-radius: 15px;
}

.loginbox input[type="submit"]:hover
{
    cursor: pointer;
    color: #000;
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
        <h1>Customers Login</h1><br>
        <form action="/EWMS/login.php" method="post">
            <p>Email</p>
            <input type="text" name="cemail" id="cemail" placeholder="Enter Email">
            <p>Password</p>
            <input type="password" name="pass" id="pass" placeholder="Enter Password">
		    <center><font color="red"><div id='mydiv'></div></font></center><br>
            <center><input type="submit" name="login" value="Login"></center><br>
        </form>
    </div>

<!--
    <div class="container my-4">
     <h1 class="text-center">Login to our website</h1>
     <form action="/EWMS/login.php" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp"> 
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div> 
        <button type="submit" class="btn btn-primary">Login</button>
     </form>
    </div>
-->
  </body>
</html>