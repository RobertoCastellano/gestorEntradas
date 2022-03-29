<?php

//Creamos un objeto llamado registro
Class registro {
	public $permiso = "Permiso_24";
	public $cookieTime = 86400;

	function login(String $usuario, String $password) : bool{

		$datosEnviados = $usuario.":".$password;
		$seguridad = file_get_contents("seguridad.txt");

		if($datosEnviados == $seguridad){
			setcookie("permiso_cookie", $this->permiso, time()+ $this->cookieTime,"/");
			return true;
		}else{
			return false;
		}
	}

	/**
	 * @author Luis Peris
	 * @see Función que le indicas un fichero y te redirecciona a dicho fichero
	 * @param String $where: El ficho al que redireccionará
	 * @return String Devuelve....
	 */
	function redirect(String $where){
		header("Location: ".$where);
	}


	/* Devuelve true/false dependiendo SI existe la cookie */
	function check_cookie() : bool{

		if( $_COOKIE['permiso_cookie'] == "Permiso_24" ){
			return true;
		}
		else{
			return false;
		}		
	}

	function remove_cookie() : bool{
		setcookie("permiso_cookie",false, - 1,"/");
		return true;
	}

};

// Instanciamos el objeto Registro
$registro = new registro();

// Creamos la class/objeto entrada

Class entrada{
	public $edad;
	public $discapacidad;
	public $precio;

	/* RELLENAR CON TODOS LOS CAMPOS */
	function set_data( string $nombre, string $apellidos, int $edad, string $discapacidad, string $DNI){
		$this->edad = (int) $edad;
		$this->discapacidad = (string) $discapacidad;
		$this->nombre = (string) $nombre;
		$this->apellidos = (string) $apellidos;
		$this->DNI = (string) $DNI;

		// Calcula el precio
		$this-> precio();

		return true;
	}

	function get_data() : Array{

		$array = [
			"edad" => $this->edad,
			"precio" => $this->precio,
			"discapacidad"=> $this->discapacidad,
			"nombre"=> $this->nombre,
			"apellidos"=> $this->apellidos,
			"DNI"=> $this->DNI
			];
		return $array;

	}
	/*
		Devolvemos el precio a $
	*/
	function precio() : float{

		if($this->edad > 60){
			$this->precio = 20;
		}
		elseif($this->edad < 15){
			$this->precio = 30;
		}
		else{
			$this->precio=50;
		}
		

		if($this->discapacidad == "Auditiva" ){
			$this->precio = ($this->precio) - 12.5;
		}
		if($this->discapacidad == "Visual" ){
			$this->precio = ($this->precio) - 25;
		}
		return $this->precio;
		// IMPORTANTE!!!!
		// GUARDAMOS EL NUEVO PRECIO EN $this->precio
	}

	function save_file() : bool{

		$json = json_encode( $this->get_data() );

		$id = count( scandir("entradas/") ) - 1;
		file_put_contents("entradas/".date('Y-m-d')." - ".$id.".txt", $json);

		return true;
	}

};

// Instanciamos el objeto entrada
$entrada= new entrada();

?>