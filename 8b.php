<?php
$arr = array(
array(1,2,9),
array(3,4,9),
array(5,6,9));
echo"<h2>Matrix</h2>";
for($row=0;$row<3;$row++){
echo"<br>";
	for($col=0;$col<3;$col++){
	echo" ".$arr[$row][$col];
	}
}
echo "<h2> Transpose of matrix</h2>";
for($row=0;$row<3;$row++){
echo"<br>";
	for($col=0;$col<3;$col++){
	echo" ".$arr[$col][$row];
	}
}
?>