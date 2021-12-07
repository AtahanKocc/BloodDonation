<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <title>DONATION</title>
    <style type="text/css">

       table{
           position: relative;
           top: 40px;
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
button{
  background-color: red;
  font-weight: bold;
  opacity: 0.9;
  cursor: pointer;
}
input#all{
position: relative;
left: 85%;
top: 70px;
padding: 10px;
background-color:#278239 ;
opacity: 0.9;
color: white;
cursor: pointer;
}

#dwnld{
  float: right;
  font-style: italic;
  font-family:'Times New Roman', Times, serif;
  position: relative;
  right: 50px;
    top: 30px;
}

</style>
</head>
<body>


 <div id="nav">
        <ul>
            <li><a href="MainPage.php"><i class="fas fa-backward"></i></a></li>
            <li><a href="donation.php"> Donation Home Page </a></li>
        </ul>
    </div>

 <h5>Donation List:</h5>

<div>
      <p id="dwnld">
    Download the list of donations
    <a href="#">
      <img src="data:image/jpeg;base64,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" width="30" height="30">
    </a>
    </p>

<table class="table table-striped">
<th>ID</th>
      <th>Donor First Name</th>
      <th>Last Name</th>
      <th>Phone Number</th>
      <th>Age</th>
      <th>Gender</th>
      <th>Blood Group</th>
      <th>Disease</th>
      <th>Amount(ml)</th>
        <th>  </th>
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

            $sql = "SELECT id, firstname,lastname, phonenumber,age,gender,bloodgroup,disease,amount FROM accepted_donation_requests";
            $result = mysqli_query($conn,$sql);

            if(mysqli_num_rows($result) > 0 ){
                while($row = mysqli_fetch_assoc($result)){

                    echo "<tr>" .
                            "<td>" . $row['id'] . "</td>" . 
                            "<td>" . $row['firstname'] . "</td>" . 
                            "<td>" . $row['lastname'] . "</td>" . 
                            "<td>" . $row['phonenumber'] . "</td>" . 
                        "<td>" . $row['age'] . "</td>" . 
                        "<td>" . $row['gender'] . "</td>" . 
                        "<td>" . $row['bloodgroup'] . "</td>" . 
                        "<td>" . $row['disease'] . "</td>" . 
                        "<td>" . $row['amount'] . "</td>" . 
                      
                         "<tr>";
                }
             
                echo "</table>";
               
            } else{
                echo "No results";
            }
            
            mysqli_close($conn);
        ?>

</table>


</div>

</body>
<br> <br>
<hr>
<h5>Donation Requests List: </h5>

<body>
<div>

                                                     <!--  ---------------------------------   -->
<table class="table table-striped">


  <th>ID</th>
      <th>Donor First Name</th>
      <th>Last Name</th>
      <th>Phone Number</th>
      <th>Age</th>
      <th>Gender</th>
      <th>Blood Group</th>
      <th>Disease</th>
      <th>Amount(ml)</th>
        <th>  </th>

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

            $sql = "SELECT id, firstname,lastname, phonenumber,age,gender,bloodgroup,disease,amount FROM donationrequests";
            $result = mysqli_query($conn,$sql);

            if(mysqli_num_rows($result) > 0 ){
                while($row = mysqli_fetch_assoc($result)){

                    echo "<tr>" .
                            "<td>" . $row['id'] . "</td>" . 
                            "<td>" . $row['firstname'] . "</td>" . 
                            "<td>" . $row['lastname'] . "</td>" . 
                            "<td>" . $row['phonenumber'] . "</td>" . 
                        "<td>" . $row['age'] . "</td>" . 
                        "<td>" . $row['gender'] . "</td>" . 
                        "<td>" . $row['bloodgroup'] . "</td>" . 
                        "<td>" . $row['disease'] . "</td>" . 
                        "<td>" . $row['amount'] . "</td>" . 
                        '<td >  <a href="rejectdonation.php?phonenumber='.$row['phonenumber'].'"onclick="return uyari(); ">Reject</a> </td>' .
                        '<td >  <a href="approvedonation.php?phonenumber='.$row['phonenumber'].'"onclick="return uyari(); ">Approve</a> </td>' .

                      
                         "<tr>";
                }
             
                echo "</table>";
               
            } else{
                echo "No results";
            }
            
            mysqli_close($conn);
        ?>


</table>



</div>

</body>
</html>