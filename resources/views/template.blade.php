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
    <nav class="navbar navbar-expand-lg navbar-light bg-light mask-custom shadow-0">
      <div class="container-fluid ms-3">
        <a class="navbar-brand" href="Home">
          <img src="img/logo.png" alt="Logo" width="100" height="100" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item px-3">
              <a class="nav-link {{ request()->routeIs('Almacen')?'active':'' }}" aria-current="page" href="Almacen">Almacen</a>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link {{ request()->routeIs('Calidad')?'active':'' }}" href="Calidad">Reportes De Calidad</a>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link {{ request()->routeIs('Recursos')?'active':'' }}" href="Recursos">Reportes De Recursos</a>
            </li>

          </ul>
          <ul class="navbar-nav d-flex flex-row">
            <li class="nav-item mx-auto px-3 me-lg-0">
              Hola!
              <br>
              Administrador
            </li>

            <li class="nav-item mx-auto  px-3 me-lg-0">
              <a class="nav-link" href="logout">
                <button type="button" class="btn btn-secondary">Cerrar Sesion</button>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  </header>

  @yield('contenido')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>