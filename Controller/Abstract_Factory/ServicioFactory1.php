<?php

class ServicioFactory1 extends ServicioFactory {
    function createService($type) {
        if($type == 'Regular') {
            return new Serviciok1();
        } elseif ($type == 'Preventivo') {
            return new Serviciok2();
        }elseif ($type == '') {
            return new OtrosFamily();
    }
    }
}

?>

<!--cedazo-->
<!--cartucho-->
<!--sonda-->
<!--empaques-->

