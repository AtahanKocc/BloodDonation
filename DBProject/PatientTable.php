<?php

    $servername = "localhost";
    $username = "webuser";
    $password = "123456";
    $dbname = "blood_donation";


    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    // sql to create table
    $sql = "CREATE TABLE patient (
        id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL ,
        lastname VARCHAR(30) NOT NULL,
        gender VARCHAR(30) NOT NULL,
        bloodgroup VARCHAR(30) NOT NULL,
        disease VARCHAR(30) NOT NULL,
        amount VARCHAR(30) NOT NULL,
        phonenumber INT(30) NOT NULL,
        date VARCHAR(30) NOT NULL
        
        )";
    
        if ($conn->query($sql) === TRUE) {
        echo "Table Patient created successfully";
        }
        else
            echo "error creating table";
    
        $conn->close();

?>