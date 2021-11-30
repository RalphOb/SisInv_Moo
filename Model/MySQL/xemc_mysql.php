
<?php

	class Mysql{
		private $conexion;
		private $servidor;
		private $usuario;
		private $contrasenia;
		private $base_datos;


		public function __construct(){
				$this->servidor ="localhost";
				$this->usuario = "root";
				$this->contrasenia = "";
				$this->base_datos ="inventario";
		}

		public function conectar(){
				if(!isset($this->conexion)){
						$this->conexion = new mysqli($this->servidor,
													$this->usuario,
													$this->contrasenia,
													$this->base_datos);
					}
			} 
	
		public function conectar_mysql(){
				if(!isset($this->conexion)){
						$this->conexion = mysql_connect($this->servidor,
														$this->usuario,
														$this->contrasenia) or die (mysql_error());
					}
			}

		public function consulta_mysql($sql){
				$result = mysql_query($sql, $this->conexion);
				if(!$result){
					echo "MySQL ERROR: " . mysql_error();
				}
				return $result;
			}

		public  function consulta_mysqli($sql){
				//echo $sql;
				$result = mysqli_query($this->conexion, $sql);
				if(!$result){
					echo "MySQL ERROR: " . mysqli_error($this->conexion);
				}
				return $result;
			}

		public function fetch_assoc_mysqli($result){
			if(!is_resource($result)){
				return false;
			}
			return mysqli_fetch_array($result,MYSQLI_NUM);
		}


		public function fetch_assoc_mysql($result){
			if(!is_resource($result)){
				return false;
			}
			return mysql_fetch_array($result);
		}

		public function objetos($sql){
			$this->conectar();
			$result = $this->conexion->query($sql);
			while($array = $result->fetch_array(MYSQLI_BOTH)){
				$objetos[] = $array;
			}
			return $objetos;
		}
		public function objeto($sql)
		{
			$this->conectar();
			$result = $this->conexion->query($sql);
			$array = $result->fetch_assoc();
			return $array;
		}

		public function desconectar_mysql(){
				mysql_close($this->conexion);
			}

		public function desconectar(){
				mysqli_close($this->conexion);
			}

	}

?>



















