
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.head')
<body class="bg-secondary bg-opacity-25">
    <form id="formMayoristas" method="POST" action="{{route('mayoristas.store')}}">
        @csrf
        <div class="container text-center mt-4">
            <div class="row mt-4 text-start">
                <div class="col">
                    <h3>Nuevo Mayorista</h3>
                </div>
                <div class="col text-end">
                    <button type="submit" class="btn btn-primary">Crear Mayorista</button>
                    <button type="button" class="btn btn-danger" onclick="location.href='{{url('mayoristas')}}'">Cancelar</button>
                </div>
            </div>
            <!--Info mayorista-->
            <div class="row my-4 bg-light p-4 rounded shadow">
                <div class="row text-start mb-3">
                    <h5>Información del mayorista</h5>
                </div>
                <div class="row text-start">
                    <div class="mb-3 col-md-6">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="empresa" class="form-label">Empresa</label>
                        <input type="text" class="form-control" id="empresa" name="empresa">
                    </div>
                </div>
                <div class="row text-start">
                    <div class="mb-3 col-md-6">
                        <label for="email" class="form-label">Correo electronico</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="telefono" class="form-label">Número de teléfono</label>
                        <input type="tel" class="form-control" id="telefono" name="telefono">
                    </div>
                </div>
                <div class="row text-start">
                    <div class="mb-3 col-md-6">
                        <label for="descuento" class="form-label">Porcentaje de descuento</label>
                        <input type="text" class="form-control" id="descuento" name="descuento">
                    </div>
                </div>
            </div>

            <!--Direccion de envio-->
            <div class="row my-4 bg-light p-4 rounded shadow">
                <div class="row text-start mb-3">
                    <h5>Dirección de envío</h5>
                </div>
                <div class="row text-start">
                    <div class="mb-3 col-md-6">
                        <label for="nombreContacto" class="form-label">Nombre de Contacto</label>
                        <input type="text" class="form-control" id="nombreContacto" name="nombreContacto">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="direccion" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="direccion" name="direccion">
                    </div>
                </div>
                <div class="row text-start">
                    <div class="mb-3 col-md-6">
                        <label for="cp" class="form-label">Código postal</label>
                        <input type="text" class="form-control" id="cp" name="cp">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="colonia" class="form-label">Colonia</label>
                        <select class="form-select" id="colonia" name="colonia"></select>
                    </div>
                </div>
                <div class="row text-start">
                    <div class="mb-3 col-md-6">
                        <label for="ciudad" class="form-label">Ciudad</label>
                        <select class="form-select" id="ciudad" name="ciudad"></select>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="estado" class="form-label">Estado</label>
                        <select class="form-select" id="estado" name="estado"></select>
                    </div>
                </div>

                <div class="row text-start">
                    <div class="mb-3 col-md-6">
                        <label for="correoEnvio" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="correoEnvio" name="correoEnvio">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="telefonoEnvio" class="form-label">Teléfono</label>
                        <input type="tel" class="form-control" id="telefonoEnvio" name="telefonoEnvio">
                    </div>
                </div>
            </div>

            <!--Direccion de facturación-->
            <div class="row my-4 bg-light p-4 rounded shadow">
                <div class="row text-start mb-3">
                    <div class="col-md-6">
                        <h5>Dirección de facturación</h5>
                    </div>
                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Usar dirección de envío
                        </label>
                        <input type="hidden" name="igualAdress" value="0">
                    </div>
                </div>
                <div class="row text-start">
                    <div class="mb-3 col-md-6">
                        <label for="nombreContactoF" class="form-label">Nombre de Contacto</label>
                        <input type="text" class="form-control" id="nombreContactoF" name="nombreContactoF">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="direccionF" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="direccionF" name="direccionF">
                    </div>
                </div>
                <div class="row text-start">
                    <div class="mb-3 col-md-6">
                        <label for="cpF" class="form-label">Código postal</label>
                        <input type="text" class="form-control" id="cpF" name="cpF">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="coloniaF" class="form-label">Colonia</label>
                        <select class="form-select" id="coloniaF" name="coloniaF"></select>
                    </div>
                </div>
                <div class="row text-start">
                    <div class="mb-3 col-md-6">
                        <label for="ciudadF" class="form-label">Ciudad</label>
                        <select class="form-select" id="ciudadF" name="ciudadF"></select>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="estadoF" class="form-label">Estado</label>
                        <select class="form-select" id="estadoF" name="estadoF"></select>
                    </div>
                </div>

                <div class="row text-start">
                    <div class="mb-3 col-md-6">
                        <label for="correoEnvioF" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="correoEnvioF" name="correoEnvioF">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="telefonoEnvioF" class="form-label">Teléfono</label>
                        <input type="tel" class="form-control" id="telefonoEnvioF" name="telefonoEnvioF">
                    </div>
                </div>
            </div>

            <!--Datos de facturación-->
            <div class="row my-4 bg-light p-4 rounded shadow">
                <div class="row text-start mb-3">
                    <h5>Datos de facturación</h5>
                </div>
                <div class="row text-start">
                    <div class="mb-3 col-md-6">
                        <label for="razon" class="form-label">Razón social</label>
                        <input type="text" class="form-control" id="razon" name="razon">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="cfdi" class="form-label">Uso de CFDI</label>
                        <input type="text" class="form-control" id="cfdi"  name="cfdi">
                    </div>
                </div>
                <div class="row text-start">
                    <div class="mb-3 col-md-6">
                        <label for="rfc" class="form-label">RFC</label>
                        <input type="text" class="form-control" id="rfc" name="rfc">
                    </div>
                </div>
            </div>
        </div>
    </form>
    
</body>