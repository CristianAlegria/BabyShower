<?php
include('conexion.php');

$dato = $_POST['dato'];

//EJECUTAMOS LA CONSULTA DE BUSQUEDA

$registro = mysql_query("SELECT * FROM productos p,tipo_producto tp
      WHERE (p.id_tipo_producto = tp.id_tipo_producto && p.estado LIKE '%DISPONIBLE%') && ( p.nomb_prod LIKE '%$dato%' OR tp.nombre LIKE '%$dato%') ORDER BY p.id_prod ASC");


//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX
echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
            	<th >Nombre</th>
            	<th >Tipo</th>                
                <th >Opciones</th>
            </tr>';
if(mysql_num_rows($registro)>0){
	while($registro2 = mysql_fetch_array($registro)){
		echo '<tr>
				<td>'.$registro2['nomb_prod'].'</td>
				<td>'.$registro2['nombre'].'</td>				
				<td><a href="javascript:eliminarProducto('.$registro2['id_prod'].');" class="glyphicon glyphicon-floppy-saved"></a></td>
				</tr>';
	}
}else{
	echo '<tr>
				<td colspan="6">No se encontraron resultados</td>
			</tr>';
}
echo '</table>';
echo '</div>';
echo '</div>';
?>