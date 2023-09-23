<?php include "connect.php"?>
<html>
<head>
    <meta charset="utf-8">
    <table border = 1px>
</head>
<body>
    <?php
    $stmt = $pdo->prepare("SELECT * FROM product");
    $stmt->execute();
    while ($row = $stmt->fetch()):
        ?>
        <tr>
                <td><?= $row["pid"] ?></td>
                <td><?= $row["pname"] ?></td>
                <td><?= $row["pdetail"] ?></td>
                <td><?= $row["price"] ?> บาท</td>
            </tr>
    <?php endwhile; ?>
</body>
</html>