<?php

class ServicioFactory1 extends ServicioFactory {
    function createService($type) {
        if($type == 'Regular') {
            return new Serviciok1();
        } elseif ($type == 'cedazo') {
            return new DispensarioFamily();
        } elseif ($type == 'cartucho') {
            return new LlenadoFamily();
        } elseif ($type == 'cartucho') {
            return new ControlinvenarioFamily();
        }elseif ($type == 'empaques') {
            return new OtrosFamily();
    }
    }
}

?>

<!--cedazo-->
<!--cartucho-->
<!--sonda-->
<!--empaques-->

