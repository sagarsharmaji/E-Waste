<?php
session_start();

if(isset($_POST['submit']) && $_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST['Washing_Machine']) || isset($_POST['TV']) || isset($_POST['FRIDGE']) || isset($_POST['SMART_PHONE']) ||isset($_POST['PC_LAPTOP']) ||isset($_POST['SCANNER_PRINTER']) ||isset($_POST['STEREO']) ||isset($_POST['CIRCUIT_BOARD']) ||isset($_POST['TOASTER_IRON']) || isset($_POST['OVEN']))
    {
    include 'partials/_dbconnect.php';
    
    $data = '';

    foreach($_POST as $key => $value){
        if($value=="on"){
            $data = $data  . $key . ' ' ;
        }
        // else if($value!="on")
        // {
        //     echo "No Item Selected!!";
        //     header('Location: ' . $_SERVER['HTTP_REFERER']);
        //     exit;
        // }
    }
    //print_r($data);

    $bid = $_SESSION['bid'];
    $fname = $_SESSION['fname'];
    $email = $_SESSION['email'];

    $query = "INSERT INTO ewaste (ew_name,bid,email) VALUES ('$data','$bid','$email')";
    $query_run = mysqli_query($conn,$query);
}
else{
    echo "NOTHING SELECTED!!";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
}

// if(isset($_POST['submit']))
// {
//     if(confirm("DO YOU WANT TO SUBMIT YOU E-WASTE"))
//     {
//         include 'partials/_dbconnect.php';

//         $query = "INSERT INTO ewaste (ew_name,bid,email) VALUES ('$data','$bid','$email')";
//         $query_run = mysqli_query($conn,$query);
//     }
//     else{
//         header('Location: ' . $_SERVER['HTTP_REFERER']);
//     }
// }
?>

<html>

<head>
    <style>

body{
    background-image : url("img1.jpg");
    font-family: 'Trebuchet MS';
    height:150%;
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

h1{
        font-size: 30px;
        text-align: center;
        padding: 20px;
        border-bottom: 5px solid #fb007d;
    }

.table-box{
    width: 850px;
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

    tr.active {
        background-color: black;
        color: white;
        text-decoration-color: rgb(0, 255, 0);
    }

    .table-box input[type="submit"]
{
    border: none;
    outline: none;
    height: 30px;
	width: 100px;
    background: #58F186;
    color: #fff;
    font-size: 20px;
    border-radius: 20px;
}

.tabel-box input[type="submit"]:hover
{
    cursor: pointer;
    color: #000;
}
</style>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>User E-waste Selected Details</title>
  </head>
</head>
    <body>
    <?php require 'partials/_back_nav.php' ?>    
    <form action="thanks.php" method="POST">
        <center>
        <div class="table-box">
        <h1>YOUR SELECTED DETAILS</h1><br>
        <table>
            <tr class="active"><th>EWASTE SELECTED</th><th>BY USER</th><th>EMAIL ID IS</th><th>BOOKING ID</th></tr>
            <tr><td><?php echo $data ?></td><td><?php echo $fname ?></td><td><?php echo $email ?></td><td><?php echo $bid ?></td></tr>
        </table>
        <br><br>
        <input type=submit value=Submit name=Submit>
</div>
        </center>
    </body>
</html>