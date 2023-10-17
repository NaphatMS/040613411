<?php
	$m = $_GET["m"];
	$o = $_GET["o"];
	$b	=	$_GET["b"];
	echo "<b>ยอดขาย</b> คือ ";
	echo ($m*30)+ ($b*30)+($o*70);
?>