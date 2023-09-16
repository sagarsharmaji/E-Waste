<?php
//include 'partials/_dbconnect.php';
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $mobnum = $_POST["mobnum"];
    $addr = $_POST["add"];
    $pass = $_POST["pass"];
    $cpass = $_POST["cpass"];
    $exists=false;
    if(($pass == $cpass) && $exists==false){
        $sql = "INSERT INTO `users` ( `fname`, `lname`, `email`, `mobnum`, `addr`, `pass` , `dt`) VALUES ('$fname', '$lname', '$email', '$mobnum', '$addr', '$pass', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        
        if ($result){
            $showAlert = true;
        }
    }
    else{
        $showError = "Passwords do not match";
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
  </head>
<style>
    body{
        background-image : url("img1.jpg");
        font-family: 'Trebuchet MS';
        height:150%;
    }

    .loginbox{
    width: 500px;
    height: 950px;
    background: #fff;
    opacity: 0.75;
    color: #000;
    top: 70%;
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

.loginbox a{
    font-size: 12px;
    line-height: 20px;
    color: darkgrey;
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
  <body>
  <?php require 'partials/_nav.php'?>
  <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
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
        <h1>Customer SignUp Form</h1><br>
        <form action="/EWMS/signup.php" method="post">
            <p>First Name</p>
            <input type="text" name="fname" placeholder="First Name"><br><br>
            <p>Last Name</p>
            <input type="text" name="lname" placeholder="Last Name"><br><br>
		    <p>Email ID</p>
            <input type="text" name="email" placeholder="Email ID"><br><br>
            <p>Mobile Number</p>
            <input type="text" name="mobnum" placeholder="Mobile Number"><br><br>
            <p>Address</p>
            <input type="text" name="add" placeholder="Address"><br><br>
            <p>Password</p>
            <input type="password" name="pass" placeholder="Password" value=""><br><br>
             <p>Confirm Password</p>
            <input type="password" name="cpass" placeholder="Confirm Password" value=""><br><br>
			<center><font color="red"><div id='mydiv'></div></font></center>
            <center><input type="submit" name="signUp" value="Sign Up"></center><br>
        </form>
    </div>
</body>
    <!--
    <div class="loginbox">
     <h1 class="text-center">Signup to our website</h1>
     <form action="/EWMS/signup.php" method="post">
        <div class="form-group" col-md-6>
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
        </div>
        <div class="form-group" col-md-6>
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group" col-md-6>
            <label for="cpassword">Confirm Password</label>
            <input type="password" class="form-control" id="cpassword" name="cpassword">
            <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
        </div>
         
        <button type="submit" class="btn btn-primary">SignUp</button>
     </form>
    </div>
  </body>
-->
</html>