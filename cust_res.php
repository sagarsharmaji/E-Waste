<?php require 'partials/_ad_nav.php' ?>
<?php
session_start();
    include 'partials/_dbconnect.php';
    $email = $_POST["cemail"];
    $sql = "Select * from users where email='$email'";
    $result = mysqli_query($conn,$sql);  
?>

<html>
<head>
    <title>INDIVISUAL CUSTOMER DETAILS</title>
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
    width: 950px;
    height: 400px;
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
        <h1>Customers Details</h1><br>
    <table>
        <tr class="active"><th>FIRST NAME</th><th>LAST NAME</th><th>EMAIL</th><th>CONTACT NO.</th><th>ADDRESS</th></tr>
            <?php
                // LOOP TILL END OF DATA
            while($rows=$result->fetch_assoc())
            {
            ?>
            <tr>
                <td><?php echo $rows['fname'];?></td>
                <td><?php echo $rows['lname'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['mobnum'];?></td>
                <td><?php echo $rows['addr'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
        </div>
        </center>
    <body>
</html>