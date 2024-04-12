<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset ('../bootstrap-5.3.0-dist/css/bootstrap.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset ('css/login.css')}}">
</head>
<body>
    <button type="button" class="btn-login btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Iniciar sesion
      </button>
    <form method="POST" action="{{route('login')}}">
        @csrf
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="header-image">
                  <img src="{{asset ('recursos/istockphoto-1351386399-1024x1024-removebg-preview.png')}}" class="modal-image" id="icon-login">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-header">
                  <h1 class="modal-title " id="exampleModalLabel">VEHICULOS</h1>
                </div>
                <div class="modal-body">
                  <div class="Datos-login">
                    <label>Usuario</label>
                    <input type="text" name="email" id="email" required>
                  </div>
                  <div class="Datos-login">
                    <label >Contraseña</label>
                    <input type="password" name="password" id="password">
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Login</button>
                </div>
              </div>
            </div>
          </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>