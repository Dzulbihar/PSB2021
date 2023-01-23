<!doctype html>
<html lang="en">

<head>
  <title>Ponpes Askhabul Kahfi</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <!-- VENDOR CSS -->
  <link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
  <!-- MAIN CSS -->
  <link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
  <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
  <link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
   <!-- TOASTR -->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
   <!-- Data Table -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
  <!-- ICONS -->
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/aska.jpg')}}" width="30">

  <!-- Fasilitas Font -->
    <style>
      .ck-editor__editable_inline {
        min-height: 300px;
      }
    </style>

@yield('header')


</head>

<body>
  <!-- WRAPPER -->
  <div id="wrapper">


    <!-- NAVBAR -->

@include('layouts.includes._navbar')

    <!-- END NAVBAR -->


    <!-- LEFT SIDEBAR -->

@include('layouts.includes.sidebar')

    <!-- END LEFT SIDEBAR -->


    <!-- MAIN -->


@yield('content')


    <!-- END MAIN -->
    <div class="clearfix"></div>
    <footer>
      <div class="container-fluid">
        <p class="copyright">by <a href="#">Santri Salaf</a>,  Roudlotul Muttaqin</p>
      </div>
    </footer>
  </div>
  <!-- END WRAPPER -->
  <!-- Javascript -->
  <script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
  <script src="{{asset('admin/assets/scripts/klorofil-common.js')}}"></script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<!-- Data Table -->
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

<!-- Fasilitas Font -->
  <script src="{{asset('frontend/js/ckeditor.js')}}"></script>


  <script>
    @if(Session::has('sukses'))
      toastr.success("{{Session::get('sukses')}}", "Sukses")
    @endif
  </script>



@yield('footer')




</body>

</html>
