<?php
//Paquete Regular
class Serviciok1 extends Servicio {
    public function __construct() {
        parent::__construct();

        $nombre = $this->name = 'Servicio de Mantenimiento Regular';
        $disp = $this->Dispensario = 'Cedazo';
        $llenado = $this->Equipollenado = 'Cartucho';
        $cinv = $this->Controlinventario = 'Sonda';
        $otro = $this->Otros = 'Empaque';
    }
}
//Paquete Preventivo
class Serviciok2 extends Servicio {
    public function __construct() {
        parent::__construct();
        $nombre = $this->name = 'Servicio de Mantenimiento Preventivo';
        $disp = $this->Dispensario = "Sensores";
        $llenado = $this->Equipollenado = 'Cables';
        $cinv = $this->Controlinventario = 'Regla';
        $otro = $this->Otros = 'Pasta';
    }
}
?>