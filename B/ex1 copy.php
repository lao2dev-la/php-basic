<?php 
$username = "admin";
$password = md5("admin12345");
unset($username);
unset($password);
//ການເຂົ້າລະຫັດແບບ md5 ກັ້ນ Hacker
//ກວດສອບວ່າໄດ້ປ້ອນຂໍ້ມູນຄົບແລ້ວ ຫຼື ບໍ່
if(isset($username) || isset($password)){
    echo "welcome back sir!: ".$username ."<hr>";
    echo "your password is: ".$password;
}else{
    echo "ທ່ານຍັງບໍ່ໄດ້ໃສ່ username & password";
}
?>