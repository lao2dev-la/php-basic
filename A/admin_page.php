<?php session_start();?>
<?php 

if (!$_SESSION["id"]){  //check session
      Header("Location: index.php"); //ບໍ່ພົບຜູ້ໃຊ້ກະໂດດກັບໄປໜ້າ login form 

}else{?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Admin page</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>

   <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>ລາຍການສະມາຊິກ</h3>
        <a href="member.php?add" class="btn btn-success">ເພີ່ມຂໍ້ມູນ</a>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">ລຳດັບ</th>
      <th scope="col">ຊື່ຜູ້ໃຊ້ລະບົບ</th>
      <th scope="col">ຊື່</th>
      <th scope="col">ນາມສະກຸນ</th>
      <th scope="col">ແກ້ໄຂ</th>
      <th scope="col">ລຶບ</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      include("./condb.php");
      $sql = $conn->prepare("SELECT * FROM users");
      $sql->execute();
      $result = $sql->fetchAll();
      foreach($result as $row){
    ?>
    <tr>
      <th scope="row"><?= $row["id"]; ?></th>
      <td><?= $row["username"]; ?></td>
      <td><?= $row["firstname"]; ?></td>
      <td><?= $row["lastname"]; ?></td>
      <td><a href="#" class="btn btn-warning">ແກ້ໄຂ</a></td>
      <td><a href="#" class="btn btn-danger">ລຶບ</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
      </div>
    </div>
   </div>

</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<?php }?>
