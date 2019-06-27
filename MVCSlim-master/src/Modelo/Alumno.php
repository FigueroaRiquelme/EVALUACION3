<?php
namespace Modelo;

class Alumno extends Usuario
{


	public $rut;
	public $carrera;
	protected $database;

	public function __construct($container)
	{	
		$this->database = $container->database;
	}
	
	
public function datos(){
		$arr2 = parent::udatos();
		$arr1 = $this->database->select('alumno', ['rut', 'carrera']);
		$arr = array_merge($arr1, $arr2);
		return $arr;
	}




public function getid($rut)
	{
		$gid = $database->select("alumno",["id_usuario"],["rut"=>$rut]);
		return $gid;
	}


	

	public function agregar($rut,$nombre,$carrera,$usuario,$pass)
	{
	

		$x = parent::uagregar($nombre,$usuario,$pass);
		$this->database->query("insert into alumno(id_usuario,carrera,rut)
		values('$x','$carrera','$rut');");

	
	}


	public function modificar($rut,$nombre,$carrera,$usuario,$pass)
	{


	$this->database->query("update alumno set carrera = '$carrera' 
			where rut = $rut;");





		//$z= getid($rut);

		
	//parent::umodificar($nombre,$usuario,$pass,$z);

		


	}




	
	public function eliminar($rut)
		{


			$x= $this->getid($rut);

			$this->database->query("insert into test (variable) 
		values ('$x');");

	}


}
?>