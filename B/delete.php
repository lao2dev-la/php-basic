<?php
if(isset($_GET['id'])){
    include("./condb.php");
    $id =$_GET['id'];
    $sql =$conn->prepare("DELETE FROM users WHERE id = :id");
    $sql->bindParam(':id',$id,PDO::PARAM_INT);
    $sql->execute();

    // sweet alert 
    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';

 if($sql->rowCount() > 0){
        echo '<script>
             setTimeout(function() {
              swal({
                  title: "ລຶບຂໍ້ມູນສຳເລັດ",
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
}

?>