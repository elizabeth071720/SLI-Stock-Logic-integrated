<?php 
require_once('modelo.php');

class controller{

	public $MODEL;

	public function __construct(){
		$this->MODEL=new modelo();
	}


    public function registrarUsuario()
	{
        //var_dump($_REQUEST);
		$datos = $this->MODEL->registrarUsuario(
			$_POST['nombres'], 
			$_POST['apellidos'], 
			$_POST['tipo_documento'], 
			$_POST['numero_documento'], 
			$_POST['correo'],
			$_POST['tel_contacto'], 
			$_POST['direccion'], 
			$_POST['fecha_nacimiento'], 
			$_POST['contrasena'],
		);
        //var_dump($datos);
		if ($datos[0] == 1) {
			echo json_encode(array(1));
		} else {
			echo json_encode(array(0));
		}
	}


	public function validarUsuario()
	{
        //var_dump($_REQUEST);
		$datos = $this->MODEL->validarUsuario(
			$_POST['correo'],
			$_POST['contrasena']
		);
        //var_dump($datos);
		if ($datos[0] == 1) {
			echo json_encode(array(
				1,
				$datos[1],
				$datos[2],
				$datos[3]
			));
		} else {
			echo json_encode(array(0));
		}
	}


	
	public function listarUsuarios()
    {
     $datos=$this->MODEL->listarUsuarios();
     if($datos[0]=="vacio"){
         echo '0 resultados para la busqueda';
         die();
     }
     include 'tables/tableUser.php';
    }

	public function listarUsuariosDel()
    {
     $datos=$this->MODEL->listarUsuariosDel();
     if($datos[0]=="vacio"){
         echo '0 resultados para la busqueda';
         die();
     }
     include 'tables/tableUserDel.php';
    }


	public function listarUsuariosConf()
    {
     $datos=$this->MODEL->listarUsuariosConf();
     if($datos[0]=="vacio"){
         echo '0 resultados para la busqueda';
         die();
     }
     include 'tables/tableConf.php';
    }


	public function tipoDocumento($id){
		$datos=$this->MODEL->tipoDocumento($id);
		echo $datos;
	}

	public function areaProceso($id){
		$datos=$this->MODEL->areaProceso($id);
		echo $datos;
	}

	public function eliminarregistro()
	{
		$datos = $this->MODEL->eliminarregistro($_POST['id']);
		//var_dump($datos);
		if ($datos[0] == 1) {
			echo json_encode(array(1));
		} else {
			echo json_encode(array(0));
		}
	}

	public function eliminarregistroVerf()
	{
		$datos = $this->MODEL->eliminarregistroVerf($_POST['id']);
		if ($datos[0] == 1) {
			echo json_encode(array(1, $datos[1]));
		} else {
			echo json_encode(array(0));
		}
	}


	public function infoUser()
    {
     $datos=$this->MODEL->infoUser($_POST['id']);
		if ($datos[0] == 0) {
			echo json_encode(array(0));
		} else {
			echo json_encode(array(
				1,
				$datos[1],
				$datos[2],
				$datos[3],
				$datos[4],
				$datos[5],
				$datos[6],
				$datos[7],
				$datos[8],
				$datos[9],
				$datos[10],
				$datos[11]
			));
		}
    }

	public function modificarUsuario()
	{
		//var_dump($_REQUEST);
		$datos = $this->MODEL->modificarUsuario(
			$_POST['id'],
			$_POST['nombres'], 
			$_POST['apellidos'], 
			$_POST['tipo_documento'], 
			$_POST['numero_documento'], 
			$_POST['correo'],
			$_POST['tel_contacto'], 
			$_POST['direccion'], 
			$_POST['fecha_nacimiento'], 
			$_POST['contrasena'], 
		);
        //var_dump($datos);
		if ($datos[0] == 1) {
			echo json_encode(array(1));
		} else {
			echo json_encode(array(0));
		}
	}


	public function asociarAreaEmpleado()
	{
		//var_dump($_REQUEST);
		$datos = $this->MODEL->asociarAreaEmpleado(
			$_POST['id'],
			$_POST['areaProceso'], 
		);
        //var_dump($datos);
		if ($datos[0] == 1) {
			echo json_encode(array(1));
		} else {
			echo json_encode(array(0));
		}
	}



}
if (isset($_POST['funcion'])) {
	call_user_func(array(new controller, $_POST['funcion']));
}
?>