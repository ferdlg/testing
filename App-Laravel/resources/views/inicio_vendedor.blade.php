<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendedor</title>
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
                    <li><a class="dropdown-item-menu" href="{{ route('logout') }}">Salir</a></li>
                  </ul>
                </div>
                <form method="POST" action="{{ route('editarPerfilVendedor') }}">
                  @csrf
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                      <div class="modal-body">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizacion de datos</h1>
                          <div class="Datos-Usuario">
                              <label>Nombre</label>
                              <input type="text"for="nombre" name="nombre" value="{{ $user->datId->datNombre }}" required>
                          </div>
                          <div class="Datos-Usuario">
                              <label>Apellido</label>
                              <input type="text"for="apellido" name="apellido" required>
                          </div>
                          <div class="Datos-Usuario">
                              <label>Telefono</label>
                              <input type="number" for="telefono" name="telefono" required>
                          </div>
                        
                          <div class="Datos-Usuario">
                              <label >Correo</label>
                              <input type="email"for="correo" name="correo" required>
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
              <th scope="col">Placa</th>
              <th scope="col">Marca</th>
              <th scope="col">Color</th>
              <th scope="col">Estado</th>
              <th scope="col">Precio</th>
              <th scope="col">Acciones </th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            @foreach($vehiculos as $vehiculo)
            <tr>
                <th scope="row">{{ $vehiculo->vehModelo }}</th>
                <td>{{ $vehiculo->vehPlaca }}</td>
                <td>{{ $vehiculo->vehMarca }}</td>
                <td>{{ $vehiculo->vehColor }}</td>
                <td>{{ $vehiculo->vehEstado }}</td>
                <td>${{ $vehiculo->vehPrecio }}</td>
                <td>
                  <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalEditarVehiculo{{ $vehiculo->vehPlaca }}">
                      Editar
                  </button>
                  <div class="modal fade" id="exampleModalEditarVehiculo{{ $vehiculo->vehPlaca }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Auto</h1>
                                <form action="{{ route('vehiculos.actualizar', $vehiculo->vehPlaca ) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="Datos-auto-venta">
                                        <label for="placa">Placa</label>
                                        <input type="text" name="placa" value="{{ $vehiculo->vehPlaca }}" required>
                                    </div>
                                    <div class="Datos-auto-venta">
                                        <label for="modelo">Modelo</label>
                                        <input type="text" name="modelo" value="{{ $vehiculo->vehModelo }}" required>
                                    </div>
                                    <div class="Datos-auto-venta">
                                        <label for="marca">Fabricante</label>
                                        <input type="text" name="marca" value="{{ $vehiculo->vehMarca }}" required>
                                    </div>
                                    <div class="Datos-auto-venta">
                                        <label for="color">Color</label>
                                        <input type="text" name="color" value="{{ $vehiculo->vehColor }}" required>
                                    </div>
                                    <div class="Datos-auto-venta">
                                        <label for="estado">Estado</label>
                                        <select class="form-select" name="estado" aria-label="Estado" required>
                                            <option value="Nuevo" {{ $vehiculo->vehEstado === 'Nuevo' ? 'selected' : '' }}>Nuevo</option>
                                            <option value="Usado" {{ $vehiculo->vehEstado === 'Usado' ? 'selected' : '' }}>Usado</option>
                                        </select>
                                    </div>
                                    <div class="Datos-auto-venta">
                                        <label for="precio">Precio</label>
                                        <span class="input-group">$</span>
                                        <input type="text" name="precio" value="{{ $vehiculo->vehPrecio }}" aria-label="Precio" required>
                                    </div>
                                    <div class="Datos-auto-venta">
                                        <label for="categoria">Categoría</label>
                                        <select class="form-select" name="categoria" aria-label="Categoría" required>
                                            @foreach($categoria as $cat)
                                                <option value="{{ $cat->catId }}" {{ $vehiculo->catId === $cat->catId ? 'selected' : '' }}>{{ $cat->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="button" class="btn-cancelar btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn-registrar btn-primary">Editar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                </td>
                <td>
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModalEliminarVehiculo{{ $vehiculo->vehPlaca }}">
                      Eliminar
                  </button>
                  <div class="modal fade" id="exampleModalEliminarVehiculo{{ $vehiculo->vehPlaca }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-body">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Auto</h1>
                                  <p>¿Estás seguro de que deseas eliminar este vehículo?</p>
                                  <form action="{{ route('vehiculos.eliminar', $vehiculo->vehPlaca ) }}" method="POST">
                                      @csrf
                                      @method('DELETE')
                                      <button type="button" class="btn-cancelar btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                      <button type="submit" class="btn-registrar btn-danger">Eliminar</button>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      </section>
      @include('registrarAuto')

    <footer class="footer-dashboard">
        <div class="footer-info">
          <h6>© Todos los derechos reservados</h6>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>