<?php

$server = 'localhost';
$database = 'blood_donation' ;
$user =  'webuser';
$password = '123456';

    $conn = mysqli_connect($server, $user, $password, $database);


$phonenumber = $_GET['phonenumber'];
$query = "INSERT INTO accepted_donation_requests SELECT id,firstname,lastname, phonenumber,age,gender,bloodgroup,disease,amount FROM donationrequests WHERE phonenumber ='$phonenumber'";
$result=mysqli_query($conn,$query);
$i=mysqli_insert_id($conn);
if($result<0){
    echo "error" . mysqli_error($conn);

}

else{
    $phonenumber = $_GET['phonenumber'];
    $query2 = "DELETE FROM donationrequests WHERE phonenumber = '$phonenumber'";
    $result2=mysqli_query($conn,$query2);

    
    print('test'.$i);

    $sql1 = 'SELECT bloodgroup FROM accepted_donation_requests WHERE id =?';

                
    $stmt = mysqli_prepare($conn, $sql1);
    mysqli_stmt_bind_param($stmt,'i', $i);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $group);
    mysqli_stmt_fetch($stmt);

    $conn = mysqli_connect($server, $user, $password, $database);
    $sql="UPDATE bloodstock SET amount=((SELECT amount FROM accepted_donation_requests WHERE id=?) + (SELECT amount FROM bloodstock WHERE name=?)) WHERE name=?";

    $stmt = mysqli_prepare($conn, $sql);
    
    
    mysqli_stmt_bind_param($stmt,'iss', $i,$group,$group);
    mysqli_stmt_execute($stmt);


    header("Location: donation.php");
    
}



