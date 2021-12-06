

<?php
/**
 * Creamos una instancia de MySQL para controlar el acceso
 */
require_once("MySQL/xemc_mysql.php");

/**
 * Se define la tabla para almacenar los datos 
 */
define("tabla", "producto");
define("view_Productos", "vproductos");



/**
 * Se creo la clase principa para alamcenar los productos
 */
class FacadeProduct
{
	private $cemc;

	public function __construct()
	{
		$this->cemc = new Mysql();
	}

	/**
	 * [saveProduct Método para almacenar datos en la DB y controlar los errores ]
	 * @return [message] [Inserción correcta o erronea]
	 */
	function saveProduct($nombre
		,                $categoria
		,                $no_serie
		,                $cantidad
		,                $fecha
		,                $medida
		,                $marca
		,                $modelo
		,                $origen
		,                $ubicacion
		,                $estado_producto
		,                $color)
	{
		$this->cemc->conectar();
		$p1 = "INSERT INTO " . tabla;
		$p2 = $p1 . " (nombre
			   ,categoria
			   ,no_serie
			   ,cantidad
			   ,fecha
			   ,medida
		       ,marca
			   ,modelo
			   ,origen
			   ,ubicacion
			   ,estado_producto
			   ,color)";
		$p3 = $p2 . " VALUES ('{$nombre}'
							 ,'{$categoria}'
							 , {$no_serie}
							 , {$cantidad}
							 ,'{$fecha}'
							 ,'{$medida}'
							 ,'{$marca}'
							 ,'{$modelo}'
							 ,'{$origen}'
							 ,'{$ubicacion}'
							 ,'{$estado_producto}'
							 ,'{$color}'
			)";

		$result = $this->cemc->consulta_mysqli($p3);
		$this->cemc->desconectar();
		$r = "";
		if ($result > 0) {
			$r = "
				<center>
					<strong>Los datos se registraron con éxito !!! </strong>
				<center>
			";
			header('Location: ../../View/capt/index_user.php');

		} else {
			$r = "
				<center>
					<strong>
						Error: Se ha presentado un error al cargar los datos :( 
					</strong>
				</center>
			";
		}
		return $r;
	}


	function obtenerTodos()
	{
		$this->cemc->conectar();
		$sql = "SELECT * FROM " . view_Productos;
		$query = $this->cemc->objetos($sql);
		return $query;
		$r = "";
		if ($resultado > 0) {
			$r = "";
		} else {
			$r = "";
		}
		return $r;
	}

	function updateProductoPaquete($producto)
	{
		$this->cemc->conectar();
		$sql = "Select * from producto where nombre = '".$producto."';";
        $query = $this->cemc->objeto($sql);
		$stockDescuento = 1;
		if ($query['cantidad'] < 1){
			echo "Stock insuficiente de: $producto <br>";
		} else {
			$stockActual = $reg = $query['cantidad'];
			$stockActual -= $stockDescuento;
			$consulta = "Update producto set cantidad = " . $stockActual . " where nombre = '" . $producto . "';";
			$query = $this->cemc->consulta_mysqli($consulta);
		}
	}
}

?>








