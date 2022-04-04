<?php
include_once("objeto.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
  <title>Index.php</title>
</head>
<body class="bg-light">

<?php

if( isset($_POST["formulario"]) ){

	$resultado = $registro->login($_POST["usuario"], $_POST["password"]);

	if($resultado === true){
		$registro->redirect("gestion.php");
	}else{
		$error = "Usuario y contraseña incorrecto";
	}
}
?>
	<div class="container mt-5">
		<div class="row border m-4 d-flex justify-content-center align-items-center p-4 shadow p-3 mb-5 bg-body rounded">
			<div class="col-md-9 shadow p-3 mb-5 bg-body rounded">
				<h2 class="text-center">Ven a visitar la Alhambra</h2>
				<img src="https://granadaapie.com/wp-content/uploads/2021/01/pexels-julio-gm-4472152-1-scaled-2560x1280.jpg" class= "rounded img-fluid" class="d-block mx-auto"  alt="...">
				<div class="">
					<?php
						if( isset($error) === true ){
							echo '<br><div class="alert alert-danger">'.$error.'</div>';
						}
					?>
					<form action="" method="POST">
						<!-- Campo email -->
						<div class="form-outline mt-3">
							<input type="text" class="form-control" name="usuario" placeholder="Usuario"/>
						</div><br>
						<!--Campo contraseña -->
						<div class="form-outline mb-4">
							<input type="password" class="form-control" name="password" placeholder="Contraseña"/>
						</div>
						<!-- 2 columnas grid -->
						<div class="row mb-4">
							<div class="col d-flex justify-content-center">
								<!-- Botón oculto-->
								<input type="hidden" name="formulario" value="registro">
								<!-- Botón enviar -->
								<div class="d-grid gap-2 col-6 mx-auto">
									<button type="submit" class="btn btn-success mb-4">Enviar</button>
									<!-- Redes sociales -->
									<div class="text-center">
										<p>Síguenos en: </p>
										<button  class="btn btn-success btn-floating mx-1">
											<i class="bi bi-facebook"><a href="Https//:www.facebook.com"></a></i>
										</button>
										<button  class="btn btn-success btn-floating mx-1">
											<i class="bi bi-google"><a href="Https//:www.google.com"></a></i>
										</button>
										<button class="btn btn-success btn-floating mx-1">
											<i class="bi bi-twitter"><a href="Https//:www.twitter.com"></a></i>
										</button>
										<input type="hidden" name="formulario" value="registro">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>  
	</body>
</html>