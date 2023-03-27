<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-md-4">
        <h4>ຟອມເພີ່ມຂໍ້ມູນ</h4>
        <form action="formAdd_db.php" method="post">
            <div class="mb-1">
                <label for="username">username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="mb-1">
                <label for="password">password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="mb-1">
                <label for="fname">Firstname</label>
                <input type="text" name="fname" class="form-control">
            </div>
            <div class="mb-1">
                <label for="lname">Lastname</label>
                <input type="text" name="lname" class="form-control">
            </div>
            <div class="mb-1 mt-2">
            <button type="submit" class="btn btn-success">ບັນທຶກ</button>
            <a href="admin_page.php" class="btn btn-warning">ກັບຄືນ</a>
            </div>
        </form>
        </div>
    </div>
    </div>
</body>
</html>