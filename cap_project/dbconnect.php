<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "signup";

$conn = mysqli_connect($servername , $username , $password , $database);

if(!$conn){
    die("Connection failed" . mysqli_connect_error());
}
// else{
//     echo "Connection was successful";
// }



?>