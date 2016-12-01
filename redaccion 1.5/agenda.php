<?php
$nombre="";
if (!empty($_REQUEST['nom'])){
$nombre=$_REQUEST['nom'];
}
 
$apellido="";
if (!empty($_REQUEST['ape'])){
$apellido=$_REQUEST['ape'];
}
 
$telefono="";
if (!empty($_REQUEST['tlf'])){
$telefono=$_REQUEST['tlf'];
}
 
 
//Luego sobrescribo el txt
 
$archivo="agenda.txt";
 
     $file=fopen($archivo,"a");
     fwrite($file,$nombre.$apellido.$carrera);
	 fclose($file);
?>
