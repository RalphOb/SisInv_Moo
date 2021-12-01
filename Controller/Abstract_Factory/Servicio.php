<?php

abstract class Servicio {
    public $name;
    public $Dispensario;
    public $Equipollenado;
    public $Controlinventario;
    public $Otros;

    function make() {
        echo 'Verificando Disponibilidad...<br />';
        echo 'Creando'.$this->name.'<br />';


    }

    function search() {
        echo 'Buscando los productos en almacen <br>';
    }

    function prepare() {
        echo 'Prepara la orden de servicio <br>';
    }

    function deliver() {
        echo 'El Kit Contiene:<br> '.$this->Dispensario.' <br>'.$this->Controlinventario.'<br> '. $this->Equipollenado." <br>".$this->Otros;
    }

    function getName() {
        echo  $this->name;
    }
}

?>


