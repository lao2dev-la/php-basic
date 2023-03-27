<?php 
$username ="admin";
$password=md5('#DSsdfdfdsasas');
unset($password);
unset($username);
if(isset($username) || isset($password)){
    echo $username.'<br>';
    echo $password.'<br>';
}else{
    echo "NO";
}

?>