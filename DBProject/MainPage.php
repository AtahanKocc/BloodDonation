<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Main Page</title>

</head>
<body>

<style type="text/css">
        nav{
            padding: 250px;
        }

        a{
            padding: 40px;
            margin: 40px;
        }
        img{
            position: relative;
            left: 190px;
            top: 50px;
        }
        button{
         float: right;
        }

</style>
<a href="LoginPage.php">
<button type="button" class="btn btn-danger">Logout</button>
</a>

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="Donor.php">Donor</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="donation.php">Donation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="patient.php">Patient</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="BloodRequests.php">Blood Request</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="BloodStock.php">Blood Stock</a>
        </li>


      </ul>
    </div>
  </div>
</nav>

<img src="https://d1nakyqvxb9v71.cloudfront.net/wp-content/uploads/2020/01/Heart-Article-Hero-1200x500.gif">

</body>
</html>