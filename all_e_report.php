<?php require 'partials/_ad_nav.php' ?>
<?php
session_start();
    include 'partials/_dbconnect.php';
    $sql = "Select * from ewaste";
    $result = mysqli_query($conn,$sql);  
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
    width: 1000px;
    height: 900px;
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

    h1{
        font-size: 30px;
        text-align: center;
        padding: 10px;
        border-bottom: 5px solid #fb007d;
    }

    table, th, td {
  border:2px solid black;
  width: 40%;
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
<title>ALL E-REPORTS</title>
</head>
    <body>
        <center>
        <div class="loginbox">
        <h1>E-Waste Reports Till Date</h1><br>
    <table>
        <tr class="active"><th>BOOKING ID</th><th>EWASTE NAME</th><th>CUSTOMERS EMAIL</th><th>DATE</th></tr>
            <?php
                // LOOP TILL END OF DATA
            while($rows=$result->fetch_assoc())
            {
            ?>
            <tr>
                <td><?php echo $rows['bid'];?></td>
                <td><?php echo $rows['ew_name'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['dt'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
        </div>
        </center>
    <body>
</html>