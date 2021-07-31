
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('backend/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('backend/img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        App Name - @yield('title')
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    @include('admin.partials.stylesheet')
</head>

<body class="dark-edition">
    <div class="wrapper">
        <!-- sidebar -->
        @include('admin.partials.sidebar')
        <div class="main-panel">
            <!-- Navbar -->
            @include('admin.partials.nav')
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            <!-- footer start  -->
            @include('admin.partials.footer')
            <!-- footer end  -->
            <script>
                const x = new Date().getFullYear();
                let date = document.getElementById('date');
                date.innerHTML = '&copy; ' + x + date.innerHTML;
            </script>
        </div>
    </div>
    <!-- setting start -->
    @include('admin.partials.setting')
    <!-- setting end -->
    @include('admin.partials.jquery')
    @stack('scripts')
</body>

</html>