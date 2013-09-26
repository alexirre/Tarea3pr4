<?php
 $venta=array(34.67, 98.47, 56.34, 12.43, 85.54, 76.49, 23.65, 67.34, 98.76, 8.32, 65.43, 56.76, 30.00, 56.34, 88.88, 39.12, 56.99, 11.34, 100.45);
 $suma=0;        
 for($i=0;$i<=count($venta)-1;$i++){
 $suma+=$venta[$i];
 }
 $promedio=$suma/count($venta);
 echo "El promedio es: ".$promedio."";
?>