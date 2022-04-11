<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{url('../resources/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{url('img/favicon.png')}}">
    <title>
        Petshop
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{url('css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{url('css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{url('css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{url('css/argon-dashboard.min.css')}}" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">

    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    @include('elements.sidebar')

    <main class="main-content position-relative border-radius-lg ">
        @include('elements.navbar')
        <div class="container-fluid py-4">
            @yield('conteudo')
        </div>
    </main>

</body>
@include('elements.footer')

</html>
