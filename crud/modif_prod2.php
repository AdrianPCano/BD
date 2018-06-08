<?php
	include 'conexion.php';


	ModifyProduct($_POST['id_product'], $_POST['product'], $_POST['description'], $_POST['price'], $_POST['numb']);

	function ModifyProduct($id_prod, $name, $descrip, $price, $num)
	{
		$sentencia="UPDATE products SET id_product='".$id_prod."', name= '".$name."', description='".$descrip."', price='".$price."' WHERE numb='".$num."' ";
		mysql_query($sentencia) or die (mysql_error());
	}
	if ($_FILES["file1"]["error"] > 0) {
		
	}else{

	$nameimg=$_FILES['file1']['name'];// gets the name of the image
	$archivo=$_FILES['file1']['tmp_name'];// image file
	$ruta="images";

	$ruta=$ruta."/".$nameimg;// images/name.jpg
	move_uploaded_file($archivo, $ruta);
	$query="UPDATE products SET image='$ruta' WHERE numb='".$_POST['numb']."'";
	include 'conexion.php';
	mysql_query($query) or die(mysql_error());
	}

?>

<script type="text/javascript">
	alert("Product successfully modified");
	window.location.href='index.php';
</script>