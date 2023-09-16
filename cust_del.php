<?php require 'partials/_ad_nav.php' ?>
<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: del_cust.php");
    exit;
}
    // include 'partials/_dbconnect.php';
    // $email = $_POST["cemail"];
    // $sql = "delete from users where email='$email'";
    // $result = mysqli_query($conn,$sql);  

    // if ($result){
    //     echo "DATA DELETED!!";
    // }   
    // else{
    //     echo "INVALID EMAIL ID ENTERED OR DATA DOES NOT EXIST IN DATABASE!!";
    //     header('Location: ' . $_SERVER['HTTP_REFERER']);
    // }
?>

<html>
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

    tr.active {
        background-color: black;
        color: white;
        text-decoration-color: rgb(0, 255, 0);
    }

    .loginbox{
    width: 500px;
    height: 300px;
    background: #fff;
    opacity: 0.85;
    color: #000;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
	border-radius: 10px;
    }

    h1{
        font-size: 30px;
        text-align: center;
        padding: 10px;
        border-bottom: 5px solid #fb007d;
    }

    table, th, td {
  border:2px solid black;
  width: 30%;
  text-align: center;
}

th{
  padding-top: 10px;
  padding-bottom: 20px;
  padding-left: 30px;
  padding-right: 40px;
  font-size: 20px;
}

td {
  padding-top: 10px;
  padding-bottom: 20px;
  padding-left: 30px;
  padding-right: 40px;
  font-size: 20px;
  font-weight: bold;
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
    }

    a:hover {
    background-color: rgb(110, 221, 88);
    }

    a.active{
    font-size: 20px;
    font-weight: bold;
    padding: 16px;
    font-family: 'Trebuchet MS';
    border-radius: 15px;
    text-decoration: none;
    }
</style>
</head>
    <body>
        <center>
        <div class="loginbox">
        <h1>Customer Details Deleted</h1><br>
        <p>Customer Data now does not Exist in Database!</p>
        </div>
        </center>
    <body>
</html>