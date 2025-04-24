<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>World Travlling Company</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.2/dist/minty/bootstrap.min.css">
<link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->


    <link href="{{url('css/offcanvas.css')}}" rel="stylesheet">
    <style>
    .navbar-nav > li > a {
        font-size: 18px;
        font-weight: bold;
        color: white !important;
    }

    .navbar-brand {
        font-size: 22px;
        color: white !important;
    }

    #sidebar {
    background-color: #d5f5e3;
    /* font-weight: bold; */
    padding: 15px;
    border-radius: 10px;
    color: #2c3e50;
}

#sidebar a {
    /* color: #2c3e50 !important; */
    color: #147ac0 !important;
    /* font-weight: bold; */
    display: block;
    position: sticky;
    margin-bottom: 8px;
}

</style>

</head>

<body>

    @section('navigation')

    @show

    <div class="container">

        <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-12 col-md-9">

                <div class="jumbotron">
                    @section('maincontent')

                    @show
                </div>

            </div>

            <div class="col-12 col-md-3" id="sidebar">
                @section('sidebar')

                @show


            </div>
        </div>
        <footer>
        </footer>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

 <!-- Това инжектира JavaScript секциите от отделните изгледи  -->
@yield('scripts')

</body>

</html>
