
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
</nav>
    <!-- navbar end -->

   
        <div class="container my-5">

            <form method="POST" class="bg-dark text-white p-5 rounded-lg">
                <h2 class="my-3 text-center text-warning">Please enter the following details </h2>
                <label > Enter your name : </label>
                <input type="text" name="name" placeholder="E.g. Nilanjan" class="form-control">
                <label > Enter your basic pay : </label>
                <input type="text" name="base" placeholder="E.g. Rs. 28000" class="form-control">
                <label > Enter your DA : </label>
                <input type="text" name="da" placeholder="E.g. Rs. 8000" class="form-control">
                <button type="submit" name="login" class="btn btn-outline-info mt-3">Calculate Salary</button>
            </form>
        <div class="my-4">
    <?php if(!empty($_POST)){
        $name = $_POST['name'];
        $base = $_POST['base'];
        $da = $_POST['da'];
        $salary = $base+$da;
        
            echo "<div class='alert alert-success' role='alert'>
                    Hey {$name}, you salary is Rs. {$salary} !
                    </div>";
        
    }
        
    ?>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>