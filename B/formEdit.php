<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    <?php 
if(isset($_GET['id'])){
    include("./condb.php");
    $stmt = $conn->prepare("SELECT * FROM users WHERE id=?");
    $stmt->execute([$_GET['id']]);
    $row= $stmt->fetch(PDO::FETCH_ASSOC);
    var_dump($row);
    exit();
    if($stmt->rowCount()<1){
        header("location:admin_page.php");
        exit();
    }
}

?>
    <div class="container">
    <div class="row">
        <div class="col-md-4">
        <h4>ຟອມແກ້ໄຂ</h4>
        <form action="formedit_db.php" method="post">
            <div class="mb-1">
                <label for="username">username</label>
                <input type="text" name="username" class="form-control" value="<?= $row['username']; ?>">
            </div>
            <div class="mb-1">
                <label for="password">password</label>
                <input type="password" value="<?= $row['password']; ?>" name="password" class="form-control">
            </div>
            <div class="mb-1">
                <label for="fname">Firstname</label>
                <input type="text" name="fname" value="<?= $row['firstname']; ?>" class="form-control">
            </div>
            <div class="mb-1">
                <label for="lname">Lastname</label>
                <input type="text" value="<?= $row['lastname']; ?>" name="lname" class="form-control">
            </div>
            <div class="mb-1 mt-2">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <button type="submit" class="btn btn-success">ບັນທຶກ</button>
            <a href="admin_page.php" class="btn btn-warning">ກັບຄືນ</a>
            </div>
        </form>
        </div>
    </div>
    </div>
</body>
</html>