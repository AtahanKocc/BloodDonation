<?php

$server = 'localhost';
$user =  'webuser';
$password = '123456';

$conn = mysqli_connect($server, $user, $password);   // connect to the database

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE DATABASE Blood_Donation";
  
  if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
  } else {
    echo "Error:" .$sql. "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);

?>

