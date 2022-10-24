<?php
	$a = $_GET["a"];
	$b = $_GET["b"];
	$c = $_GET["c"];
	echo "<b>ผลลัพธ์</b> คือ ";
	echo ((int)$a*30) + ((int)$b*70 )+ ((int)$c*30);
?>