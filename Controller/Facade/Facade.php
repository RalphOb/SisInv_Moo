

<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/SisInv_Moo/paths.php');
	include(Facade.'Facade_Producto.php');
    $producto = new Facade();
    $producto ->guardarRegistro();

