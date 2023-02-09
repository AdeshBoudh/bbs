<?php
include('admin/connection.php');
$sql = "SELECT * FROM receivers";
$res = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($res);

    if($count>0)
    {
        while($row=mysqli_fetch_assoc($res))
        {
          $rname = $row['rname'];
        }
      }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Hospital/Clinic</title>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  <style>
    .container{
      height: 100%;
    }
    .heading {
      display: flex;
      flex-direction: column;
      color: white;
      justify-content: center;
      align-items: center;
      height: 100%;
      font-size: 100px
    }

    .bg-dark {
      width: 100%;
      height: 90vh;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Blood Bank System</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="rprofile.php">My Account</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="abs.php">Blood available</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="bg-dark">
    <div class="container">
      <div class="heading">
        <span>Hi</span>
        <span><?php echo $rname; ?>!</span>
      </div>
    </div>
  </div>
  <?php require 'footer.php' ?>
</body>

</html>