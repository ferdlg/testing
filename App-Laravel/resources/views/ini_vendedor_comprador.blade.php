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
            <img src="{{asset ('recursos/istockphoto-1351386399-1024x1024-removebg-preview.png')}}" class="nav-img">
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
                    <img class="nav-icon" src="{{asset ('recursos/icons8-user-60 (1).png')}}" alt="user"/>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item-menu" id="menu-usuario-a">Usuario</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item-menu" data-bs-toggle="modal" data-bs-target="#exampleModal">Editar perfil</a></li>
                    <li><a class="dropdown-item-menu" href="#">cambiar a comprador</a></li>
                    <li><a class="dropdown-item-menu" href="{{ route('logout') }}">Salir</a></li>
                  </ul>
                </div>
                <form action="#">
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                      <div class="modal-body">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizacion de datos</h1>
                          <div class="Datos-Usuario">
                              <label for="Nombre" name="Nombre">Nombre</label>
                              <input type="text" required>
                          </div>
                          <div class="Datos-Usuario">
                              <label for="Apellido" name="Apellido">Apellido</label>
                              <input type="text" required>
                          </div>
                          <div class="Datos-Usuario">
                              <label for="Telefono" name="Telefono">Telefono</label>
                              <input type="number" required>
                          </div>
                        
                          <div class="Datos-Usuario">
                              <label  for="Correo" name="Correo">Correo</label>
                              <input type="email" required>
                          </div>
                          <button type="button" class="btn-cancelar btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                          <button type="submit" class="btn-registrar btn-primary">Actualizar</button>
                      </div>
                      </div>
                  </div>
                  </div>
              </form>
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
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
          </div>
        </div>
      </nav>
      <section class="cont-table">
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
      <button type="button" class="btn-registrarAuto btn-primary" data-bs-toggle="modal" data-bs-target="#modal-registrarAuto">Registrar vehiculo</button>
        <form action="#">
            <div class="modal fade" id="modal-registrarAuto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-body">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Auto a la venta</h1>
                    <div class="Datos-auto-venta">
                        <label for="Modelo" name="Modelo">Modelo</label>
                        <input type="text" required>
                    </div>
                    <div class="Datos-auto-venta">
                        <label for="Placa" name="Placa">Placa</label>
                        <input type="text" required>
                    </div>
                    <div class="Datos-auto-venta">
                        <label for="Color" name="Color">Color</label>
                        <input type="text"  required>
                    </div>
                    <div class="Datos-auto-venta">
                        <label for="Estado" name="Estado">Estado</label>
                        <select class="form-select" aria-label="Default select example" required>
                            <option selected>Seleccionar</option>
                            <option value="1">Nuevo</option>
                            <option value="2">Usado</option>   
                        </select>
                    </div>
                    <div class="Datos-auto-venta">
                        <label  for="Precio" name="Precio">Precio</label>
                        <span class="input-group">$</span>
                        <input type="text"   aria-label="Amount (to the nearest dollar)">
                  
                    </div>
                    <div class="Datos-auto-venta">
                        <label for="Categoria" name="Categoria">Categoria</label>
                        <select class="form-select" aria-label="Default select example" required>
                            <option selected>Seleccionar</option>
                            <option value="1">Camioneta</option>
                            <option value="2">Todoterreno</option>
                            <option value="1">Deportivo</option>
                            <option value="1">Familiar</option>
                            <option value="1">Clasico</option>   
                        </select>
                    </div>
                    <div class="Datos-auto-venta">
                        <label for="Vendedor" name="Vendedor">Vendedor</label>
                        <input type="text" required>
                    </div>
                  <button type="button" class="btn-cancelar btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn-registrar btn-primary">Registrar</button>
                </div>
                </div>
            </div>
            </div>
      </form> 

    <footer class="footer-dashboard">
        <div class="footer-info">
          <h6>© Todos los derechos reservados</h6>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>