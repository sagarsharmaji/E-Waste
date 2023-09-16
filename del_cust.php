<?php
session_start();
//INSERT INTO `users`(`fname`, `lname`, `email`, `mobnum`, `addr`, `pass`, `dt`) VALUES ('Damodar','Dummy','dd@gmail.com','4561237890','Chowk','zxcvbn','zxcvbn')

$showSucess = false;
$showError = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $_email = $_POST['cemail']; 
    
    $sql = "delete from `users` where `email` = '$_email'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_affected_rows($conn);
    
    if($num){
        $showSucess = "DATA DELETED SUCCESSFULLY!";
    } 
    else{
        $showError = "DATA DO NOT EXIST OR DELETED PREVIOUSLY!!";
    }
}   
?>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
body
{
  background-image : url("img1.jpg");
  font-family: 'Trebuchet MS';
  height:150%;
}

.loginbox input[type="email"]
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
    font-size: 20px;
    font-weight: bold;
    border-radius: 15px;
}

    .loginbox input[type="submit"]:hover
    {
        cursor: pointer;
        color: #000;
    }

.loginbox{
        width: 500px;
        height: 500px;
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

    h1{
        font-size: 35px;
        text-align: center;
        padding: 20px;
        border-bottom: 5px solid #fb007d;
    }
</style>
<title>DELETE CUSTOMER</title>
</head>
<body>
<?php require 'partials/_ad_nav.php' ?>
<?php
    if($showSucess){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success! Deleted Data!</strong>
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
    <center>
        <h1>Delete Customer Details</h1>
        <br>
        <form action="del_cust.php" method="POST">
        <p>ENTER EMAIL OF CUSTOMER</p><br>
            <input type="email" name="cemail" placeholder="Enter email id" required>
            <br><br><br><br>
            <input type="submit" name="submit">
        </form>
</center>
</div>
</body>
</html>