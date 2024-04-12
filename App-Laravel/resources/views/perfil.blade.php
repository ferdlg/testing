<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar perfil</title>
    <link rel="stylesheet" href="{{asset ('bootstrap-5.3.0-dist/css/bootstrap.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset ('CSS/perfil.css')}}">
</head>
<body>
   
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> Editar Perfil</button>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>