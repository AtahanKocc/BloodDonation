<?php

session_start();

    define("DB_HOST", "localhost");
    define("DB_USER", "webuser");
    define("DB_PASSWORD", "123456");
    define("DB_DATABASE", "blood_donation");




if(isset($_POST['Login'])){  

    $username=$_POST['username'];
    $password=$_POST['password'];

    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

    $sql = "SELECT * FROM accounts WHERE username ='$username' and password ='$password' ";
    $result = mysqli_query($conn, $sql);

   if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){
        
    $_SESSION['username']=$username;
    $_SESSION['password']=$password;
    
        header ( "location: MainPage.php" );
    
}
    
}
else {
    echo "Wrong username or password !";
    
    }

}
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Login</title>
    <style type="text/css">

    #d{
        position: relative;
        top: 200px;
        left: 570px;

    }
    </style>
</head>
<body>

<div class="w-25 p-3" style="background-color: #eee;" id="d">

<form action="LoginPage.php" method="post">
  <div class="mb-3">
    <label for="user" class="form-label">Username</label>
    <input type="text" class="form-control" id="user" name="username" required>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>

 
  <button type="submit" class="btn btn-primary" name="Login">Login</button>
    
</form>
</div>


</body>
</html>