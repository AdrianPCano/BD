<?php
  include "conexion.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>New Product</title>
<link rel="stylesheet"  href="css/bootstrap.css">
<link rel="stylesheet"  href="css/CSS.css">
</head>
<body>
<div class="todo">
  
  <div id="cabecera">
  	<img src="images/swirl.png" width="1188" id="img1">
  </div>
  
  <div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px; margin-top: -75px;">
  		<span> <h1>Add a Product</h1> </span>
  		<br>
	  <form action="new_prod2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;" enctype="multipart/form-data" required>
  		<label>Id Product: </label>
  		<input type="text" style="margin-left: 10px;" id="id_product" name="id_product" required><br>
  		
  		<label>Product: </label>
  		<input type="text" style="margin-left: 25px;" id="product" name="product" required><br>
  		
  		<label>Description: </label>
  		<textarea style="border-radius: 10px; margin-bottom: -25px; margin-top: 10px;" rows="3" cols="50" name="description" required></textarea><br>

      <label>Price: </label>
      <textarea type="text" style="margin-left: 42px; height: 30px; margin-bottom: -10px; margin-top: 25px;" name="price" required></textarea><br>
  		
      <input type="file" name="file1" id="file1" style="margin-top: 10px;">
  		<br>
  		<button type="submit" class="btn btn-success">Save</button>
     </form>
  	</div>
  	
  </div>
  
	<div id="footer">
  		<img src="images/swirl2.png" id="img2">
  	</div>

</div>


</body>
</html>