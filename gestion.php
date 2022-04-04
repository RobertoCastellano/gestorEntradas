<?php
include_once("objeto.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <!--  Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Gestión</title>
</head>
<body class="bg-light">
<?php
	$permiso = "Permiso_24";
	$dia = 86400;
//Verificamos cookie y redireccionamos en el caso que devuelva false
	if($registro->check_cookie()==false){
		$registro->redirect("index.php");
		exit;
	}	
?>
	<div class="container mt-5 pb-5">
		<div class="row border m-4 d-flex justify-content-center align-items-center p-4 shadow p-3 mb-5 bg-body rounded">
			<div class="col-md-9 shadow p-3 mb-5 bg-body rounded">
				<form action ="entrada.php" method="POST" class="border rounded p-4 mx-auto justify-content-center aling-item-center bg-light">
					<h3 class="text-center">GESTIÓN DE ENTRADAS</h3>
						<img src="https://www.apartamentos3000.com/blog/wp-content/uploads/2020/08/alhambra-por-dentro-cover-945x448.jpg" class="rounded img-fluid" class="rounded mx-auto d-block" alt=""><br><br>
							<label class="form-label">Nombre</label>
						<input type="text" class="form-control" name="nombre">
							<label class="form-label">Apellidos</label>
								<input type="text" class="form-control" name="apellidos">
									<label class="form-label">DNI</label>
										<input type="text" class="form-control" name="DNI">
											<label  class="form-label">Edad</label>
												<input type="text" class="form-control" name= "edad">
													<label class="form-label">País</label>
														<select class="form-select" name= "País">
															<option selected disabled value="">Selecciona</option>
															<option>España</option><br>
															<option>Portugal</option><br>
															<option>Francia</option><br>
															<option>Alemania</option><br>
															<option>Italia</option><br>    
														</select><br>
														<label class="form-label">Sexo</label>
														<div>
															<input type="radio" id="hombre" name="Sexo" value="hombre"checked>
															<label>Hombre</label>
														</div>
														<div>
															<input type="radio" id="mujer" name="Sexo" value="mujer">
															<label>Mujer</label>
														</div>
														<div>
															<input type="radio" id="fluido" name="Sexo" value="fluido">
															<label>Fluido</label>
														</div><br>
														<label class="form-label">Discapacidad</label>
														<select class="form-select" name="discapacidad">
															<option selected disabled value="">Selecciona</option>
															<option>No</option><br>
															<option>Auditiva</option><br>
															<option>Visual</option><br>
														</select><br>
														<div class="d-grid gap-2 col-6 mx-auto">
															<button class="btn btn-warning" type="submit">Ir a entradas</button>
															<button class="btn btn-outline-warning" type="submit"><a href="logout.php">Log out</a></button>
														</div>
														<input type="hidden" name="formulario" value="gestion">
													</form>
												</div>
											</div>
										</div>
	</body>
</html>