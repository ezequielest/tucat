<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./libs/bootstrap-4.3.1/css/bootstrap.css">
    <link rel="stylesheet" href="./libs/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="./libs/owl/owl.theme.default.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
  <header>  
    
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#"><img src="./img/tucat-logo.png"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav justify-content-end">
          <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Galería</a>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Nuestros Servicios
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Oficinas</a>
                <a class="dropdown-item" href="#">Placares y Vestidores</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Cocinas</a>
              </div>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Contactenos</a>
          </li>
          </ul>
        </div>
      </nav>
      
      <section class="slider">
        <!-- Set up your HTML -->
        <div class="owl-slider owl-carousel">
        <?php 
          $path = "./img/slide/";
          $directory = opendir($path);
          $i = 0; 
          $info = [
            array(
            "title" => "AMAMOS <span>LOS DETALLES</span>", 
            "description" => "Una empresa <span>Marplatense</span> jóven y dinámica."),
            array(
              "title" => "SOMOS  <span>PERFECCIONISTAS</span>", 
              "description" => "Tenemos como <span>objetivo</span> brindar un servicio de <span>máxima calidad</span>"),
            array(
              "title" => "DISFRUTAMOS <span>LOS RETOS<span>", 
              "description" => "<span>Satisfacemos</span> las necesidades <span>más exigentes</span>.")
            ];

          while ($archivo = readdir($directory)) {
            if (!is_dir($archivo)) {
              ?>
              <div class="item" style="background: linear-gradient(rgba(0, 0, 0, .8), rgba(0, 0, 0, .5)), url(<?php echo $path . $archivo ?>); background-size: cover; height: 100vh">
                <div class="item-container">
                  <h3 style="visibility: hidden;"><?php echo $info[$i]["title"] ?></h3>
                  <p style="visibility: hidden;"><?php echo $info[$i]["description"] ?>.</p>
                </div>  
              </div>
              
              <?php
               $i++;
            }
          }
        ?>
        </div>
      </section>
    </header>

    <section id="elegir" class="container">
      <div class="row">
        <div class="col-sm-12">
          <h3 class="center light">PORQUE ELEGIR</h3>
          <h1 class="center color-tucat bold">TUCAT INTERIORES</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4 element">
            <i class="fas fa-ruler-combined center-block"></i>
            <h5 class="center">Amoblamientos a medida</h5>
            <p class="center">Trabajos 100% a gusto del cliente en equipamientos integrales para el hogar. Nos especializamos en optimizar los espacios disponibles.</p>
        </div>
        <div class="col-sm-4 element">
            <i class="fas fa-dice-d6 center-block"></i>  
            <h5 class="center">Diseño y ergonomía en nuestros trabajos</h5>
            <p class="center">Contamos con la experiencia e idoneidad necesaria para trabajar las ideas de los proyectos y transformarlas en el mobiliario esperado, cumpliendo con los plazos y presupuestos pactados.</p>
        </div>
        <div class="col-sm-4 element">
            <i class="fas fa-people-carry center-block"></i>
            <h5 class="center">Atención personalizada</h5>
            <p class="center">Siempre orientados a establecer un vínculo entre nuestro cliente y su mobiliario, es por tal motivo, que asesoramos cada propuesta en forma individual y vamos forjando juntos el proyecto a medida.</p>
        </div>
      </div>
    </section>

    <section id="servicios">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 title">
            <h3 class="center light">ESTOS SON ALGUNOS DE</h3>
            <h1 class="center bold">NUESTROS SERVICIOS</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
              <div class="container-img">
                <img src="./img/cocinas/home.jpg" class="card-img-top" alt="">
              </div>
              <div class="card-body">
                <h5 class="card-title bold">COCINAS</h5>
                <p class="card-text">Realizamos muebles de cocina enfocándonos en la comodidad, gusto y estilo del cliente. Analizando los espacios de cada vivienda obtenemos los mejores resultados espacio/diseño.</p>
                <a href="section-products.php?section=cocinas" class="btn btn-tucat">ver más</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
              <div class="container-img">
                <img src="./img/placares-vestidores/home.jpg" class="card-img-top" alt="">
              </div>
              <div class="card-body">
                <h5 class="card-title bold">PLACARES Y VESTIDORES</h5>
                <p class="card-text">Diseños exclusivos a gusto de nuestros clientes. Nuestra diversidad de modelos y estilos de mobiliario, nos permite adaptar un perfil diferente a cada espacio de trabajo.</p>
                <a href="section-products.php?section=pyv" class="btn btn-tucat">ver más</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
              <div class="container-img">
                <img src="./img/oficinas/home.jpg" class="card-img-top" alt="">
              </div>
              <div class="card-body">
                <h5 class="card-title bold">OFICINAS</h5>
                <p class="card-text">Aprovechamos cada cm del establecimiento para sacar el máximo provecho, siempre manteniendo un excelente diseño y calidad del producto.</p>
                <a href="section-products.php?section=oficinas" class="btn btn-tucat">ver más</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      </section>

    
    <section id="works" class="container-fluid">

      <h3 class="center">ALGUNOS DE NUESTROS</h3>
      <h1 class="center color-tucat bold">TRABAJOS REALIZADOS</h1>

      <div class="owl-works owl-carousel">
        <?php 
        $path = "./img/trabajos-realizados/";
        $directory = opendir($path); 
        while ($archivo = readdir($directory)) {
          if (!is_dir($archivo)) {
            ?>
            <div class="item" style="background-image: url('<?php echo $path . $archivo ?>'); background-size: cover; height: 400px"></div>
            <?php
          }
        }
        ?>
 
      </div>
    </section>

    <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 title">
          <h3 class="center light">ESTAMOS A SU DISPOSICIÓN</h3>
          <h1 class="center color-tucat bold">CONTACTANOS</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <form accept-charset="utf-8" enctype="multipart/form-data">
              <div class="form-group">
                <label for="exampleFormControlInput1">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="name@example.com">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Telefono</label>
                <input type="text" class="form-control" id="tel" name="tel" placeholder="name@example.com">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="name@example.com">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Mensaje</label>
                <textarea class="form-control" id="message" name="message"  rows="3"></textarea>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Attach File</label>
                <input type="file" class="form-control" id="attachFile" name="attachFile" rows="3"></i>
              </div>
              <button type="submit" class="btn btn-tucat">Submit</button>
            </form>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-7">
            
            Ante cualquier duda o consulta no dude en contactarse con nosotros. <br>
            Complete el formulario y a la brevedad nos estaremos comunicando con usted. 
            
            Detalles de Contacto
            <ul class="contact-details">
              <li>Mar del Plata, Buenos Aires, Argentina</li>
              <li>0223 4702755</li>
              <li>+54 9 223511-0097</li>
              <li><a class="email" href="mailto:javier@tucatinteriores.com.ar">javier@tucatinteriores.com.ar</a></li>
              <li><a class="redes" href="https://www.facebook.com/Tucat-Interiores-126284884104042/"><i class="fab fa-facebook-f"></i> <i class="fab fa-instagram"></i></li>
            </ul>
        </div>
      </div>
      <div id="up"><i class="fas fa-angle-up"></i></div>
      </div>
    </footer>
    <section class="container-fluid center footer">
    © TUCAT INTERIORES | 2000 - <?php echo date('Y') ?>
    </section>


    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
    <script src="./js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="./libs/bootstrap-4.3.1/js/bootstrap.js" ></script>
    <script src="./libs/owl/owl.carousel.min.js"></script>
    <script>
      $('form').on('submit',function(e){
        e.preventDefault();

        var form_data = new FormData(this);

        $.ajax({
          url : "enviarPrueba.php",
          type: "POST",
          data : form_data,
          dataType : "json",
          contentType: false,
          cache: false,
          processData:false
        }).done(function(res) {
          console.log('done')
          console.log('res ', res)
        });

      })
    </script>
    <script src="./js/effects.js"></script>
</body>
</html>