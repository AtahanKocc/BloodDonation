
<?php 

$server = 'localhost';
$database = 'blood_donation' ;
$user =  'webuser';
$password = '123456';
 
$conn = mysqli_connect($server, $user, $password, $database);

// check connection
if(!$conn){
  die("connection failed" . mysqli_connect_error());
}

$A=$Ap=$B=$Bp=$AB=$ABp=$O=$Op=0;

$sql = "SELECT amount FROM bloodstock WHERE name='A-'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
if($row['amount']==Null){
  $A=0;
}
else{
  $A=$row['amount'];
}


$sql = "SELECT amount FROM bloodstock WHERE name='A+'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
if($row['amount']==Null){
  $Ap=0;
}
else{
  $Ap=$row['amount'];
}


$sql = "SELECT amount FROM bloodstock WHERE name='B-'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
if($row['amount']==Null){
  $B=0;
}
else{
  $B=$row['amount'];
}


$sql = "SELECT amount FROM bloodstock WHERE name='B+'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
if($row['amount']==Null){
  $Bp=0;
}
else{
  $Bp=$row['amount'];
}

$sql = "SELECT amount FROM bloodstock WHERE name='AB-'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
if($row['amount']==Null){
  $AB=0;
}
else{
  $AB=$row['amount'];
}

$sql = "SELECT amount FROM bloodstock WHERE name='AB+'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
if($row['amount']==Null){
  $ABp=0;
}
else{
  $ABp=$row['amount'];
}

$sql = "SELECT amount FROM bloodstock WHERE name='0-'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
if($row['amount']==Null){
  $O=0;
}
else{
  $O=$row['amount'];
}

$sql = "SELECT amount FROM bloodstock WHERE name='0+'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
if($row['amount']==Null){
  $Op=0;
}
else{
  $Op=$row['amount'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Blood Stock</title>
     <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <style type="text/css">

  #nav{
background-color:#D50000;
}

#nav ul{
	list-style-type: none;
	overflow: hidden;
}
#nav li{
	float: left;
	margin: .3rem;
}
#nav ul li{
	font-size: 18px;
}
#nav li a{
	display: inline-block;
	color: white;
	text-align: center;
	padding: 16px 18px;
	text-decoration: none;
	transition: backgorund-color 0.2s linear;
}
#nav li a:hover{
	background-color: #95B9C7;
}
table{
    position: relative;
    top: 20px;
}
#bb,#hn{
       position: relative;
    left: 995px;
    top: 20px;
}

button{
    position: relative;
    left: 1020px;
    top: 18px;
}
#hospital{

     position: relative;
    left: 950px;
    top: 20px;
}

</style>
</head>
<body>

<div id="nav">
        <ul>
            <li><a href="MainPage.php"><i class="fas fa-backward"></i></a></li>
            <li><a href="BloodStock.php"> Blood Stock </a></li>
        </ul>
</div>


<table class="table table-striped">
  <thead>
    <tr>
      <th>Name</th>
      <th>Amount</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php

$server = "localhost";
$user = "webuser";
$password = "123456";
$database = "Blood_Donation";  
         
            $conn = mysqli_connect($server, $user, $password, $database);
       
            // check connection
            if(!$conn){
                die("connection failed" . mysqli_connect_error());
            }

            $sql = "SELECT name, amount FROM bloodstock";
            $result = mysqli_query($conn,$sql);

            if(mysqli_num_rows($result) > 0 ){
                while($row = mysqli_fetch_assoc($result)){

                    echo "<tr>" .
                            "<td>" . $row['name'] . "</td>" . 
                            "<td>" . $row['amount'] . "</td>" . 
                           
                         "<tr>";
                }
             
                echo "</table>";
               
            } else{
                echo "No results";
            }
            
            mysqli_close($conn);
        ?>
    </tr>


    </tr>
  </tbody>
</table>

</body>
</html>