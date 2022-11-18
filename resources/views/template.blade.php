<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/template.css" />
    <title>ADRE</title>
</head>
<body>
<header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top mask-custom shadow-0">
    <div class="container">
    <a class="navbar-brand" href="#">
      <img src="img/logo.png" alt="Logo" width="100" height="100" class="d-inline-block align-text-top">
    </a>
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="#!">Offer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#!">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#!">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#!">Reference</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#!">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#!">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#!">Contact</a>
          </li>
        </ul>
        <ul class="navbar-nav d-flex flex-row">
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="#!">
              <i class="fas fa-shopping-cart"></i>
            </a>
          </li>
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="#!">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="#!">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->
  <section>
    <!-- Intro -->
    <div id="intro" class="bg-image vh-100" style="
          background-image: url('img/fondoLogo.png');
        ">
      <div class="mask" style="background-color: rgba(250, 182, 162, 0.15);"></div>
    </div>
    <!-- Intro -->
  </section>
</header>
    
    @yield('contenido')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  
</body>
</html>