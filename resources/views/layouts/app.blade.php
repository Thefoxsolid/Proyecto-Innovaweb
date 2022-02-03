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

</head>



<body class="hold-transition sidebar-mini">
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
  <div id="table"></div>
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