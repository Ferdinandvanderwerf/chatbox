<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Opdracht</title>
</head>
<body>

<?php

$counter = 1;

echo "<table border=1 align=center>";
echo "<tr><th>Kolom 1</th>";
echo "<th>Kolom 2</th>";
echo "<th>Kolom 3</th></tr>";

while ( $counter <= 10 ) {


$macht = pow($counter,2);
$macht1 = pow($counter,3);
  
	
	echo "<tr><td>";
	echo $counter;
	echo "</td><td>";

	echo $macht;
	echo "</td><td>";
	echo $macht1;
	echo "</td></tr>";
	$counter++;

}
echo "</table>";
?>
  </table>
</body>
</html>

