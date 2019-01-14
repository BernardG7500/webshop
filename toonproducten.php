<?php

$conn = new PDO("mysql:host=localhost;dbname=webshopdb", "root", "");

$stmt = $conn ->query("SELECT * FROM producten");

$x=1;
while ($row = $stmt ->fetch()) {
	echo "<LI>".$x." (id=".$row["id"].") ".$row["naam"].": " . $row["prijs"] . "</LI>";
	$x++;
}

?>