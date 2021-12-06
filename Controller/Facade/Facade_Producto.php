<?php 

/**
 * Importamos las bibliotecas necesarias para el funcionamiento
 * del sistema
 */
include_once($_SERVER['DOCUMENT_ROOT'].'/SisInv_Moo/paths.php');
include(Model.'ModelFacadeProduct.php');


/**
 * Main class of Facade 
 */
class facade{
	
	protected $producto;
	protected $xemc;
	protected $id_producto;
	protected $nombre;
	protected $categoria;
	protected $no_serie;
	protected $cantidad;
	protected $fecha;
	protected $medida;
	protected $marca;
	protected $modelo;
	protected $origen;
	protected $ubicacion;
	protected $estado_producto;
	private $color;

	/**
	 * [__construct Contructor para realizar la conexión con la clase de 
	 *  FacadeProduct para almacenar los datos ]
	 */
	public function __construct(){
		$this->xemc = new FacadeProduct();
	}


	/**
	 * [guardarRegistro Método para el registro de almacenamiento de datos]
	 * @return [data] [Server Ok, data saved - or - Producto not saved]
	 */
	public function guardarRegistro(){
		$this->setNombre($_POST['nombre']);
		$this->setCategoria($_POST['categoria']);
		$this->setNo_serie($_POST['no_serie']);
		$this->setCantidad($_POST['cantidad']);
		$this->setFecha($_POST['fecha']);
		$this->setMedida($_POST['medida']);
		$this->setMarca($_POST['marca']);
		$this->setModelo($_POST['modelo']);
		$this->setOrigen($_POST['origen']);
		$this->setUbicacion($_POST['ubicacion']);
		$this->setEstado_producto($_POST['estado_producto']);
		$this->setColor($_POST['color']);
		#$this->set($_POST['']);

		$send = $this->xemc->saveProduct( $this->getNombre()
										, $this->getCategoria()
										, $this->getNo_serie()
										, $this->getCantidad()
										, $this->getFecha()
										, $this->getMedida()
										, $this->getMarca()
										, $this->getModelo()
										, $this->getOrigen()
										, $this->getUbicacion()
										, $this->getEstado_producto()
										, $this->getColor()
									);
		echo $send;


	}

	public function todos(){
		$result = $this->xemc->obtenerTodos();
		if($result>0){
			return $result;
		}
		return false;
	}

/**
 * Creamos los set y get para manipular los datos que vienen de la interfaz del usuario
 */
	function setId_producto($id_producto){ $this->id_producto = $id_producto;}
	function getId_producto(){ return $this->id_producto;}


	function setNombre($nombre){ $this->nombre = $nombre;}
	function getNombre(){ return $this->nombre;}


	function setCategoria($categoria){ $this->categoria = $categoria;}
	function getCategoria(){ return $this->categoria;}

	function setNo_serie($no_serie){ $this->no_serie = $no_serie;}
	function getNo_serie(){ return $this->no_serie;}

	function setCantidad($cantidad){ $this->cantidad = $cantidad;}
	function getCantidad(){ return $this->cantidad;}

	function setFecha($fecha){ $this->fecha = $fecha;}
	function getFecha(){ return $this->fecha;}

	function setMedida($medida){ $this->medida = $medida;}
	function getMedida(){ return $this->medida;}

	function setMarca($marca){ $this->marca = $marca;}
	function getMarca(){ return $this->marca;}

	function setModelo($modelo){ $this->modelo = $modelo;}
	function getModelo(){ return $this->modelo;}

	function setOrigen($origen){ $this->origen = $origen;}
	function getOrigen(){ return $this->origen;}

	function setUbicacion($ubicacion){ $this->ubicacion = $ubicacion;}
	function getUbicacion(){ return $this->ubicacion;}

	function setEstado_producto($estado_producto){ $this->estado_producto = $estado_producto;}
	function getEstado_producto(){ return $this->estado_producto;}

	function setColor($color){ $this->color = $color;}
	function getColor(){ return $this->color;}

}

?>


