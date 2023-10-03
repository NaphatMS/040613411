<?php include "connect.php"; ?>
<html>
<head><meta charset="utf-8"></head>
<body>
    <?php
        $stmt = $pdo->prepare("SELECT * FROM member");
        $stmt->execute();
        while ($row = $stmt->fetch()) :
            ?>
            <a href="ws5detail.php?username=<?=$row["username"]?>">
            <?= $row["name"] ?><br>            
            <img src="db/mem_pho/<?= $row["username"] ?>.jpg" width="100" ><br>
            </a><br>
            <hr>
    <?php endwhile; ?>
</body>
</html>

