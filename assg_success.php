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
    width: 500px;
    height: 550px;
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

p{
	font-size: 20px;
    font-weight: bold;
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

    h1{
        font-size: 30px;
        text-align: center;
        padding: 20px;
        border-bottom: 5px solid #fb007d;
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
<title>Vehicle Assigned</title>
  </head>
  <body>
    <?php require 'partials/_back_nav.php' ?>
    <div class="loginbox">
    <img src="logo.png" class="avatar">
        <h1>Vehicle Assigned</h1><br>
        <center>
            <p>THANK YOU!<br>VEHICLE ASSIGNED TO CUSTOMER <?php session_start(); echo $_SESSION['email']?></p>
            <br> 
            <p>SCHEDULED A DOOR STEP PICKUP! धन्यवाद् | SEND SMS TO CUSTOMER</p>
            <br><br>
            <a href="/EWMS/admin_panel.php">Admin Panel</a>
        </center>
    </div>
  </body>
</html>