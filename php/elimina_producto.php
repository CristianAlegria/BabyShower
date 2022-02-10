<?php
include('conexion.php');
include_once("../php/Persona.php");
date_default_timezone_set("America/Bogota");
$fecha=date("d/m/Y");
session_start();
$persona=unserialize($_SESSION['persona']);  

$id = $_POST['id'];


//ELIMINAMOS EL PRODUCTO

mysql_query("INSERT INTO persona (id_persona,nombre_completo,telefono)
VALUES (".$persona->getCedula().",'".$persona->getNombre_completo()."','".$persona->getTelefono()."')");
mysql_query("UPDATE productos SET estado = 'ASIGNADO'  WHERE id_prod = '$id'");
mysql_query("INSERT INTO baby_shower (id_persona,id_prod,fecha_registro)
VALUES (".$persona->getCedula().",$id,'$fecha')");


//ACTUALIZAMOS LOS REGISTROS Y LOS OBTENEMOS

$registro = mysql_query("SELECT * FROM productos p,tipo_producto tp
      WHERE (p.id_tipo_producto = tp.id_tipo_producto && p.estado LIKE '%DISPONIBLE%') ORDER BY p.id_prod ASC");


 echo "<script> window.location='../vistas/'; </script>";
?>