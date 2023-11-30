<?php 
require_once('includes/conexion.php');

class modelo{

	public $CNX1;

	public function __construct(){
		$this->CNX1=conexion::mysql2();

	}
	

	public function registrarUsuario($nombres, $apellidos, $id_tipo_documento, $num_documento, $email, $telefono_contacto, $direccion_domicilio, $fecha_nacimiento, $contrasena)
	{   
		try {
            $sql = "INSERT INTO `usuario`(`nombres`, `apellidos`, `id_tipo_documento`, `num_documento`, `email`, `telefono_contacto`, `direccion_domicilio`, `fecha_nacimiento`, `contrasena`) 
                    VALUES (:nombres, :apellidos, :id_tipo_documento, :num_documento, :email, :telefono_contacto, :direccion_domicilio, :fecha_nacimiento, :contrasena)";
            $stmt = $this->CNX1->prepare($sql);
            $stmt->execute(array(
                ':nombres' => $nombres,
                ':apellidos' => $apellidos,
                ':id_tipo_documento' => $id_tipo_documento,
                ':num_documento' => $num_documento,
                ':email' => $email,
                ':telefono_contacto' => $telefono_contacto,
                ':direccion_domicilio' => $direccion_domicilio,
                ':fecha_nacimiento' => $fecha_nacimiento,
                ':contrasena' => $contrasena,
            ));
            return array(1);
        } catch (Exception $e) {
            //var_dump($e);
            return array(0, "error" => $e);
        }
	}


    public function validarUsuario($correo, $contrasena){
		$sql="SELECT email,nombres,apellidos FROM usuario WHERE email='".$correo."' AND contrasena = '".$contrasena."'";
		$sql=$this->CNX1->prepare($sql);
		$sql->execute();
		$row=$sql->fetch();
		if ($sql->rowCount()==0) {
			$response=array(0);
		}else{
			$response = array(
				1,
				$row["email"],
				$row["nombres"],
				$row["apellidos"],
			);
		}
		//var_dump($response);
		return $response;
	}


    public function listarUsuarios(){
        $sql="SELECT * FROM usuario";
        $sql=$this->CNX1->prepare($sql);
        $sql->execute();
        $row=$sql->fetchAll();
        if($sql->rowCount()==0)
        {
            $response=array("vacio");
        }
        else
        {
            $response=$row;
        }
        return $response;
    }

    public function listarUsuariosDel(){
        $sql="SELECT * FROM usuario";
        $sql=$this->CNX1->prepare($sql);
        $sql->execute();
        $row=$sql->fetchAll();
        if($sql->rowCount()==0)
        {
            $response=array("vacio");
        }
        else
        {
            $response=$row;
        }
        return $response;
    }

	public function listarUsuariosConf(){
        $sql="SELECT * FROM usuario";
        $sql=$this->CNX1->prepare($sql);
        $sql->execute();
        $row=$sql->fetchAll();
        if($sql->rowCount()==0)
        {
            $response=array("vacio");
        }
        else
        {
            $response=$row;
        }
        return $response;
    }


    
	public function tipoDocumento($id){
		$sql="SELECT id,nombre from tipo_documento where id='".$id."'";
		$sql=$this->CNX1->prepare($sql);
		$sql->execute();
		$row=$sql->fetch();
		if ($sql->rowCount()==0) {
			$response="Nulo";
		}else{
			$response=$row['nombre'];
		}
		//var_dump($response);
		return $response;
	}

	public function areaProceso($id){
		$sql="SELECT id,nombre_area from area_trabajo where id='".$id."'";
		$sql=$this->CNX1->prepare($sql);
		$sql->execute();
		$row=$sql->fetch();
		if ($sql->rowCount()==0) {
			$response="Nulo";
		}else{
			$response=$row['nombre_area'];
		}
		//var_dump($response);
		return $response;
	}


    public function eliminarregistro($id)
	{
		try {
			$sql = "DELETE FROM `usuario` WHERE `id` = '$id'";
			$sql = $this->CNX1->prepare($sql);
			$sql->execute();
			return array(1);
		} catch (Exception $e) {
			return array(0, $e);
		}
	}

    public function eliminarregistroVerf($id){
		$sql="SELECT id,estado from usuario where id='".$id."'";
		$sql=$this->CNX1->prepare($sql);
		$sql->execute();
		$row=$sql->fetch();
		if ($sql->rowCount()==0) {
			$response=array(0);
		}else{
			$response=array(1,$row['estado']);
		}
		//var_dump($response);
		return $response;
	}


    public function infoUser($id){
		$sql="SELECT * from usuario where id='".$id."'";
		$sql=$this->CNX1->prepare($sql);
		$sql->execute();
		$row=$sql->fetch();
		if ($sql->rowCount()==0) {
			$response=array(0);
		}else{
			$response = array(
				1,
				$row["nombres"],
				$row["apellidos"],
				$row["id_tipo_documento"],
				$row["num_documento"],
				$row["email"],
				$row["telefono_contacto"],
                $row["direccion_domicilio"],
				$row["fecha_nacimiento"],
				$row["contrasena"],
				$row["estado"],
				$row["id_area"],
			);
        }
		//var_dump($response);
		return $response;
	}


    public function modificarUsuario($id,$nombres,$apellidos,$id_tipo_documento,$num_documento,$email,$telefono_contacto,$direccion,$fecha_nacimiento,$contrasena)
	{
		try {
			$sql = "UPDATE `usuario` SET 
			`nombres`=:nombres,
			`apellidos`=:apellidos,
			`id_tipo_documento`=:id_tipo_documento,
			`num_documento`=:num_documento,
			`email`=:email,
			`telefono_contacto`=:telefono_contacto,
			`direccion_domicilio`=:direccion_domicilio,
			`fecha_nacimiento`=:fecha_nacimiento,
			`contrasena`=:contrasena
			WHERE `id`=:id";
			$sql = $this->CNX1->prepare($sql);
			$sql->execute(array(
				':id' => $id,
				':nombres' => $nombres,
				':apellidos' => $apellidos,
				':id_tipo_documento' => $id_tipo_documento,
				':num_documento' => $num_documento,
				':email' => $email,
				':telefono_contacto' => $telefono_contacto,
                ':direccion_domicilio' => $direccion,
				':fecha_nacimiento' => $fecha_nacimiento,
				':contrasena' => $contrasena,
			));
            //var_dump($sql);
			return array(1);
		} catch (Exception $e) {
            //var_dump($e);
			return array(0, $e);
		}
	}


	public function asociarAreaEmpleado($id,$areaProceso)
	{
		try {
			$sql = "UPDATE `usuario` SET 
			`estado`=:estado,
			`id_area`=:id_area
			WHERE `id`=:id";
			$sql = $this->CNX1->prepare($sql);
			$sql->execute(array(
				':id' => $id,
				':estado' => "1",
				':id_area' => $areaProceso,
			));
            //var_dump($sql);
			return array(1);
		} catch (Exception $e) {
            var_dump($e);
			return array(0, $e);
		}
	}



}
?>