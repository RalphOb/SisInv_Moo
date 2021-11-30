<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/SisInv_Moo/paths.php');
include_once(Abstract_Factory."ServicioFactory.php");
include_once(Abstract_Factory."Servicio.php");
include_once(Abstract_Factory."ServicioFactory1.php");
include_once(Abstract_Factory."Serviciok1.php");

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
