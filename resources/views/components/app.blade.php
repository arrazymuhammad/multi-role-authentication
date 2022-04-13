<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ url('/') }}/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <x-template.header />
        <x-template.sidebar :menu="$menu" header="{{ $header }}" />
        <div class="content-wrapper">
            <div class="content">
                <div class="container-fluid pt-3">
                    {{ $slot }}
                </div>
            </div>
        </div>
        @if (!auth()->guard('mahasiswa')->check())
            <x-template.control-sidebar />
        @endif
        <x-template.footer />
    </div>
    <script src="{{ url('/') }}/plugins/jquery/jquery.min.js"></script>
    <script src="{{ url('/') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('/') }}/dist/js/adminlte.min.js"></script>
</body>

</html>
