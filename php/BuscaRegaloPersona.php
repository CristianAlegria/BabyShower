<?php 
 include('conexion.php');
    $_cedula= $_POST['id'];
       $registro = mysql_query("SELECT * FROM productos p,persona pe,baby_shower bs
			WHERE (p.id_prod = bs.id_prod) && ( pe.id_persona = bs.id_persona) &&(pe.id_persona=$_cedula)");
       if(mysql_num_rows($registro)>0){
			while($registro2 = mysql_fetch_array($registro)){
				echo $registro2['nombre_completo'].
				" el regalo que debes llevar es ".$registro2['nomb_prod'];		
			}
		}else{
			echo "Debes registrar tu regalo";
					
		}

 ?>