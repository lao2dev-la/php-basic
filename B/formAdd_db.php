<?php
// var_dump($_POST);
// exit();
if(isset($_POST['username'])){ //check 
    require_once("./condb.php");//connect db
    $username =$_POST['username'];
    $password = md5($_POST['password']);
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $userlevel = "M";
    //ບັນທຶກລົງໃນຖານຂໍ້ມູນ
    $sql =$conn->prepare("INSERT INTO users
    (username,password,firstname,lastname,userlevel)
    VALUES(:username,:password,:firstname,:lastname,:userlevel)");
    $sql->bindParam(':username',$username, PDO::PARAM_STR);
    $sql->bindParam(':password',$password, PDO::PARAM_STR);
    $sql->bindParam(':firstname',$fname, PDO::PARAM_STR);
    $sql->bindParam(':lastname',$lname, PDO::PARAM_STR);
    $sql->bindParam(':userlevel',$userlevel, PDO::PARAM_STR);
    $result = $sql->execute();
    if($result){
            echo "<script>";
            echo "alert(\' ເພີ່ມຂໍ້ມູນສຳເລັດ! \');";
            header("location:admin_page.php");
            echo "</script>"; 
    }else{
        echo "<script>";
        echo "alert(\' ເພີ່ມຂໍ້ມູນຜິດພາດ! \');";
        header("location:formAdd_db.php");
        echo "</script>"; 
    }
}
?>