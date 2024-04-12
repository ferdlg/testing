        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModalVehiculo">
            Registrar vehiculo
        </button>
        <form action="{{ route('vehiculos.store') }}" method="POST">
            @csrf
            <div class="modal fade" id="exampleModalVehiculo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Auto a la venta</h1>
                            <form method="POST" action="{{ route('vehiculos.store') }}">
                                @csrf
                                <div class="Datos-auto-venta">
                                    <label for="placa">Placa</label>
                                    <input type="text" name="placa" required>
                                </div>
                                <div class="Datos-auto-venta">
                                    <label for="modelo">Modelo</label>
                                    <input type="text" name="modelo" required>
                                </div>
                                <div class="Datos-auto-venta">
                                    <label for="marca">Fabricante</label>
                                    <input type="text" name="marca" required>
                                </div>
                                <div class="Datos-auto-venta">
                                    <label for="color">Color</label>
                                    <input type="text" name="color" required>
                                </div>
                                <div class="Datos-auto-venta">
                                    <label for="estado">Estado</label>
                                    <select class="form-select" name="estado" aria-label="Estado" required>
                                        <option selected disabled>Seleccionar</option>
                                        <option value="Nuevo">Nuevo</option>
                                        <option value="Usado">Usado</option>
                                    </select>
                                </div>
                                <div class="Datos-auto-venta">
                                    <label for="precio">Precio</label>
                                    <span class="input-group">$</span>
                                    <input type="text" name="precio" aria-label="Precio" required>
                                </div>
                                <div class="Datos-auto-venta">
                                    <label for="categoria">Categoría</label>
                                    <select class="form-select" name="categoria" aria-label="Categoría" required>
                                        <option selected disabled>Seleccionar</option>
                                        @foreach($categoria as $categoria)
                                            <option value="{{ $categoria->catId }}">{{ $categoria->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- <input type="hidden" name="datId" value="{{ Auth::user()->datosPersonales->datId }}"> -->
                                <button type="button" class="btn-cancelar btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn-registrar btn-primary">Registrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </form>
