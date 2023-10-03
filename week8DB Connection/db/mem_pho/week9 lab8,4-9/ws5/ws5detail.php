<?php include "connect.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $stmt = $pdo->prepare("SELECT * FROM member WHERE username LIKE ?");
        $stmt->bindParam(1, $_GET["username"]);
        $stmt->execute(); 
        $row = $stmt->fetch();
    ?>
        <img src="db/mem_pho/<?=$row ["username"]?>.jpg" alt=""><br>
        ชื่อสมาชิก: <?=$row ["name"]?><br>
        ที่อยู่: <?=$row ["address"]?><br>
        อีเมล์: <?=$row ["email"]?><br>
    <?php  ?>
</body>