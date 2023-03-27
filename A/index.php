<?php session_start(); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
        <h3 class="text-center">Form login</h3>
        <form action="logindb.php" method="post">
        <div class="mb-3 row">
        <label for="password" class="col-sm-2 col-form-label">Username:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
    </div>
  </div>
  <div class="mb-3 row">
        <label for="password" class="col-sm-2 col-form-label">password:</label>
        <div class="col-sm-6">
        <input type="password" name="password" placeholder="Enter password" class="form-control">
        </div>
        </div>
        <input type="submit" value="Login" class="btn btn-primary">
    </form>
        </div>
    </div>
</body>
</html>