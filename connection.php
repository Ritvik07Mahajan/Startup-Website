<?php

$server = "localhost";
$username = "root";
$password = "";
$db="startup-form";
// Create a database connection
$con=mysqli_connect($server, $username, $password,$db);

if($con)
{
    //echo "Connection Successful";
    
}


else{

    echo "No Connection"; 
    die("connection to this database failed due to" . mysqli_connect_error());

}

?>