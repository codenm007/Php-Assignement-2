<?php

    session_start();
    include "retrieve.php";
    include "logic.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <title>Ca 2 Nilanjan</title>
</head>
<body>
    <!-- navabar starting -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Nilanjan Majumdar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Visible only if logged in -->
    <?php if(!empty($_SESSION['username'])){?>
      
    <ul class="navbar-nav ml-auto">

      <li class="nav-item active">
        <a class="nav-link" href="#">My profile <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <form method="POST" class="text-center">
            <button class="btn btn-danger" name="logout">Logout</button>
        </form>
      </li>
      </li>
    </ul>

    <?php }?>
  </div>
</nav>
    <!-- navbar end -->

    <?php if(empty($_SESSION['username'])){?>
        <div class="container my-5">

            <form method="POST" class="bg-dark text-white p-5 rounded-lg">
                <h2 class="my-3 text-center text-warning">Lets login in</h2>
                <input type="text" name="username" placeholder="Username" class="form-control">
                <input type="password" name="password" placeholder="Password" class="form-control mt-3">
                <button type="submit" name="login" class="btn btn-outline-light mt-3">Login</button>
            </form>

        </div>
    <?php }?>

    <!-- Visible only if logged in -->
    <?php if(!empty($_SESSION['username'])){?>
        <div class="container text-center my-5">
            <h1>Hello <?php echo $_SESSION['username'];?></h1>
        </div>
    <?php }?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>