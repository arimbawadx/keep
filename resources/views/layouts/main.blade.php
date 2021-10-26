<!doctype html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <link rel="manifest" href="{{asset('manifest/manifest.json')}}">
    <style type="text/css">
    .cursor-pointer{
      cursor: pointer;
    }
    div#preloader { position: fixed; left: 0; top: 0; z-index: 999; width: 100%; height: 100%; overflow: visible; background: #ffffff url('https://manifest.arimbawadx.com/loader/loader2.gif') no-repeat center center; }
  </style>
  <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="ddc66e05-ee6f-4209-9654-091544cd514b";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
  <title>@yield('title')</title>
</head>
<body>
  <!-- Navbar -->
  @include('layouts/header')
  <!-- /.navbar -->
  <div id="preloader"></div>
  @yield('content')
  <!-- Main Footer -->
  @include('layouts/footer')
  <script > 
    jQuery(document).ready(function($) {
      $(window).load(function(){
        $('#preloader').fadeOut('slow',function(){$(this).remove();});
      });
    });
  </script>
  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>