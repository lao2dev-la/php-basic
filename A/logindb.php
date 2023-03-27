<?php 
session_start();
// echo $_POST['username'];
// exit();
    if(isset($_POST['username'])){
        //conect database
        include("./connection.php");
        //ຮັບຄ່າຈາກຟອມ html
     $username = $_POST['username']; //admin
     $password = md5($_POST['password']); //123 = 202cb962ac59075b964b07152d234b70
    //  echo $username; 
    //  echo $password; 
    //  exit();
    //query db
    $sql = "SELECT * FROM users WHERE username='".$username."' AND password='".$password."'";
    $result = mysqli_query($con,$sql);
        if(mysqli_num_rows($result)==1){
        $row =mysqli_fetch_array($result);
            $_SESSION['id']= $row['id'];
            $_SESSION['name']= $row['firstname'];
            $_SESSION['userlevel']= $row['userlevel'];
         if($_SESSION['userlevel']=="A"){
            header("location:admin_page.php");
         }
         if($_SESSION['userlevel']=="M"){
            header("location:member_page.php");
         }
        }else{
            echo"<script>";
            echo"alert(\" username or password is wrong! \");";
            echo "window.history.back()";
            echo"</script>";
        }
    }else{
        header("location:index.php");
    }

?>