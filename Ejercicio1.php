<html> 
<head> 
   <title>Comparando Números</title> 
</head> 
<body> 
<H1>Ejemplo de formulario</H1> 
<form ACTION="ejercicio_electivo.php" METHOD="GET"> 
   número 1:
   <INPUT TYPE="text" NAME="variable1"><BR> 
   número 2:
   <INPUT TYPE="text" NAME="variable2"><BR> 
   <INPUT TYPE="submit" VALUE="Ejecutar"> 
</form> 
</body> 
<p>
<?php 
$x=intval($_GET['variable1']);
$y=intval($_GET['variable2']);

if ($x>$y){
    echo "El primer número ".$x." es mayor y el segundo numero ".$y." es menor  ";
}
elseif ($x < $y){
    echo "El segundo número ".$y." es mayor y  el primero numero ".$x." es menor ";
}
 ?>
</p>
</html>

