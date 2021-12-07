<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <title>Patient Page</title>
</head>
<body>

<style type="text/css">

    button{
  background-color: red;
  font-weight: bold;
  opacity: 0.9;
  cursor: pointer;}

    *{
	margin: 0;
	padding: 0;
	box-sizing: border-box;}

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
	width: 100%;
	border-collapse: collapse;
}
table th{
	background-color:#8FBC8F;
	text-align: left;
	color: white;
}

table td,table th{
   border: 1px solid gray;
   padding: 10px;
}
th{
	text-align: left;
}
table tr:nth-child(odd){
background-color: #f2fef2;
}
table tr:hover{
   background-color: #ddd;
}
input[type=accept] {
	border-radius: 4px;
	background-color:#8FBC8F;
	border: none;
	color: #FFFFFF;
	text-align: center;
	font-size: 16px;
	padding: 20px;
	width: 100px;
	position: relative;
	cursor: pointer;
	top: 70px;
	left: 235px;
}
input[type=accept]:hover {
background-color:#8FBC8F;
}
.inform{
	background-color: 	#FFEBEE;
	background-position: left -229px;
    height:60px;
    line-height:80px;
    padding:0 0 0 40px;
	margin-right: 1px;
	text-indent: 0px;
	text-align: left;
}
.fas{
    cursor: pointer;
}
.button {
	border-radius: 4px;
	background-color:#8FBC8F;
	border: none;
	color: #FFFFFF;
	text-align: center;
	font-size: 12px;
	padding: 10px;
	width: 130px;
	position: relative;
	cursor:pointer;
	top: 6px;
	left: 1400px;
    display: inline-block;
}
}
</style>

    <!--nav part-->
    <div id="nav">
        <ul> 
            <li><a href="MainPage.php"><i class="fas fa-backward"></i></a></li>
            <li><a href="patient.php"> Patient Home Page </a></li>
        </form>
        </ul>
    </div>

    <h3 class="info"></h3>
    <p class="inform"><i class="fas fa-info-circle"></i> 
        Our patients who will have their first examination in our faculty are required to come to the faculty and apply to the patient admission desk together with their IDs. 
        Applications without identification are not accepted.
    </p>
    <br>
    <br><br>
    <button class="button"><a href="#"><span> Download <i class="fa fa-download"></i></span></a></button>
    <br><br>
    <!--Inform Table-->
    <table border="1" width="100%">
      <table>
      
    <tr class="tr">
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

            $sql = "SELECT id,firstname,lastname,gender,bloodgroup,disease,amount,phonenumber,date FROM patient";
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
                        '<td >  <a href="deletepatient.php?phonenumber='.$row['phonenumber'].'"onclick="return uyari(); ">Delete</a> </td>' .

                         "<tr>";
                }
             
                echo "</table>";
               
            } else{
                echo "No results";
            }
            
            mysqli_close($conn);
        ?>
     
  
  
    
    
    </table>
        <a href="AddPatient.php">

        <button class="button"><span> Add <i class="fas fa-plus-circle"></i></span></a></button>
        </a>
</body>
</html>