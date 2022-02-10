
var validacionCedula=true;

$(document).ready(pagination(1));
$(function(){
	$('#bd-desde').on('change', function(){
		var desde = $('#bd-desde').val();
		var hasta = $('#bd-hasta').val();
		var url = '../php/busca_producto_fecha.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'desde='+desde+'&hasta='+hasta,
		success: function(datos){
			$('#agrega-registros').html(datos);
		}
	});
	return false;
	});
	
	$('#bd-hasta').on('change', function(){
		var desde = $('#bd-desde').val();
		var hasta = $('#bd-hasta').val();
		var url = '../php/busca_producto_fecha.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'desde='+desde+'&hasta='+hasta,
		success: function(datos){
			$('#agrega-registros').html(datos);
		}
	});
	return false;
	});
	
	$('#nuevo-producto').on('click',function(){
		$('#formulario')[0].reset();
		$('#pro').val('Registro');
		$('#edi').hide();
		$('#reg').show();
		$('#registra-producto').modal({
			show:true,
			backdrop:'static'
		});
	});
	
	
	$('#bs-prod').on('keyup',function(){
		var dato = $('#bs-prod').val();
		var url = '../php/busca_producto.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'dato='+dato,
		success: function(datos){
			$('#agrega-registros').html(datos);
		}
	});
	return false;
	});
	
});
$(document).ready(function(){
	$("#busca-regaloPersona").click(function(){
	 
	    var mensaje = $("#cedulaR").val();
	 
	    //Devuelve mensaje de 'exito' cuando la información se almacena en la base de datos.
	    var dataString = 'id='+mensaje;
	 
	    if(mensaje=='') {
	        alert("Debes ingresar la cédula");
	    }else{
			    if(!/^([0-9])*$/.test(mensaje)){
				     	alert("El campo cedula debe ser numérico"); 				     	 

				}else{
			        // Codigo ajax del formulario
			        $.ajax({
			 
			            type: "POST",
			            url: "../php/BuscaRegaloPersona.php",
			            data: dataString,
			            cache: false,
			 
			            success: function(resultados){               
			                alert(resultados);
			            }
			 
			        });
		        }
		    }    
     return false; 
   });
})

function validarCedula(){
	 var mensaje = $("#cedula").val();
	 validacionCedula=true; 
	 
	    //Devuelve mensaje de 'exito' cuando la información se almacena en la base de datos.
	    var dataString = 'id='+mensaje;
	     if(/^([0-9])*$/.test(mensaje)){
			    $.ajax({
						 
			            type: "POST",
			            url: "../php/BuscaRegaloPersona.php",
			            data: dataString,
			            cache: false,
			 
			            success: function(resultados){               
			                if(resultados=="Debes registrar tu regalo"){
			                	 validacionCedula=true; 
			                }else{
			                	  validacionCedula=false; 
			                }
			            }
			 
			        });
			}

}
function validar(){
	    var validacion=true;	    
	    var cedula = $("#cedula").val();	    
	    var nombre = $("#nombreCompleto").val();
	    var telefono = $("#telefono").val();  
	 
	    if(cedula=='' || nombre=='' || telefono=='' ) {	    	
	        alert("Los campos cédula, nombre completo y teléfono son obligatorios");
	        validacion=false; 
	    }else{

	    	if (/^([0-9])*$/.test(nombre)){
		        alert("Nombre completo no pueden ser numérico"); 
		         validacion=false; 
		     }
		    if(!/^([0-9])*$/.test(cedula)){
		     	alert("El campo cedula debe ser numérico"); 
		     	validacion=false; 
		    }
		    if(!/^([0-9])*$/.test(telefono)){
		     	alert("El campo telefono debe ser numérico"); 
		     	validacion=false; 
		    }
		    if (validacionCedula==false) {
		    	alert("La cédula ingresada ya tiene un regalo asignado"); 
		    	validacion=false;
		    }
	    }

     return validacion;    
}

function agregaRegistro(){
	var url = '../php/agrega_producto.php';
	$.ajax({
		type:'POST',
		url:url,
		data:$('#formulario').serialize(),
		success: function(registro){
			if ($('#pro').val() == 'Registro'){
			$('#formulario')[0].reset();
			$('#mensaje').addClass('bien').html('Registro completado con exito').show(200).delay(2500).hide(200);
			$('#agrega-registros').html(registro);
			return false;
			}else{
			$('#mensaje').addClass('bien').html('Edicion completada con exito').show(200).delay(2500).hide(200);
			$('#agrega-registros').html(registro);
			return false;
			}
		}
	});
	return false;
}

function eliminarProducto(id){
	var url = '../php/elimina_producto.php';
	var pregunta = confirm('¿Esta seguro que deseas darme este regalito?');
	if(pregunta==true){
		$.ajax({
		type:'POST',
		url:url,
		data:'id='+id,
		success: function(registro){
			$('#agrega-registros').html(registro);
			return false;
		}
	});
	return false;
	}else{
		return false;
	}
}


function editarProducto(id){
	$('#formulario')[0].reset();
	var url = '../php/edita_producto.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'id='+id,
		success: function(valores){
				var datos = eval(valores);
				$('#reg').hide();
				$('#edi').show();
				$('#pro').val('Edicion');
				$('#id-prod').val(id);
				$('#nombre').val(datos[0]);
				$('#tipo').val(datos[1]);
				$('#precio-uni').val(datos[2]);
				$('#precio-dis').val(datos[3]);
				$('#registra-producto').modal({
					show:true,
					backdrop:'static'
				});
			return false;
		}
	});
	return false;
}

function reportePDF(){
	var desde = $('#bd-desde').val();
	var hasta = $('#bd-hasta').val();
	window.open('../php/productos.php?desde='+desde+'&hasta='+hasta);
}

function pagination(partida){
	var url = '../php/paginarProductos.php';
	$.ajax({
		type:'POST',
		url:url,
		data:'partida='+partida,
		success:function(data){
			var array = eval(data);
			$('#agrega-registros').html(array[0]);
			$('#pagination').html(array[1]);
		}
	});
	return false;
}