<?php

/**
 * Importamos las bibliotecas necesarias para el funcionamiento
 * del sistema
 */
include('Model/ModelFacadeProduct.php');
//include('Model/ModelFacadeProduct.php');


/**
 * Main class of Facade
 */
class facade{

    private $producto;
    private $xemc;

    private $id_producto;

    private $nombre;
    private $categoria;
    private $no_serie;
    private $cantidad;
    private $fecha;
    private $medida;
    private $marca;
    private $modelo;
    private $origen;
    private $ubicacion;
    private $estado_producto;
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


    public function todos(){
        $result = $this->xemc->obtenerTodos();
        if($result>0){
            return $result;
        }
        return false;
    }




}

?>




