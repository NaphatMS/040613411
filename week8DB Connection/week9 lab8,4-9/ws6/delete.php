<?php 
    include "conection.php"
?>

<?php
$stmt = $pdo->prepare("DELETE FROM member WHERE username=?");
$stmt->bindParam(1, $_GET["username"]); // ก าหนดค่าลงในต าแหน่ง ?
if ($stmt->execute()) // เริ่มลบข้อมูล
header("location: workshop_6.php"); // กลับไปแสดงผลหน้าข้อมูล

?>