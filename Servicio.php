<?php

abstract class Servicio {
    public $name;
    public $Dispensario;
    public $Equipollenado;
    public $Controlinventario;
    public $Otros;

    function make() {
        echo 'Creando'.$this->name.'<br />';
        echo 'Preparando equipo Dispensario...<br />';
        echo 'Preparando equipo Equipollenado...<br />';
        echo 'Preparando equipo Controlinventario...<br />';
        echo 'Preparando equipo Otros...<br />';

    }

    function search() {
        echo 'Busca los productos en almacen';
    }

    function prepare() {
        echo 'Prepara la orden de servicio';
    }

    function deliver() {
        echo 'Entrega el KIT de servicio con: '.$this->Dispensario." ".$this->Controlinventario." ". $this->Equipollenado." ".$this->Otros;
    }

    function getName() {
        echo  $this->name;
    }
}

?>


