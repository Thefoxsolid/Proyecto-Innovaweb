<!DOCTYPE html>
<html lang= "{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.Name ."proyect1')}} </title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('vendors/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('vendors/dist/css/adminlte.min.css') }}">
  <script src="https://kit.fontawesome.com/b4cb752034.js" crossorigin="anonymous"></script>
 
  <title>Tabla dinamica</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">
  <script src="librerias/jquery-3.2.1.min.js"></script>
  <script src="js/funciones.js"></script>
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
  <script src="librerias/select2/js/select2.js"></script>
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">

     <!-- Tablas-->

  <div id="table"></div>
     <div class="container">
     <div id="tabla"></div>
  </div>
  
  
   <!-- modal para registros nuevos -->
<div class="wrapper"> 

      {{-- 1. Top Menu --}}
@include ('layouts.TopMenu')

    {{-- 2. left Menu --}}
@include ('layouts.LeftMenu')

{{-- 3. Main Content (Body) --}}
    <div class="content-wrapper">
   
    <!-- Main content -->
    <section>
      <div class="content">
        @yield('content')
    </section>
   
               
      </div><!-- /.container-fluid -->
    </div>   
  </div> 

<!-- Modal -->
<div class="modal fade" id="Modalnuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar Nuevo registro</h4>
      </div>
      <div class="modal-body">
        <label>ID</label>
        <input type="text" name="" id="id" class="form-control input-sm">
        <label>Abr</label>
        <input type="text" name="" id="Abr" class="form-control input-sm">
        <label>Clientes</label>
        <input type="text" name="" id="Clientes" class="form-control input-sm">
        <label>Nombre del proyecto</label>
        <input type="text" name="" id="Nombre del Proyecto" class="form-control input-sm">
        <label>Estado</label>
        <input type="text" name="" id="Estado" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="Guardarnuevo">
          Agregar</button>
        
      </div>
    </div>  
  </div>
</div>

<!-- modal para edicion de datos -->

<!-- Modal -->
<div class="modal fade" id="Modaledicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar Datos</h4>
      </div>
      <div class="modal-body">
        <input type="text" hidden="" id="Idcliente" name="">
        <label>ID</label>
        <input type="text" name="" id="id_Modificar" class="form-control input-sm">
        <label>Abr</label>
        <input type="text" name="" id="Abr_Modificar" class="form-control input-sm">
        <label>Clientes</label>
        <input type="text" name="" id="Clientes_Modificar" class="form-control input-sm">
        <label>Nombre del proyecto</label>
        <input type="text" name="" id="Nombre del Proyecto_Modificar" class="form-control input-sm">
        <label>Estado</label>
        <input type="text" name="" id="Estado_Modificar" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning"  id="actualizaciondatos"  data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>  
  </div>
</div>




{{-- 4. Right Menu  --}}
  @include('layouts.RightMenu')

{{-- 5. Footer  --}}
  @include('Layouts.Footer')

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<button id="btn1">clon</button>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script> 

<script src= " {{ asset('vendors/plugins/jquery/jquery.min.js' )}}"></script>
<!-- Bootstrap 4 -->
<script src= " {{ asset('vendors/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('vendors/dist/js/adminlte.min.js')}}" ></script>
</body>
</html>

<script type="text/javascript">
        $(document).ready(function(){
          $('#tabla').load('componentes/index.blade.php');

        });
</script>
