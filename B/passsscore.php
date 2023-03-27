<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>passscore</title>
</head>
<body>
    <form action="./passsscore.php" method="post">
        <label for="username">username:</label>
        <input type="text" name="username">
        <label for="password">password:</label>
        <input type="password" name="password">
        <input type="submit" value="ກວດສອບຄະແນນ">
    </form>
<?php
error_reporting(E_ALL ^ E_NOTICE);
//ຮັບຄ່າຈະຟອມ html
$username = $_REQUEST['username']; //ຮັບຄ່າທີ່ສົ່ງມາຈາກຟອມ
$password =md5($_REQUEST['password']); //ຮັບຄ່າທີ່ສົ່ງມາຈາກຟອມ
if(isset($username) ||isset($password) ){
    echo "  $username "." ".$password ;
}else{
    echo " $username "." ".$password;
}
?>
</body>
</html>