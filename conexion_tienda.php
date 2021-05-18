<!DOCTYPE html>
<html>
<head>
	<title>Cuenta</title>
<link href="Tienda.css" rel="stylesheet" type="text/css">

	<body background="https://i.postimg.cc/bYF0HWC8/fondo-pared-madera-negra-38607-401.jpg">
<center>
<h2 id="visor_imagenes">Cuenta</h2>
</head>
<body>

<table style="background-color: skyblue; width:90px;">
<td>



	
<?php
 $ar = fopen("datos_tienda.txt", "a") or
    die("Problemas en la creacion");
        
  fputs($ar, "Datos:");
   fputs($ar, "\n");
  fputs($ar, "Nombre:");
  fputs($ar, $_REQUEST['nombre']);
  fputs($ar, "\n");
  fputs($ar, "Dirección:");
  fputs($ar, $_REQUEST['direccion']);
  fputs($ar, "\n");
   fputs($ar,"************");
   fputs($ar, "\n");
  fputs($ar,"Compra:");
   fputs($ar,"\n");
  if (isset($_REQUEST['DoritosBBQ'])) {
    fputs($ar, "Cantidad de Doritos BBQ:");
    fputs($ar, $_REQUEST['cantbbq']);
    fputs($ar, "\n");
  }
  if (isset($_REQUEST['DoritosTexmex'])) {
    fputs($ar, "Cantidad de Doritos Texmex:");
    fputs($ar, $_REQUEST['canttexmex']);
    fputs($ar, "\n");
  }
  if (isset($_REQUEST['DoritosChili'])) {
    fputs($ar, "Cantidad de Doritos Chili:");
    fputs($ar, $_REQUEST['cantchili']);
    fputs($ar, "\n");
  }


if (isset($_REQUEST['DoritosDippas'])) {
    fputs($ar, "Cantidad de Doritos Dippas:");
    fputs($ar, $_REQUEST['cantdippas']);
    fputs($ar, "\n");
  }




  fputs($ar, "\n");
   echo "El pedido se cargó correctamente.";
echo "<br>";
echo "***************************************************************";
echo "<br>";


  fclose($ar);
  $ar = fopen("datos_tienda.txt", "r") or
    die("No se pudo abrir el archivo");
  while (!feof($ar)) {
    $linea = fgets($ar);
    $lineasalto = nl2br($linea);
    echo $lineasalto;
  }
  fclose($ar);


 





  




?>
</table>
</td>	
</center>



</body>
</html>