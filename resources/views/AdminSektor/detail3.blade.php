
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') Detail verifikasi</title>
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
        <!-- Left Panel -->

        <aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">

                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{ url('/dashboard')}}"><img class="user-avatar rounded-circle" src="https://i.ibb.co/rpZyCm3/logo.png" width="32" height="32">
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

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        @foreach ($verified as $data)
                        <h1>Nama : {{$data->nama_lengkap}}</h1>
                        <h1>NIP : {{$data->nip}}</h1>
                        @break
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Table Petugas</strong>
                        </div>
                        <div class="card-body">
                            @if (session('alert'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h4><i class="icon fa fa-check"></i> Berhasil</h4>
                                {{ session('alert') }}.
                            </div>
                        @endif
                  <table id="" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>APD_id</th>
                        <th>Jenis APD</th>
                        <th>Merk</th>
                        <th>Tahun</th>
                        <th>Kondisi</th>
                        <th>Photo</th>
                        <th>Status Verifikasi</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($verified as $data)
                        <tr>
                            <td>{{$data->apd_id}}</td>
                            <td>{{$data->jenis_apd}}</td>
                            <td>{{$data->merk}}</td>
                            <td>{{$data->tahun}}</td>
                            <td>{{$data->nama_kondisi}}</td>
                            <td>{{$data->foto}}</td>
                            <td>{{$data->status}}</td>

                        <td>
                            <a href="#" class="btn btn-success btn-sm"><i class="fa fa-check"></i> verified</a>
                        </td>
                        </tr>
                        @endforeach

                    </tbody>
                  </table>
                        </div>

                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->



    </div><!-- /#right-panel -->

    <script>
        function showAlert()
        {
            swal("Verifikasi", "Berhasil", "success");
        }
        function showAlerts()
        {
            swal("Ditolak", "Tidak Terverifikasi", "error");
        }
    </script>

    <!-- Right Panel -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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

</body>
</html>
