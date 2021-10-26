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
        <!-- include summernote css/js -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <link rel="manifest" href="{{asset('manifest/manifest.json')}}">
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <title>@yield('title')</title>
        <style type="text/css">
        div#preloader { position: fixed; left: 0; top: 0; z-index: 999; width: 100%; height: 100%; overflow: visible; background: #ffffff url('https://manifest.arimbawadx.com/loader/loader2.gif') no-repeat center center; }
    </style>
</head>
<body class="bg-dark">
    <div id="preloader"></div>
    <div class="container mt-5">
        <div class="row pt-5">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card bg-light border-0 shadow rounded-3 my-5">
              <div class="card-body p-4 p-sm-5">
                <h4 class="card-title text-center bg-warning rounded">KEEP (CATATAN TERBUKA)</h4>
                <!-- <h5 class="card-title text-center">Silahkan masukan username</h5> -->
                <form action="/login" method="post">
                    @csrf
                    <div class="form-floating mb-3">
                        <input required autocomplete="off" name="username" type="text" class="form-control text-lowercase" placeholder="Masukan User ID">
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary btn-block" type="submit">Masuk</button>
                    </div>
                </form>
                <div class="d-grid mt-2">
                    <button class="btn btn-success btn-block" type="button" data-toggle="modal" data-target="#BuatIDModal">Buat ID</button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="BuatIDModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">ID BARU</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                    <form action="/new-id" method="post">
                        @csrf
                        <div class="form-floating mb-3">
                            <input required autocomplete="off" name="username" type="text" class="form-control text-lowercase" placeholder="User ID">
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-block" type="submit">Buat</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<script > 
    jQuery(document).ready(function($) {
      $(window).load(function(){
        $('#preloader').fadeOut('slow',function(){$(this).remove();});
    });
  });
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
@include('sweetalert::alert')
</body>
</html>

