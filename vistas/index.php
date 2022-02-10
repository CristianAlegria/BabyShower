<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <script src="../js/jquery.js"></script>
    <script src="../js/myjava.js"></script>

    <title>Samuel David Arango Tovar</title>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/coming-soon.min.css" rel="stylesheet">

    <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

  </head>

  <body>

    <div class="overlay"></div>

    <div class="masthead">
      <div class="masthead-bg"></div>
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-12 my-auto">
            <div class="masthead-content text-white py-5 py-md-0">
              <h2 class="mb-3">Samuel David Arango Tovar</h2>               
                <p class="mb-5"><blockquote> Doy gracias a Dios nuestro Señor, por concederme el don de la vida.
                  A mis padres Carlos Arango y Laura Marcelo Tovar, por esperarme con tanto amor.
                  y a ti, por acompañarme en este día tan especial. </blockquote>
                   <strong>© alegriasoft</strong></p>
               <form name="formulario"   method="post" enctype="multipart/form-data" action="RegistroRegalo.php" onsubmit="return validar()" > 
                  <span id="mensajes"></span>               
                  <div class="input-group input-group-newsletter">
                     <input name="cedula" id="cedula" type="text" class="form-control" placeholder="Cédula" aria-label="Search for..." onblur="validarCedula()">  
                  </div>               
                  </br>
                  <div class="input-group input-group-newsletter">
                     <input name="nombreCompleto" id="nombreCompleto" type="text" class="form-control" placeholder="Nombre Completo" aria-label="Search for...">  
                  </div> 
                  </br>
                  <div class="input-group input-group-newsletter">             
                     <input name="telefono" id=telefono type="text" class="form-control" placeholder="Teléfono" aria-label="Search for...">
                  </div>                 

                </br>
                <div class="input-group input-group-newsletter">
                   <span class="input-group-btn">
                    <button id="idRegistraRegalo" class="btn btn-secondary" type="submit">Registra tu regalo</button>
                   </span>
                </div>
                </br>              
              </form>
                 <form id="consultaRegalo">
                   <div class="input-group input-group-newsletter" id="mensajeRegaloPersona" >                                
                          <input name=cedulaR id="cedulaR" type="text" class="form-control" placeholder="Cédula" aria-label="Search for...">                     
                            <span class="input-group-btn">                          
                                <button id="busca-regaloPersona" class="btn btn-secondary"  type="submit" >Consulta tu regalo</button>
                              </span>                                                            
                    </div>
                  </form>               
            </div>
          </div>
        </div>
      </div>
    </div>   


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/vide/jquery.vide.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/coming-soon.min.js"></script>

    

  </body>

</html>
