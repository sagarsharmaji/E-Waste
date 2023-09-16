<?php
session_start();
    include 'partials/_dbconnect.php';
    $showError=false;

    if(isset($_POST['submit']))
    {
        // $bid = $_SESSION['bid'];
        $veh_type = $_POST["veh"];
        $email = $_POST["email"];
        $_SESSION['email'] = $_POST["email"];
        $now = $_POST["now"];
        $dt = $_POST["dt"];

        if(!empty($veh_type))
        {
            $sql = "INSERT INTO  `vehicle`(`bid`,`email`,`dt`,`no_of_worker`,`veh_type`) VALUES('$bid','$email','$dt','$now','$veh_type')";
            $result = mysqli_query($conn, $sql);

            if($result){
                header("location: assg_success.php");
            }  
        }
        else{
                $showError = "Value Insertion Error!!";
                // header("location: assg_success.php");
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
        width: 700px;
        height: 850px;
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

    .loginbox select {
    width: 50%;
    padding: 16px 20px;
    border: none;
    border-radius: 4px;
    background-color: #f1f1f1;
    }

    .loginbox input[type="text"], input[type="number"], input[type="datetime-local"]
    {
    border: none;
    opacity: 1;
    border-bottom: 1px solid #fb007d;
    background: transparent;
    /* outline: border-box; */
    height: 50px;
	width: 330px;
    color: #000;
    font-size: 16pff
    }

.loginbox input[type="submit"]
{
    border: none;
    outline: none;
    height: 50px;
	width: 200px;
    background: #58F186;
    color: #fff;
    font-size: 25px;
    font-weight: bold;
    font-family: 'Trebuchet MS';
    border-radius: 15px;
    text-decoration: none;
}

.loginbox input[type="submit"]:hover
{
    cursor: pointer;
    color: #000;
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

    a.active:hover{
        cursor: pointer;
    color: #000;
    }

    a.active{
    text-align: center;
    background: #58F186;
    color: #fff;
    font-size: 15px;
    height: 50px;
	width: 250px;
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

    h1{
        font-size: 35px;
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

  <title>ASSIGN VEHICLE</title>
  </head>
  <body>
  <?php require 'partials/_ad_nav.php' ?>
  <?php
    if($showError){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>';}
    ?>
  <center>
    <div class="loginbox">
    <img src="logo.png" class="avatar">
        <h1>ASSIGN VEHICLE FOR COLLECTION</h1><br>
        <form action="assignv.php" method="POST">
            <p>ENTER EMAIL OF CUSTOMER</p><br>
            <input type="text" name="email" placeholder="Enter Email" required><br>
            <!-- <a class="active" href="search_cust.php" name="addr">CLICK TO SEARCH ADDRESS</a> -->
            <br><br>
            <p>ENTER DATE</p>
            <input type="datetime-local" name="dt" placeholder="Enter Date of Collection" required>
            <br><br>
            <p>NUMBER OF WORKERS</p>
            <input type="number" name="now" required>
            <p>VEHICLE TYPE</p>
            <select name="veh" required>
                <option value="Mini Wagon">MINI WAGON</option>
                <option value="Mini Truck">MINI TRUCK</option>
                <option value="Truck">TRUCK</option>
            </select><br><br>
            <input type="submit" name="submit">
        </form>
		</center>
    </div>
  </body>
</html>