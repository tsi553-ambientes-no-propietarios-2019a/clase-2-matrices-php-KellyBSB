<!DOCTYPE html>
<html>
<body>

<table border="1">
<tr>
<th>Nombre</th>
<th>Apellido</th>
<th>Edad</th>
</tr>


<?php
$arr = array(
array('Kelly', 'Soto', 21),
array('Karla','Sanchez',18),
array('Debora','Catuamba',16),
);

foreach ($arr as  $value) {
	echo '<tr>';
	foreach ($value as  $value1) {
		echo "<td>".$value1."</td>";
	}
}
?>
</table>

</body>
</html>

