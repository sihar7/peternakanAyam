<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div>

    <div class="main-wrapper">
        @include('layouts.header')


       @include('layouts.sidebar')

        <div class="page-wrapper">
            <div class="content">
                    @yield('content')
            </div>
        </div>
    </div>


    <script src="{{ URL::to('') }}/assets/js/jquery-3.6.0.min.js"></script>

    <script src="{{ URL::to('') }}/assets/js/feather.min.js"></script>

    <script src="{{ URL::to('') }}/assets/js/jquery.slimscroll.min.js"></script>

    <script src="{{ URL::to('') }}/assets/js/jquery.dataTables.min.js"></script>
    <script src="{{ URL::to('') }}/assets/js/dataTables.bootstrap4.min.js"></script>

    <script src="{{ URL::to('') }}/assets/js/bootstrap.bundle.min.js"></script>

    <script src="{{ URL::to('') }}/assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="{{ URL::to('') }}/assets/plugins/apexchart/chart-data.js"></script>

    @stack('js')
    <script src="{{ URL::to('') }}/assets/js/script.js"></script>
</body>

</html>
