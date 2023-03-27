<?php
$mypage =__FILE__;
$myversion =PHP_VERSION;
echo "<h3> ກ່ອນເອີ້ນໃຊ້ຟັງຊັນ unset </h3>";
echo "ຕົວແປ mypage = $mypage <br>";
echo "ຕົວແປ myversion = $myversion <br>";
unset($mypage);
unset($myversion);
echo "<h3> ຫຼັງເອີ້ນໃຊ້ຟັງຊັນ unset </h3>";
echo "ຕົວແປ mypage = $mypage <br>";
echo "ຕົວແປ myversion = $myversion <br>";
?>
