<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>DB Project</title>
<style type="text/css">
@import url("css/CSS.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="todo">
  
  <div id="cabecera">
  	<img src="images/swirl.png" width="1188" id="img1">
  </div>
  
  <div id="contenido">
  	<table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px; margin-top: -75px;">
  		<thead>
  			<th>Number</th>
  			<th>ID</th>
  			<th>Product</th>
  			<th>Description</th>
        <th>Price</th>
        <th>Image</th>
  			<th> <a href="new_prod1.php"> <button type="button" class="btn btn-info">New</button> </a> </th>
  		</thead>
  		
  		
  		<?php
      include "conexion.php";
      $sentencia = "SELECT * FROM products";
      $resultado = mysql_query($sentencia);
      while ($fila = mysql_fetch_assoc($resultado))
      {
        echo "<tr>";
          echo "<td>"; echo $fila['numb']; echo "</td>";
          echo "<td>"; echo $fila['id_product']; echo "</td>";
          echo "<td>"; echo $fila['name']; echo "</td>";
          echo "<td>"; echo $fila['description']; echo "</td>";
          echo "<td>"; echo $fila['price']; echo "</td>";
          echo "<td>"; echo "<img src='".$fila['image']."' width='50' >"; echo "</td>";
          echo "<td> <a href='modif_prod1.php?numb=".$fila['numb']."'> <button type='button' class='btn btn-success'>Modify</button> </a> </td>";
          echo "<td> <a href='delete_prod.php?numb=".$fila['numb']."''><button type='button' class='btn btn-danger'>Delete</button></a> </td>";
        echo "</tr>";
      }

      ?>
  	</table>
  </div>
  
	<div id="footer">
  		<img src="images/swirl2.png" id="img2">
  	</div>

</div>


</body>
</html>