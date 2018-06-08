<?php
	include "conexion.php";

	DeleteProduct($_GET['numb']);

	function DeleteProduct($numb)
	{
		$sentencia="DELETE FROM products WHERE numb='".$numb."' ";
		mysql_query($sentencia) or die (mysql_error());
	}
?>

<script type="text/javascript">
	alert("Product successfully removed");
	window.location.href='index.php';
</script>