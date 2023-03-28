<?php 
if(isset($_POST['id'])){
    require_once("./condb.php");
    $id =$_POST['id'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    
    $sql = $conn->prepare("UPDATE users SET username=:username,password=:password,firstname=:fname,lastname=:lname WHERE id=:id");
    $sql->bindParam(':id',$id,PDO::PARAM_INT);
    $sql->bindParam(':username',$username,PDO::PARAM_STR);
    $sql->bindParam(':password',$password,PDO::PARAM_STR);
    $sql->bindParam(':fname',$fname,PDO::PARAM_STR);
    $sql->bindParam(':lname',$lname,PDO::PARAM_STR);
    $result = $sql->execute();
    // sweet alert 
    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';

 if($sql->rowCount() > 0){
        echo '<script>
             setTimeout(function() {
              swal({
                  title: "ແກ້ໄຂຂໍ້ມູນສຳເລັດ",
                  type: "success"
              }, function() {
                  window.location = "admin_page.php"; //ໜ້າທີ່ຕ້ອງການໃຫ້ກະໂດດ
              });
            }, 1000);
        </script>';
    }else{
       echo '<script>
             setTimeout(function() {
              swal({
                  title: "ເກີດຂໍ້ຜິດພາດ",
                  type: "error"
              }, function() {
                  window.location = "formEdit.php"; //ໜ້າທີ່ຕ້ອງການໃຫ້ກະໂດດ
              });
            }, 1000);
        </script>';
    }
$conn = null; //close connect db
} //isset

?>