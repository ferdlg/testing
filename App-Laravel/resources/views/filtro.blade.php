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
    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Filtrar busqueda</button>

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
                    <input type="range" class="form-range" min="0" max="200000000" step="0.5" id="min">
                    <input type="text" class="form-input" id="minValor"  readonly>
                </li>
                <li><label for="max" class="form-label">Max</label>
                    <input type="range" class="form-range" min="0" max="20000000" step="0.5" id="max">
                    <input type="text" class="form-input" id="maxValor"  readonly>
                </li>
            </ul>
        </div>
        <button type="submit">Buscar</button>
    </form>
  </div>
</div>
    <script src="../JAVASCRIPT/funcionalidad.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>