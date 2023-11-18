<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>DIKO ADMIN</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{url('otika')}}/assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{url('otika')}}/assets/css/style.css">
  <link rel="stylesheet" href="{{url('otika')}}/assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{url('otika')}}/assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href="{{url('otika')}}/assets/img/favicon.ico" />

  <link href="{{url('otika')}}/assets/css/main.css" rel="stylesheet">

  <link rel="stylesheet" href="{{url('otika')}}/assets/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="{{url('otika')}}/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('otika')}}/assets/bundles/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="{{url('otika')}}/assets/bundles/jquery-selectric/selectric.css">
  <link rel="stylesheet" href="{{url('otika')}}/assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
  @section('css')
  @show

</head>

<body>
  @include('layout.header')
  @include('layout.sidebar')
  @yield('content')
  @include('layout.footer')

  <script src="{{url('otika')}}/assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="{{url('otika')}}/assets/bundles/apexcharts/apexcharts.min.js"></script>
  <script src="{{url('otika')}}/assets/bundles/datatables/datatables.min.js"></script>
  <script src="{{url('otika')}}/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{url('otika')}}/assets/bundles/jquery-ui/jquery-ui.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="{{url('otika')}}/assets/js/page/index.js"></script>
  <script src="{{url('otika')}}/assets/js/page/datatables.js"></script>
  <!-- Template JS File -->
  <script src="{{url('otika')}}/assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="{{url('otika')}}/assets/js/custom.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>

</html>
