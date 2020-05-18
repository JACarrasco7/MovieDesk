<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administracion MovieDesk</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('adminLTE/img/logo.png') }}" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('adminLTE/dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins/toastr/toastr.min.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

    <style>
        .link-active {
            background: rgba(255, 255, 255, .1);
            color: white
        }
    </style>

</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto mr-5">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ auth()->guard('admin')->user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin-left:90px">
                        <a class="dropdown-item" href="{{ route('admin-logout') }}">Cerrar sesion</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('admin-index') }}" class="brand-link ">
                <img src="{{ asset('adminLTE/img/logo.png') }}" class="brand-image mt-2 w-20" style="opacity: .7">
                <span class="brand-text font-weight-light" style="font-size: 32px">MovieDesk</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item">
                            <a href="{{ route('admin-movies') }}"
                                class="nav-link {{ AsignarClaseActive('admin-movies') }}">
                                <i class="fas fa-video"></i>
                                <p>&nbsp;Peliculas</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin-genders') }}"
                                class="nav-link {{ AsignarClaseActive('admin-genders') }}">
                                <i class="fas fa-tags"></i>
                                <p>&nbsp;Géneros</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin-actors') }}"
                                class="nav-link {{ AsignarClaseActive('admin-actors') }}">
                                <i class="fas fa-user-astronaut"></i>
                                <p>&nbsp;Actores</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin-clients') }}"
                                class="nav-link {{ AsignarClaseActive('admin-clients') }}">
                                <i class="fas fa-address-card"></i>
                                <p>&nbsp;Clientes</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin-administrators') }}"
                                class="nav-link {{ AsignarClaseActive('admin-administrators') }}">
                                <i class="fas fa-users-cog"></i>
                                <p>&nbsp;Administradores</p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>


        @yield('content')



        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.0.2
            </div>
            <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('adminLTE/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('adminLTE/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('adminLTE/dist/js/demo.js') }}"></script>
    <!-- DataTables -->
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
    <!-- Toastr -->
    <script src="{{ asset('adminLTE/plugins/toastr/toastr.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('adminLTE/plugins/select2/js/select2.full.min.js') }}"></script>
    <!-- charts -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!-- JS -->
    <script src="{{ asset('js/movie.js') }}"></script>
    <script src="{{ asset('js/actor.js') }}"></script>
    <script src="{{ asset('js/gender.js') }}"></script>
    <script src="{{ asset('js/client.js') }}"></script>
    <script src="{{ asset('js/administrators.js') }}"></script>
    <script src="{{ asset('js/tables.js') }}"></script>
    <!-- Toastr Alert -->
    <?php include('toastr-alert/toastr-movies.php') ?>
    <?php include('toastr-alert/toastr-actors.php') ?>
    <?php include('toastr-alert/toastr-genders.php') ?>
    <?php include('toastr-alert/toastr-clients.php') ?>
    <?php include('toastr-alert/toastr-administrators.php') ?>
    <!-- Select Mu -->
    <script>
        //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
    </script>

    <?php $mes = ['enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre']; ?>



</body>

</html>