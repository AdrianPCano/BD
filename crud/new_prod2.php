<?php
	include 'conexion.php';

	NewProduct($_POST['id_product'], $_POST['product'], $_POST['description'], $_POST['price']);

	function NewProduct($id_prod, $name, $descrip, $price)
	{
		echo $sentencia="INSERT INTO products (id_product, name, description, price) VALUES ('".$id_prod."', '".$name."', '".$descrip."', '".$price."')";
		mysql_query($sentencia) or die (mysql_error());
	}
	if ($_FILES["file1"]["error"] > 0) {
		
	}else{

	$nameimg=$_FILES['file1']['name'];// gets the name of the image
	$archivo=$_FILES['file1']['tmp_name'];// image file
	$ruta="images";

	$ruta=$ruta."/".$nameimg;// images/name.jpg
	move_uploaded_file($archivo, $ruta);
	$query="INSERT INTO products (image) VALUES('$ruta')";
	include 'conexion.php';
	mysql_query($query) or die(mysql_error());
	}
?>

<script type="text/javascript">
	alert("New Product added");
	window.location.href='index.php';
</script>