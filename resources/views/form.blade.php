<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.head')
<body class="bg-secondary bg-opacity-25">
    <form>
        <div class="container text-center mt-4">
            <div class="row mt-4 text-start">
                <div class="col">
                    <h3>Nuevo Mayorista</h3>
                </div>
                <div class="col text-end">
                    <button type="submit" class="btn btn-primary">Crear Mayorista</button>
                    <button type="button" class="btn btn-danger">Cancelar</button>
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
                        <input type="text" class="form-control" id="nombre">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="empresa" class="form-label">Empresa</label>
                        <input type="text" class="form-control" id="empresa">
                    </div>
                </div>
                <div class="row text-start">
                    <div class="mb-3 col-md-6">
                        <label for="email" class="form-label">Correo electronico</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="telefono" class="form-label">Número de teléfono</label>
                        <input type="tel" class="form-control" id="telefono">
                    </div>
                </div>
                <div class="row text-start">
                    <div class="mb-3 col-md-6">
                        <label for="descuento" class="form-label">Porcentaje de descuento</label>
                        <input type="text" class="form-control" id="descuento">
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
                        <input type="text" class="form-control" id="nombreContacto">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="direccion" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="direccion">
                    </div>
                </div>
                <div class="row text-start">
                    <div class="mb-3 col-md-6">
                        <label for="cp" class="form-label">Código postal</label>
                        <input type="text" class="form-control" id="cp">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="colonia" class="form-label">Colonia</label>
                        <select class="form-select" id="colonia"></select>
                    </div>
                </div>
                <div class="row text-start">
                    <div class="mb-3 col-md-6">
                        <label for="ciudad" class="form-label">Ciudad</label>
                        <select class="form-select" id="ciudad"></select>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="estado" class="form-label">Estado</label>
                        <select class="form-select" id="estado"></select>
                    </div>
                </div>

                <div class="row text-start">
                    <div class="mb-3 col-md-6">
                        <label for="correoEnvio" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="correoEnvio">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="telefonoEnvio" class="form-label">Teléfono</label>
                        <input type="tel" class="form-control" id="telefonoEnvio">
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
                    </div>
                </div>
                <div class="row text-start">
                    <div class="mb-3 col-md-6">
                        <label for="nombreContactoF" class="form-label">Nombre de Contacto</label>
                        <input type="text" class="form-control" id="nombreContactoF">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="direccionF" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="direccionF">
                    </div>
                </div>
                <div class="row text-start">
                    <div class="mb-3 col-md-6">
                        <label for="cpF" class="form-label">Código postal</label>
                        <input type="text" class="form-control" id="cpF">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="coloniaF" class="form-label">Colonia</label>
                        <select class="form-select" id="coloniaF"></select>
                    </div>
                </div>
                <div class="row text-start">
                    <div class="mb-3 col-md-6">
                        <label for="ciudadF" class="form-label">Ciudad</label>
                        <select class="form-select" id="ciudadF"></select>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="estadoF" class="form-label">Estado</label>
                        <select class="form-select" id="estadoF"></select>
                    </div>
                </div>

                <div class="row text-start">
                    <div class="mb-3 col-md-6">
                        <label for="correoEnvioF" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="correoEnvioF">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="telefonoEnvioF" class="form-label">Teléfono</label>
                        <input type="tel" class="form-control" id="telefonoEnvioF">
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
                        <input type="text" class="form-control" id="razon">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="cfdi" class="form-label">Uso de CFDI</label>
                        <input type="text" class="form-control" id="cfdi">
                    </div>
                </div>
                <div class="row text-start">
                    <div class="mb-3 col-md-6">
                        <label for="rfc" class="form-label">RFC</label>
                        <input type="text" class="form-control" id="rfc">
                    </div>
                </div>
            </div>
        </div>
    </form>
    
</body>