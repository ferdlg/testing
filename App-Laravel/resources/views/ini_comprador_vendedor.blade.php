<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprador</title>
    <link rel="stylesheet" href="{{asset ('bootstrap-5.3.0-dist/css/bootstrap.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset ('CSS/hojaStyle.css')}}">
    <link rel="stylesheet" href="{{asset ('CSS/registrarAuto.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-body-tertiary">
        <div class="cont-nav-img">
            <img src="{{asset ('vehiculo_app/imagenes/istockphoto-1351386399-1024x1024-removebg-preview.png')}}" class="nav-img">
        </div>
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Vehiculos</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <div class="dropdown">
                  <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="nav-icon" src="{{assent('vehiculo_app/imagenes/icons8-user-60 (1).png')}}" alt="user"/>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item-menu" id="menu-usuario-a">Usuario</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item-menu" id="menu-usuario-a">cambiar a vendedor</a></li>
                    <li><a class="dropdown-item-menu" href="#">Salir</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Nuevo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#">Usado</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categorias
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Todo</a></li>
                  <li><a class="dropdown-item" href="#">Camioneta</a></li>
                  <li><a class="dropdown-item" href="#">Todoterreno</a></li>
                  <li><a class="dropdown-item" href="#">Deportivo</a></li>
                  <li><a class="dropdown-item" href="#">Familiar</a></li>
                  <li><a class="dropdown-item" href="#">Clasico</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Filtrar</a>
              </li>
            </ul>
            <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Precios</h5>
                </div>
                <div class="offcanvas-body">
                  <form action="#">
                      <div class="filtro-body">
                          <ul>
                              <li>
                                  <label for="min" class="form-label">Min</label>
                                  <input type="range" class="form-range" min="0" max="50000000" step="0.5" id="min">
                                  <input type="text" class="form-input" id="minValor"  readonly>
                              </li>
                              <li><label for="max" class="form-label">Max</label>
                                  <input type="range" class="form-range" min="0" max=50000000" step="0.5" id="max">
                                  <input type="text" class="form-input" id="maxValor"  readonly>
                              </li>
                          </ul>
                      </div>
                      <button type="submit">Buscar</button>
                  </form>
                </div>
              </div>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
          </div>
        </div>
      </nav>
      <section class="cont-table-comprador">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Modelo</th>
              <th scope="col">Marca</th>
              <th scope="col">Color</th>
              <th scope="col">Estado</th>
              <th scope="col">Precio</th>
              <th scope="col"> </th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row">2001</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>$25</td>
              <td><a href="#">Informacion del vendedor</a></td>
            </tr>
        </table>
      </div>
      </section>
      

    <footer class="footer-dashboard">
        <div class="footer-info">
          <h6>© Todos los derechos reservados</h6>
        </div>
    </footer>
    <script src="../JAVASCRIPT/funcionalidad.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>