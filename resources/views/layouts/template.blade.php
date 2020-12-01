<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style-gc.css">
    <link rel="stylesheet" href="css/almada.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/modelos.css">
    <title>Gran Calzada</title>
</head>

<body>
    <nav class="fixed-top navbar navbar-expand-lg navbar-dark bg-pink">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/img/Icons/Calzada.svg" width="60" height="60" alt="Gran calzada" loading="lazy">
              </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a class="nav-link mx-5" href="#azul">Ciudad Viva <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-5" href="#blanco">El Desarrollo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-5" href="#">Ubicación</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-5" href="#">Desarrollos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-5" href="#">Contacto</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <div>
        @yield('section')
        
    </div>

    <footer id="footer-section" class="bgfooter pt-5">
        <div class="container-fluid">
          <div class="row footer-espacio">
    
            <div class="col-md-4 col-sm-6">
              <h1 class="titulo-footer">Contáctanos</h1>
              <br>
              
               
                <p class="redes"><i class="fa fa-instagram" aria-hidden="true" style="padding-right: 10px;""></i>  @Grupocasitas</p> 

               <p class="redes"><i class="fa fa-facebook-official" aria-hidden="true" style="padding-right: 10px;"></i>  @Grupocasitas</p> 
            </div> 

            <div class="col-md-4 col-sm-6 correo">
              <br>
                <p class="redes">info@grupocasitas.com.mx</p> 
                <p class="redes"><i class="fa fa-whatsapp" aria-hidden="true" style="padding-right: 10px"></i>  Contacta a un asesor ahora</p> 
            </div>
            
            <div class="col-md-4 col-sm-6 mx-right">
              
                <form class="contact" name="contact-form" method="post" action="enviar.php">
                <div class="form-group">
    
                  <input type="name" name="nombre" class="form-control" id="exampleFormControlInput1" required="required" placeholder="Nombre">
                </div>

                <div class="form-group">
                  
                    <input type="tel" name="telefono" class="form-control" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="required" placeholder="Teléfono">
                  </div>

                <div class="form-group">
                  
                  <input type="email" name="email" class="form-control" id="exampleFormControlInput1" required="required" placeholder="¿Tienes algún crédito?">
                </div>

                <div class="form-group">
      
                    <input type="name" name="nombre" class="form-control" id="exampleFormControlInput1" required="required" placeholder="Presupuesto">
                  </div>
                
                <button type="submit" class="btn btn-pink">Enviar</button>
              </form>
          </div>
          
            
        </div>

        <div class="row mt-5 pt-2 oficinas ">
            
                <div class="col-lg-12" style="text-align: center">
                    <h2 class="puntos-de-venta" >Encuentra nuestros puntos de venta</h2>
                </div>
            
            <div class="col-lg-4">
                <div class="mapa"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7451.3932299456565!2d-89.6253903!3d20.9646953!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x676469d86fc45aa3!2sGRUPO%20CASITAS%20DESARROLLOS!5e0!3m2!1ses!2smx!4v1606816390645!5m2!1ses!2smx" width="600" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="img-fluid"></iframe></div>
                <h4 class="oficina">Oficina de Ventas <br> Dirección:</h4>
                <p class="direccion">Calle 56 entre 61 y 63 Col Centro,<br> Mérida, Yucatán.</p>
            </div>
            <div class="col-lg-4">
                <div class="mapa"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14902.728365377367!2d-89.62163499638639!3d20.96527821803639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5671638a4bd525%3A0x8869213d7b04479b!2sGrupo%20Casitas!5e0!3m2!1ses!2smx!4v1606817830688!5m2!1ses!2smx" width="600" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="img-fluid"></iframe></div>
                <h4 class="oficina">Oficina de Ventas <br> Dirección:</h4>
                <p class="direccion">Calle 63-A entre 56 y 58 2da Calle<br> Nueva, Centro, Mérida, Yucatán.</p>
            </div>
            <div class="col-lg-4">
                <div class="mapa"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d232.85681188382955!2d-89.623922!3d20.9641986!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4d6e8a6817cb205a!2sGRUPO%20CASITAS%20DESARROLLOS!5e0!3m2!1ses!2smx!4v1606817777639!5m2!1ses!2smx" width="600" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="img-fluid"></iframe></div>
                <h4 class="oficina">Oficina de Ventas <br> Dirección:</h4>
                <p class="direccion">Calle 60 entre 65 y 67 Frente a la<br>Japay Mérida, Yucatán.</p>
            </div>
        </div>

        <div class="row pt-5 mt-2 text-center ">
          <div class="col-md-12">
            <div style="color: white">
              <p class="copyright" style="text-align: center;"><small>
              
            UN DESARROLLO DE<img src="/img/Icons/Logo-Casitas.svg" class="img-fluid casitas-footer" style="padding-bottom: 8px" alt="">
            
        
            </div>
          </div>
          
        </div>
    
      </footer> <!--Page end-->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    




    
</body>

</html>
