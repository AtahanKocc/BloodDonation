<?php

$server = 'localhost';
$database = 'blood_donation' ;
$user =  'webuser';
$password = '123456';

$conn = mysqli_connect($server, $user, $password, $database);
$phonenumber = $_GET['phonenumber'];

$sql1 = "SELECT amount,bloodgroup FROM bloodrequests WHERE phonenumber ='$phonenumber'";                   
$stmt = mysqli_prepare($conn, $sql1);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $amount,$group);
mysqli_stmt_fetch($stmt);

$conn = mysqli_connect($server, $user, $password, $database);
$sql2 = "SELECT amount FROM bloodstock WHERE name ='$group'";                   
$stmt2 = mysqli_prepare($conn, $sql2);
mysqli_stmt_execute($stmt2);
mysqli_stmt_bind_result($stmt2, $amount2);
mysqli_stmt_fetch($stmt2);


if($amount2-$amount>=0)
{
    $conn = mysqli_connect($server, $user, $password, $database);
    $query = "INSERT INTO accepted_blood_requests SELECT *  FROM bloodrequests WHERE phonenumber ='$phonenumber'";
    $result=mysqli_query($conn,$query);
    $i=mysqli_insert_id($conn);
    if($result<0){
        echo "error" . mysqli_error($conn);

    }

    else{
        $conn = mysqli_connect($server, $user, $password, $database);
        $phonenumber = $_GET['phonenumber'];
        $query2 = "DELETE FROM bloodrequests WHERE phonenumber = '$phonenumber'";
        $result2=mysqli_query($conn,$query2);
        $conn = mysqli_connect($server, $user, $password, $database);
        $sql1 = 'SELECT amount,bloodgroup FROM accepted_blood_requests WHERE id =?';

                    
        $stmt = mysqli_prepare($conn, $sql1);
        mysqli_stmt_bind_param($stmt,'i', $i);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $amount,$group);
        mysqli_stmt_fetch($stmt);

        $conn = mysqli_connect($server, $user, $password, $database);
        $sql="UPDATE bloodstock SET amount=((SELECT amount FROM bloodstock WHERE name=?)-(SELECT amount FROM accepted_blood_requests WHERE id=?) ) WHERE name=?";

        $stmt = mysqli_prepare($conn, $sql);
        
        
        mysqli_stmt_bind_param($stmt,'sis', $group,$i,$group);
        mysqli_stmt_execute($stmt);


        header("Location: BloodRequests.php");
        
    }
}
else{
    $msg='Not enough blood!';
    /*
    echo '<script type="text/javascript">'; 
    echo 'alert("Not enough blood!");'; 
    echo 'window.location.href = "BloodRequests.php";';
    echo '</script>';
    */
    header("Refresh: 0; url=BloodRequests.php"); echo"<script>alert('Not enough blood!');</script>"; die; 
}