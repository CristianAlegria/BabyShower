<?php  session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Baby Shower</title>
<link href="../css/estilo.css" rel="stylesheet">
<script src="../js/jquery.js"></script>
<script src="../js/myjava.js"></script>
<link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="../bootstrap/css/style.css" rel="stylesheet">
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../bootstrap/css/bootstrap-theme.css" rel="stylesheet">
<link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap/js/bootstrap.js"></script>
<style >
body {
    background: url(img/bebe.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
</style> 
  

    <!-- Custom styles for this template -->
    <link href="css/coming-soon.min.css" rel="stylesheet">

</head>
<body>               
        <?php
            include_once("../php/Persona.php");

             $persona = new Persona();  
             $persona->setCedula($_POST['cedula']);             
             $persona->setNombre_completo($_POST['nombreCompleto']);
             $persona->setTelefono($_POST['telefono']); 
            

             $_SESSION['persona'] = serialize($persona);

          ?>
        <header>SELECCIONA MI REGALO</header>
         <center><?php echo $_POST['nombreCompleto']; ?></center> 
                <section>
                   <div class="container">   
                      <div class="row">              
                            <table border="0" align="center">
                                <tr>
                                    <td width="500"><input type="text" placeholder="Busca mi regalo por: Nombre, Tipo o dar enter aqu?? para listar los regalos " id="bs-prod"/></td>                         
                                </tr>
                    </table>
                        </div>
                    </div>
                </section>
                <div class="registros" id="agrega-registros"></div>
                <center>
                    <ul class="pagination" id="pagination"></ul>
                </center>
                <!-- MODAL PARA EL REGISTRO DE PRODUCTOS-->
                <div class="modal fade" id="registra-producto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" id="myModalLabel"><b>Registra o Edita un Producto</b></h4>
                        </div>
                        <form id="formulario" class="formulario" onsubmit="return agregaRegistro();">
                        <div class="modal-body">
            				<table border="0" width="100%">
                           		 <tr>
                                    <td colspan="2"><input type="text" required="required" readonly="readonly" id="id-prod" name="id-prod" readonly="readonly" style="visibility:hidden; height:5px;"/></td>
                                </tr>
                                 <tr>
                                	<td width="150">Procesos: </td>
                                    <td><input type="text" required="required" readonly="readonly" id="pro" name="pro"/></td>
                                </tr>
                            	<tr>
                                	<td>Nombre: </td>
                                    <td><input type="text" required="required" name="nombre" id="nombre" maxlength="100"/></td>
                                </tr>
                                <tr>
                                	<td>Tipo: </td>
                                    <td><select required="required" name="tipo" id="tipo">
                                    		<option value="enlatados">Enlatados</option>
                                            <option value="organicos">Organicos</option>
                                            <option value="nocomestibles">No Comestibles</option>
                                            <option value="otros">Otros</option>
                                        </select></td>
                                </tr>
                                <tr>
                                	<td>Precio Unitario: </td>
                                    <td><input type="number" required="required" name="precio-uni" id="precio-uni"/></td>
                                </tr>
                                <tr>
                                	<td>Precio Distribuidor: </td>
                                    <td><input type="number"  required="required" name="precio-dis" id="precio-dis"/></td>
                                </tr>
                                <tr>
                                	<td colspan="2">
                                    	<div id="mensaje"></div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        
                        <div class="modal-footer">
                        	<input type="submit" value="Registrar" class="btn btn-success" id="reg"/>
                            <input type="submit" value="Editar" class="btn btn-warning"  id="edi"/>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>    

  </body>

</html>
