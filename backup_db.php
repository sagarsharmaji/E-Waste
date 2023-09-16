<?php
$server = "localhost";
$username = "postgres";
$password = "postgres";
$database = "postgres";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
//     echo "success";
// }
// else{
    die("Error". mysqli_connect_error());
}
?>

<?php
   //$host        = "host = localhost";
   //$port        = "port = 5432";
   //$dbname      = "dbname = postgres";
   //$credentials = "user = postgres password=postgres";

   $db = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=postgres");
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
?>