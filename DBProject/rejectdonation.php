<?php

    $server = 'localhost';
    $database = 'blood_donation' ;
    $user =  'webuser';
    $password = '123456';
           
    $conn = mysqli_connect($server, $user, $password, $database);
    
    $phonenumber = $_GET['phonenumber'];
    $query = "DELETE FROM donationrequests WHERE phonenumber= '$phonenumber' ";
    $result=mysqli_query($conn,$query);

    if($result){
        header("Location:donation.php");
    }

    else{
        echo "error rejecting request" . mysqli_error($conn);
    }



?>