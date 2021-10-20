
<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') Verifikasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="{{ asset('style/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/scss/style.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="icon" href="https://i.ibb.co/rpZyCm3/logo.png" sizes="32x32" type="image/png">
		<meta name="theme-color" content="#563d7c">
  </head>

<body>
  <script src="{{ asset('style/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
  <script src="{{ asset('style/assets/js/popper.min.js')}}"></script>
  <script src="{{ asset('style/assets/js/plugins.js')}}"></script>
  <script src="{{ asset('style/assets/js/main.js')}}"></script>
  <script src="{{ asset('style/assets/js/lib/data-table/datatables.min.js')}}"></script>
  <script src="{{ asset('style/assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
  <script src="{{ asset('style/assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
  <script src="{{ asset('style/assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
  <script src="{{ asset('style/assets/js/lib/data-table/jszip.min.js')}}"></script>
  <script src="{{ asset('style/assets/js/lib/data-table/pdfmake.min.js')}}"></script>
  <script src="{{ asset('style/assets/js/lib/data-table/vfs_fonts.js')}}"></script>
  <script src="{{ asset('style/assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
  <script src="{{ asset('style/assets/js/lib/data-table/buttons.print.min.js')}}"></script>
  <script src="{{ asset('style/assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
  <script src="{{ asset('style/assets/js/lib/data-table/datatables-init.js')}}"></script>
  <script type="text/javascript">
      $(document).ready(function() {
        $('#bootstrap-data-table-export').DataTable();
      } );
  </script>

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#"><img class="user-avatar rounded-circle" src="https://i.ibb.co/rpZyCm3/logo.png" width="32" height="32">
                    E-APD</a>
               <a class="navbar-brand hidden" href="#"><img class="user-avatar rounded-circle" src="https://i.ibb.co/rpZyCm3/logo.png" width="32" height="32"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ url('/dashboard')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                      <a href="{{ url('/verifikasi')}}"> <i class="menu-icon fa fa-check "></i>Verifikasi </a>
                      <a href="{{ url('/verified')}}"> <i class="menu-icon fa fa-check-square-o "></i>Verified </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{ asset('foto/foto.jpg')}}" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

        </header>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Verifikasi Data APD</strong>
                        </div>
                        <div class="card-body">
                            <form action="{{url('/store') }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label class="col-md-4 text-md-right form-control-label" for="disable-input">Jenis APD</label>
                                    <div class="col-md-6">
                                        <input type="text" id="disabled-input" name="disabled-input" placeholder="{{$verifikasi->apd_id}}" disabled="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 text-md-right form-control-label" for="disable-input">Merk</label>
                                    <div class="col-md-6">
                                        <input type="text" id="disabled-input" name="disabled-input" placeholder="{{$verifikasi->merk}}" disabled="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 text-md-right form-control-label" for="disable-input">Tahun</label>
                                    <div class="col-md-6">
                                        <input type="text" id="disabled-input" name="disabled-input" placeholder="{{$verifikasi->tahun}}" disabled="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 text-md-right form-control-label" for="disable-input">Kondisi</label>
                                    <div class="col-md-6">
                                        <input type="text" id="disabled-input" name="disabled-input" placeholder="{{$verifikasi->kondisi_id}}" disabled="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 text-md-right form-control-label" for="disable-input">Photo</label>
                                    <div class="col-md-6">
                                        <input type="text" id="disabled-input" name="disabled-input" placeholder="{{$verifikasi->foto}}" disabled="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 text-md-right">Status Verifikasi</label>
                                    <div class="col-md-6">
                                        <select name="group_piket" class="form-control">
                                            <option value="">Pilih</option>
                                            <option value="1">Rejected</option>
                                            <option value="2">Accepted</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 text-md-right"></label>
                                    <div class="col-md-6">
                                        <button class="btn btn-success btn-sm" type="submit"><i class="fa fa-check"> Verifikasi</i></button>
                                    </div>
                                </div>
                    </form>


                </div>
            </div>

        </div>
    </div> <!-- .card -->

    </div><!-- /#right-panel -->

</body>
</html>
