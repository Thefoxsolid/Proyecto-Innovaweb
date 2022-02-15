
@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Panel de Control</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Starter Page</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
   
 {{-- Main content --}}

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
              
              <table class= "table table hover table-condensend table-bordered">
              
               <tr>
                <td>ID</td>
                <td>Abr</td>
                <td>Clientes</td>
                <td>Nombre del Proyecto</td>
                <td>Estado</td>
              </tr>               
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>                
                <td><button class="btn btn-primary" data-toggle="modal" data-target="#Modalnuevo">Agregar</button></td>             
                <td><button class="btn btn-warning"  data-toggle="modal" data-target="#Modaledicion">Modificar</button></td>
                <td><button class="btn btn-danger">Eliminar</button></td>                                
              </tr>

              </table>
                         
           </div>
       </div>
    </div>
</div>
@endsection

