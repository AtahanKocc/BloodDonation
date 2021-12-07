<?php

$server = 'localhost';
$database = 'blood_donation' ;
$user =  'webuser';
$password = '123456';


    // Create connection
    $conn = mysqli_connect($server, $user, $password, $database);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    // sql to create table
    $sql = "CREATE TABLE accounts (
    id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(6) NOT NULL,
    password VARCHAR(30) NOT NULL
    )";

    if ($conn->query($sql) === TRUE) {
    echo "Table Accounts created successfully";
    }
    else
        echo "Error creating table";

    $conn->close();

?>

<?php


    $server = "localhost";
    $user = "webuser";
    $password = "123456";
    $database = "Blood_Donation";


   
    $conn = mysqli_connect($server, $user, $password, $database);   // connect to the database  

    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }


    $sql = "INSERT INTO accounts (username, password) VALUES ('admin', '123')";  

    
if ($conn->query($sql) === TRUE) {
    echo "New account created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();


?>