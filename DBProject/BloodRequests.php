<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <title>Blood Requests</title>

    <style type="text/css">

table{
    position: relative;
    top: 60px;
}
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
    </style>
</head>
<body>

<div id="nav">
        <ul>
            <li><a href="MainPage.php"><i class="fas fa-backward"></i></a></li>
            <li><a href="BloodRequests.php"> Blood Requests </a></li>
        </ul>
    </div>

<table class="table table-striped">
  <thead>
    <tr>
      <th>Patient ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Gender</th>
        <th>Blood Group</th>
          <th>Disease</th>
        <th>Amount(ml)</th>
        <th>Phone</th>
        <th>Date</th>
        <th>Status</th>
    </tr>
  </thead>
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

            $sql = "SELECT id,firstname,lastname,gender,bloodgroup,disease,amount,phonenumber,date FROM bloodrequests";
            $result = mysqli_query($conn,$sql);

            if(mysqli_num_rows($result) > 0 ){
                while($row = mysqli_fetch_assoc($result)){

                    echo "<tr>" .
                            "<td>" . $row['id'] . "</td>" . 
                            "<td>" . $row['firstname'] . "</td>" . 
                            "<td>" . $row['lastname'] . "</td>" . 
                            "<td>" . $row['gender'] . "</td>" . 
                        "<td>" . $row['bloodgroup'] . "</td>" . 
                        "<td>" . $row['disease'] . "</td>" . 
                        "<td>" . $row['amount'] . "</td>" . 
                        "<td>" . $row['phonenumber'] . "</td>" . 
                        "<td>" . $row['date'] . "</td>" . 
                        '<td >  <a href="approvepatient.php?phonenumber='.$row['phonenumber'].'"onclick="return uyari(); ">Approve</a> </td>' .
                        '<td >  <a href="reject.php?phonenumber='.$row['phonenumber'].'"onclick="return uyari(); ">Reject</a> </td>' .

                         "<tr>";
                }
             
                echo "</table>";
               
            } else{
                echo "No results";
            }
            
            mysqli_close($conn);
        ?>

  
</table>

<br><br><br><br><br>

<hr>
<br><br>
<b>Accepted Requests</b>
<table class="table table-striped">

    <tr>
    <th>ID</th>

      <th>First Name</th>
      <th>Last Name</th>
      <th>Gender</th>
        <th>Blood Group</th>
          <th>Disease</th>
        <th>Amount(ml)</th>
        <th>Phone</th>
        <th>Date</th>
    
    </tr>
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

            $sql = "SELECT id,firstname,lastname,gender,bloodgroup,disease,amount,phonenumber,date FROM accepted_blood_requests";
            $result = mysqli_query($conn,$sql);

            if(mysqli_num_rows($result) > 0 ){
                while($row = mysqli_fetch_assoc($result)){

                  echo "<tr>" .

                  "<td>" . $row['id'] . "</td>" . 
                  "<td>" . $row['firstname'] . "</td>" . 
                  "<td>" . $row['lastname'] . "</td>" . 
                  "<td>" . $row['gender'] . "</td>" . 
              "<td>" . $row['bloodgroup'] . "</td>" . 
              "<td>" . $row['disease'] . "</td>" . 
              "<td>" . $row['amount'] . "</td>" . 
              "<td>" . $row['phonenumber'] . "</td>" . 
              "<td>" . $row['date'] . "</td>" . 

                         "<tr>";
                }
             
                echo "</table>";
               
            } else{
                echo "No results";
            }
            
            mysqli_close($conn);
        ?>


    </table>

</body>
</html>