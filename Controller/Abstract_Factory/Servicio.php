<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/SisInv_Moo/paths.php');
require_once (Model.'ModelFacadeProduct.php');
abstract class Servicio{
    public $name;
    public $Dispensario;
    public $Equipollenado;
    public $Controlinventario;
    public $Otros;

    public function __construct()
    {
        echo 'Verificando Disponibilidad...<br/>';
        echo 'El paquete contiene lo siguiente: <br/>';
    }


    function prod1() {
        $valor = new FacadeProduct;
        $lista = $valor->updateProductoPaquete($this->Dispensario);
        echo 'Accesorio de Dispensario: '.$this->Dispensario.'  <br>';
    }
    function prod2() {
        $valor = new FacadeProduct;
        $lista = $valor->updateProductoPaquete($this->Equipollenado);
        echo 'Accesorio de Dispensario: '.$this->Equipollenado.'  <br>';
    }

    function prod3() {
        $valor = new FacadeProduct;
        $lista = $valor->updateProductoPaquete($this->Controlinventario);
        echo 'Accesorio de Dispensario: '.$this->Controlinventario.'  <br>';
    }

    function prod4() {
        $valor = new FacadeProduct;
        $lista = $valor->updateProductoPaquete($this->Otros);
        echo 'Accesorio de Dispensario: '.$this->Otros.'  <br>';
    }
    function getName() {
        echo  'Se ha creado: '.$this->name;
    }
}

?>


