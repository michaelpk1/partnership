<?php
ini_set('error_reporting', E_ALL);
ini_set('display_error', 1);

$conn = mysqli_connect("localhost", "root", "", "SDG");
if(!$conn){
    die("Error".mysqli_error($conn));
} else {
    //  echo "connected!";
}


?>