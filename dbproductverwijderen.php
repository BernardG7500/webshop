<?php

$productid = $_GET['productid'];


try {
	$conn = new PDO("mysql:host=localhost;dbname=webshopdb", "root", "");
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// $statement = $conn->prepare('INSERT INTO producten (naam, prijs) VALUES (:fnaam, :fprijs)');
	$statement = $conn->prepare('DELETE FROM producten WHERE id=:fid;');

	$statement->execute([
	'fid' => $productid
	]);

}

catch(PDOExeption $e) {
	echo "Connection failed: " . $e->getMessage();
}

header("Location: index.php");

?>