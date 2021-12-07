<?php

    $servername = "localhost";
    $username = "webuser";
    $password = "123456";
    $dbname = "Blood_Donation";


    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    // sql to create table
    $sql = "CREATE TABLE bloodstock (
    id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL ,
    amount INT(30) NOT NULL
    )";

    if ($conn->query($sql) === TRUE) {
    echo "Table BloodStock created successfully";
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


    $sql = "INSERT INTO bloodstock (name,amount) VALUES 
         ('A+' , 0),
        ('A-' , 0),
        ('B+' , 0),
        ('B-' , 0),
        ('AB+' , 0),
        ('AB-' , 0),
        ('0+' , 0),
        ('0-' , 0) "

    ;  

if ($conn->query($sql ) === TRUE) {
    echo "New account created successfully";
  } else {
    echo "Error: " . $conn->error;
  }
  
  $conn->close();


?>