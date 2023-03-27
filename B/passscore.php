<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pass score</title>
</head>
<body>
    <form action="passscore.php" method="get">
        <label for="score">ຄະແນນ</label>
        <input type="text" name="score" >
        <input type="submit" value="ກວດສອບຄະແນນ">
    </form>
<?php
error_reporting(E_ALL ^ E_NOTICE);
//ຮັບຄ່າ ຈາກຟອມ
  $score=  $_REQUEST['score'];
  if($score>59){
    echo "ເຈົ້າຜ່ານການສອບເສັງ ຄະແນທ່ານແມ່ນ = $score";
  }else
  {
    echo "ເຈົ້າສອບເສັງບໍ່ຜ່ານ ໄດ້ຄະແນທ່ານແມ່ນ = $score";
  }

?>
</body>
</html>