<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.head')
<body class="bg-secondary bg-opacity-25">
  <div class="container text-center mt-4">
    <div class="row text-start">
        <h3>Mayoristas</h3>
    </div>
    
    <div class="row mt-2">
        
        <div class="bg-white rounded shadow">
            <div class="row">
                <div class="col text-end mt-2">
                    <button type="button" class="btn btn-dark" onclick="location.href='{{url('mayoristas/create')}}'">
                        <i class="bi bi-plus"></i>
                        Nuevo Mayorista
                    </button>
                </div>
            </div>
            <table class="table table-bordered" id="tabla">
                <thead>
                  <tr class="table-primary">
                    <th scope="col">No.</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Correo electrónico</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Descuento</th>
                    <th scope="col">No. cotizaciones</th>
                    <th scope="col">No. ordenes</th>
                    <th scope="col">No. Solicitudes</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr class="table-light">
                            <th scope="row">{{$item->IdUser}}</th>
                            <td>{{$item->Name}}</td>
                            <td>{{$item->Company}}</td>
                            <td>{{$item->Email}}</td>
                            <td>{{$item->Phone}}</td>
                            <td>{{$item->Discount}}%</td>
                            <td>{{$item->cotizaciones}}</td>
                            <td>{{$item->ordenes}}</td>
                            <td>{{$item->NoSolicitudes}}</td>
                            <td>
                                <button class="btn btn-outline-dark">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="btn btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                      </tr>
                    @endforeach
                  
                </tbody>
              </table>
        </div>
    </div>
  </div>
  <script>
    var tabla = document.querySelector("#tabla");
    var dataTable = new DataTable(tabla);
  </script>
</body>