<?php require 'partials/_ad_nav.php'?>
<!DOCTYPE html>
<html>
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<style>
    body{
        background-image : url("img1.jpg") ;
        font-family: 'Trebuchet MS';
        height:150%;
    }

    .loginbox{
    width: 850px;
    height: 700px;
    background: #fff;
    opacity: 0.85;
    color: #000;
    top: 55%;
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
    text-decoration: none;
    }

    a:hover {
    background-color: rgb(110, 221, 88);
    }

    .avatar{
        width: 100px;
        height: 100px;
        border-radius: 0%;
        position: absolute;
        top: -50px;
        left: calc(50% - 50px);
    }

    a.active {
        background-color: black;
        color: white;
        text-decoration: none;
    }
</style>
<title>E-EDUCATE PAGE</title>
</head>
  <body>
    <div class="loginbox">
    <img src="logo.png" class="avatar">
        <h1>E-EDUCATE PANEL</h1><br><br><br>
        <center>
        <a href="#" class="active">CHOOSE AN E-WASTE</a>
        <a href="search_cust.php">Heavy Appliances</a>
        <a href="all_cust_info.php">Personal Gadgets</a>
        <a href="del_cust.php">PC & Laptop</a>
        <a href="all_e_report.php">Kitchen Appliances</a>
		</center>
    </div>
  </body>
</html>