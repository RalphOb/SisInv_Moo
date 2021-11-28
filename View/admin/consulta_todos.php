

Plan de calidad
              <table>
                <thead>
                  <tr>
                    <th>Identificador</th>
                    <th>nombre</th>
                    <th>categoria</th>
                    <th>no_serie</th>
                    <th>cantidad</th>
                    <th>fecha</th>
                    <th>medida</th>
                    <th>marca</th>
                    <th>modelo</th>
                    <th>origen</th>
                    <th>ubicacion</th>
                    <th>estado_producto</th>
                    <th>color</th>
                  </tr>
                </thead>
                <tbody>
<?php

	include('../../Controller/Facade_Registrar_Producto.php');
  $producto = new Facade();
  $arr = $producto ->todos();

  foreach($arr as $fila){
?>

                    <tr>
                      <td><?PHP echo $fila[0];?></td>
                      <td><?PHP echo $fila[1];?></td>
                      <td><?PHP echo $fila[2];?></td>
                      <td><?PHP echo $fila[3];?></td>
                      <td><?PHP echo $fila[4];?></td>
                      <td><?PHP echo $fila[5];?></td>
                      <td><?PHP echo $fila[6];?></td>
                      <td><?PHP echo $fila[7];?></td>
                      <td><?PHP echo $fila[8];?></td>
                      <td><?PHP echo $fila[9];?></td>
                    </tr>
<?php } ?>
              </tbody>
            </table>
