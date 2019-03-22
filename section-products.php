<?php 

    $section = $_GET['section'];

    $path = "./img/trabajos-realizados/";
    $directory = opendir($path); 

    switch ($section) {
        case 'cocinas':
            $title = "COCINAS";
            $path = "img/cocinas/";
            $background = "./img/cocinas/section-background.jpg";
            break;
        
        case 'pyv':
            $title = "PLACARES Y VESTIDORES";
            $path = "./img/placares-vestidores/";
            $background = "./img/placares-vestidores/section-background.jpg";
            break;

        case 'oficinas':
            $title = "OFICINAS";
            $path = "./img/oficinas/";
            $background = "./img/oficinas/section-background.jpg";
            break;
        
        default:
            $title = "";
            $background = "";
            break;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos Tucat</title>
    <link rel="stylesheet" href="./libs/bootstrap-4.3.1/css/bootstrap.css">
    <link rel="stylesheet" href="./libs/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="./libs/owl/owl.theme.default.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/animate.css">
    <link href="libs/lightGallery/dist/css/lightgallery.css" rel="stylesheet">
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
  </header>

  <section id="sectionProducts" style="background: linear-gradient(rgba(0, 0, 0, .8), rgba(0, 0, 0, .5)), url(<?php echo $background ?>); background-size: cover;">
    <ul class="container">
      <div class="row">
        <div class="col-sm-12 title">
        <h3 class="center light">TUCAT</h3>
        <h1 class="center color-tucat bold"><?php echo $title ?></h1>
        </div>
      </div>
      <div class="list-folders">
        <li class="container">
          <ul id="lightgallery" class="list-unstyled row">
            <?php
            $directory = opendir($path);
            while ($folder = readdir($directory)) 
            {
              if( $folder != "." && $folder != "..") 
              {
                if (is_dir($path.$folder)) {
                  $newPath = $path.$folder;
                  $newDirectory = opendir($newPath); 
                  $i = 0; //I use this because I need only one.
                  while ($archivo = readdir($newDirectory)) {
                    if( $archivo != "." && $archivo != ".." && $i == 0) 
                    {
                      if (!is_dir($newPath.$archivo)) {
                      ?>
                      <li class="col-md-4" data-responsive="" data-src="<?php echo $newPath. "/" .$archivo ?>">
                        <div id="<?php echo $folder ?>" data-folder="<?php echo $folder ?>" class="container-product" style="background-image: url(<?php echo $newPath. "/" .$archivo ?>)"></div>
                        
                        <a href="">
                          <img style="object-fit: contain" src="<?php echo $newPath. "/" .$archivo ?>" alt="">
                        </a>
                      </li>
                      <?php
                      }
                      $i++;
                    }
                    
                  }
                }
              }
            }
            ?>
            </div>
          </ul>
        </div>
      </div>
    </div>      
  </section>

  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModal">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
        <div class="modal-body">
          <div class="owl-section owl-carousel">
          <?php 
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

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
    <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
    <script src="libs/lightGallery/dist/js/lightgallery-all.min.js"></script>
    <script src="libs/lightGallery/lib/jquery.mousewheel.min.js"></script>
    <script>
    $(document).ready(function(){
        $('#lightgallery').lightGallery();
    });
    </script>
    <script>
      $('.container-product').click(function(){
       //$('#myModal').modal()
        console.log($(this).attr('id'));
      })
    </script>
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