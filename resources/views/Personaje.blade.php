<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <meta name="copyright" content="MACode ID, https://www.macodeid.com/">
  
  <title>Virtual Folio - Portfolio HTML5 Template</title>

  <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
  
  <link rel="stylesheet" type="text/css" href="../css/themify-icons.css">
  
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

  <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
  
  <link rel="stylesheet" type="text/css" href="../vendor/owl-carousel/owl.carousel.css">
  
  <link rel="stylesheet" type="text/css" href="../vendor/perfect-scrollbar/css/perfect-scrollbar.css">
  
  <link rel="stylesheet" type="text/css" href="../vendor/nice-select/css/nice-select.css">
  
  <link rel="stylesheet" type="text/css" href="../vendor/fancybox/css/jquery.fancybox.min.css">
  
  <link rel="stylesheet" type="text/css" href="../css/virtual.css">
  
  <link rel="stylesheet" type="text/css" href="../css/topbar.virtual.css">
</head>
<body class="theme-red">
  
  <!-- Back to top button -->
  <div class="btn-back_to_top">
    <span class="ti-arrow-up"></span>
  </div>
  
  <!-- Setting button -->
  <div class="config">
    <div class="template-config">
      <!-- Settings -->
      <div class="d-block">
        <button class="btn btn-fab btn-sm" id="sideel" title="Settings"><span class="ti-settings"></span></button>
      </div>
      <!-- Puschase -->
      <div class="d-block">
        <a href="https://macodeid.com/projects/virtual-folio/" class="btn btn-fab btn-sm" title="Get this template" data-toggle="tooltip" data-placement="left"><span class="ti-download"></span></a>
      </div>
      <!-- Help -->
      <div class="d-block">
        
      </div>
    </div>
    
      </div>
     
  </div>
  
  <div class="vg-page page-home" id="home" style="background-image: url(../img/Rick-y-Morty.jpg)">
    <!-- Navbar -->
    <div class="navbar navbar-expand-lg navbar-dark sticky" data-offset="500">
      <div class="container">
        <a href="" class="navbar-brand">RICKYWORLD</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#main-navbar" aria-expanded="true">
          <span class="ti-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a href="#home" class="nav-link" data-animate="scrolling">Inicio</a>
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link" data-animate="scrolling">Información del personaje</a>
            </li>
            <li class="nav-item">
              <a href="#portfolio" class="nav-link" data-animate="scrolling">Personajes</a>
            </li>
          
          </ul>
          <ul class="nav ml-auto">
            <li class="nav-item">
              <button class="btn btn-fab btn-theme no-shadow">En</button>
            </li>
          </ul>
        </div>
      </div>
    </div> <!-- End Navbar -->
    <!-- Caption header -->
    <div class="caption-header text-center wow zoomInDown">
      <h5 class="fw-normal">Bienvenido a</h5>
      <h1 class="fw-light mb-4"><b class="fg-theme">Rick</b>y Morty</h1>
      <div class="badge">Información por fans</div>
    </div> <!-- End Caption header -->
    <div class="floating-button"><span class="ti-mouse"></span></div>
  </div>
  
  <div class="vg-page page-about" id="about">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-4 py-3">
          <div class="img-place wow fadeInUp">
            <img src="{{$resultado['image']}}" alt="">
          </div>
        </div>
        <div class="col-lg-6 offset-lg-1 wow fadeInRight">
          <h1 class="fw-light">Nombre: {{$resultado['name']}}</h1>
          
          <ul class="theme-list">
            <li><b>Origen: </b> {{$resultado['origin']['name']}}</li>
            <li><b>Genero:</b> {{$resultado['gender']}}</li>
            <li><b>Estatus:</b> {{$resultado['status']}}</li>
            <li><b>Especies:</b> {{$resultado['species']}}</li>
            <li><b>Creado:</b> {{$resultado['created']}}</li>
          </ul>
          
        </div>
      </div>
    </div>
    
           
  
  
        
       
  
 
  
  <!-- Portfolio page -->
  <div class="vg-page page-portfolio" id="portfolio">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="badge badge-subhead">Selección de personajes</div>
      </div>
      <h1 class="text-center fw-normal wow fadeInUp">Personajes</h1>
      <div class="gridder my-3">

      @foreach ($personajes as $personaje)
      <div class="grid-item template wireframes wow zoomIn">
        <div class="img-place" data-src="{{$personaje['imagen']}}" data-fancybox data-caption="<h5 class='fg-theme'><a href='{{route('Personaje',$personaje['id'])}}'>Nombre: {{$personaje['nombre']}}</a></h5> <p>Genero: {{$personaje['genero']}}</p>">
          <img src="{{$personaje['imagen']}}" alt="">
          <div class="img-caption">
            <h5 class="fg-theme">Nombre: {{$personaje['nombre']}}</h5>
            <p>Genero: {{$personaje['genero']}}</p>
          </div>
        </div>
      </div>
      @endforeach

      
      </div> <!-- End gridder -->
     
  </div> <!-- End Portfolio page -->
  
  <!-- Testimonial -->
 
                   
            
            
  </div> <!-- End testimonial -->
  
  <!-- Client -->
  
  </div> <!-- End client -->
  
  <!-- Blog -->
  
            
  </div> <!-- End blog -->
  
  <!-- Contact -->
  
       
  </div> <!-- End Contact -->
  
  <!-- Footer -->
  
      
    <
  </div> <!-- End footer -->
  
  
  <script src="../js/jquery-3.5.1.min.js"></script>
    
  <script src="../js/bootstrap.bundle.min.js"></script>
    
  <script src="../vendor/owl-carousel/owl.carousel.min.js"></script>
    
  <script src="../vendor/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    
  <script src="../vendor/isotope/isotope.pkgd.min.js"></script>
    
  <script src="../vendor/nice-select/js/jquery.nice-select.min.js"></script>
    
  <script src="../vendor/fancybox/js/jquery.fancybox.min.js"></script>

  <script src="../vendor/wow/wow.min.js"></script>

  <script src="../vendor/animateNumber/jquery.animateNumber.min.js"></script>

  <script src="../vendor/waypoints/jquery.waypoints.min.js"></script>

  <script src="../js/google-maps.js"></script>
    
  <script src="../js/topbar-virtual.js"></script>

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>
  
</body>
</html>