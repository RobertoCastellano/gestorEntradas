<?php
include_once("objeto.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <!--  Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Entrada</title>
</head>
<body class="bg-light">
<?php
/*
	// EMPTY
		- Variable no definida:			TRUE
		- Variable string vacio:		TRUE

	// ISSET
		- Variable no definida:			FALSE
		- Variable string vacio:		TRUE
*/

// Redireccionamos hacia index.php, comprobación seguridad
if($registro->check_cookie()==false){
	$registro->redirect("index.php");
	exit;
}

// Condicional del formulario
if( empty($_POST["edad"])){
	$registro->redirect("gestion.php");
	exit;
}

	$entrada->set_data($_POST["nombre"], $_POST["apellidos"], $_POST["edad"],$_POST["discapacidad"],$_POST ["DNI"]);
	$datos= $entrada->get_data();	
// Guardamos los datos en un txt en formato JSON
	$entrada->save_file();
?>
<div class="container mt-5 pb-5">
	<div class="row border m-4 d-flex justify-content-center align-items-center p-4 shadow p-3 mb-5 bg-body rounded">
		<div class="col-md-9 shadow p-3 mb-5 bg-body rounded">
	<h5 class="card-title">Entrada para visitar la Alhambra de Granada</h5>
	<img src="https://www.tourinews.es/uploads/s1/16/81/27/alhambra-en-granada-foto-de-tickets-alhambra_4_732x400.jpeg" class="card-img-top" alt="...">
	<div class="card-body">
		<p class="card-text">Miles de personas visitan la Alhambra de Granada cada día y el número de visitantes al día está limitado para ayudar a proteger el complejo. Explore los Palacios Nazaríes, los jardines del Generalife, la Alcazaba, y mucho más.</p>
	</div>
		<!-- ECHO FORMA 1 -->
		<strong>Nombre: </strong> <?php echo $datos["nombre"];?> <br>
		 <!-- ECHO FORMA 2 -->
    <strong>Apellidos: </strong> <?=$datos["apellidos"];?> <br>
		<strong>Edad: </strong> <?=$datos["edad"];?> <br>
		<strong>DNI: </strong> <?=$datos["DNI"];?> <br>
		<strong>Discapacidad: </strong> <?=$datos["discapacidad"];?> <br>
		<strong>Precio: </strong> <?=$datos["precio"];?> €<br><br>
		<button class="btn btn-outline-warning" type="submit"><a href="logout.php">Log out</a></button>
	</div>
</div>
</div>

  
  
</body>
</html>