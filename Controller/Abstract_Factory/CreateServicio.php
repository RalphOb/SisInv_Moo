<?php

class Serviciok1 extends Servicio {
    public function __construct() {
        $this->name = 'Servicio de Mantenimiento Regular';
        $this->Dispensario = 'cedazo';
        $this->Equipollenado = 'artucho';
        $this->Controlinventario = 'Sonda';
        $this->Otros = 'Empaques';

//        array
//        $prod = array($this->name,$this->Dispensario,$this->Equipollenado,$this->Controlinventario,$this->Otros);
//        echo "<pre>";
//            print_r($prod);
//             echo "<pre>";




    }
}

class Serviciok2 extends Servicio {
    public function __construct() {
        $this->name = 'Servicio de Mantenimiento Preventivo';
        $this->Dispensario = "Sensores";
        $this->Equipollenado = 'Cables';
        $this->Controlinventario = 'Regla';
        $this->Otros = 'Pasta';


//        $prod = array($this->name,$this->Dispensario,$this->Equipollenado,$this->Controlinventario,$this->Otros);
//        echo "<pre>";
//        print_r($prod);
//        echo "<pre>";
    }}


?>