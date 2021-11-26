<?php
include_once 'ServicioFactory.php';
include_once 'Servicio.php';
include_once 'ServicioFactory1.php';
include_once 'Serviciok1.php';
//include_once 'ServicioFactory2.php';
//include_once 'Serviciok2.php';

//KIT-1
$ServicioFactory = new ServicioFactory1();
$Servicio = $ServicioFactory->orderService('Regular');
$Servicio->getName();

////KIT-2
//$pizzaStore = new NYPizzaStore();
//$pizza = $pizzaStore->orderPizza('cheese');
//$pizza->getName();



?>

