<?php

include("../init.php");

$id = $_POST['id'];


if( mysqli_query($con,"DELETE FROM Dati_clienti WHERE id = $id;"))
	
echo "Sensore:  " . $cod."  eliminato con successo";

	else
		echo "Error";

mysqli_close($con);

?>