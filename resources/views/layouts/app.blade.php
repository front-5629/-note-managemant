<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>弁当予約</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!-- overlayScrollbars -->
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper" id="app">
    <!-- Content Wrapper. Contains page content -->
    <div class="container-fluid p-0">
        @auth()
        <!-- Content Header (Page header) -->
        <div class="content-header m-0 bg-gradient-gray py-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <p class="m-0 app-title">弁当予約</p>
                    </div><!-- /.col -->
                    <div class="col-6">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="btn  text-bold btn-light btn-radius" style="font-size: 10px">
                                        {{ __('ログアウト') }}
                                    </button>
                                </form>
                            </li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        @endauth
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @yield('content')
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
</div>
<!-- ./wrapper -->

<script src="/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="/plugins/moment/moment.min.js"></script>
<!-- date-range-picker -->
<script src="/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="/plugins/select2/js/select2.full.min.js"></script>

<script src="/dist/js/adminlte.min.js"></script>

<script src="{{ mix('js/app.js') }}" defer ></script>
<script>
    $(function () {
        $('.select2').select2()
    });
</script>
@yield('js')

</body>
</html>
