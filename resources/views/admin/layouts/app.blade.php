<!DOCTYPE html>
<html>
<head>

 @include('admin/layouts/head')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
 @include('admin/layouts/header')
  <!-- /.navbar -->

 


 
  
  <!-- Control Sidebar -->
 @include('admin/layouts/sidebar')
  <!-- /.control-sidebar -->

@section('main-content')
   @show
 
 @include('admin/layouts/footer')
 


