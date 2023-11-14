<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... Your existing head content ... -->
</head>
<body id="@yield('pageID')">

<div id="load"></div>

<div class="">
    <!-- Static navbar -->
    <nav class="navbar navbar-default">
        <!-- ... Your existing navbar content ... -->
    </nav>
</div>

@yield('content')


    <!-- JQuery scripts
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- JQuery local fallback-->
    @verbatim
    <!-- JQuery local fallback-->
    <script>
        window.jQuery || document.write('<script type="text/javascript" src="{{ asset("js/jquery-2.1.1/jquery.min.js") }}"><\/script>');
    </script>
@endverbatim

 
    <!-- Bootstrap core JavaScript CDN-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Bootstrap JS local fallback-->
    @verbatim
    <script>
        if(typeof($.fn.modal) === 'undefined') document.write('<script type="text/javascript" src="{{ asset("js/bootstrap/bootstrap.min.js") }}"><\/script>');
    </script>
@endverbatim

    <!-- Bootstrap CSS local fallback-->
    <div id="boostrapCssTest" class="hidden"></div>
    @verbatim
    <script>
        $(function () {
            if ($('#boostrapCssTest').is(':visible')) {
                $("head").prepend('<link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}"><link rel="stylesheet" href="{{ asset("css/datatables/responsive.bootstrap.min.css") }}"><link rel="stylesheet" href="{{ asset("css/datatables/dataTables.bootstrap.min.css") }}"><link rel="stylesheet" href="{{ asset("css/font-awesome.min.css") }}">');
            }
        });
    </script>
@endverbatim


    <!-- DataTables CDN-->
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>

    <!-- DataTables local fallback-->
    @verbatim
    <script>
        window.jQuery || document.write('<script type="text/javascript" src="{{ asset("js/datatables/jquery.dataTables.min.js") }}"><\/script><script type="text/javascript" src="{{ asset("js/datatables/dataTables.bootstrap.min.js") }}"><\/script><script type="text/javascript" src="{{ asset("js/datatables/dataTables.responsive.min.js") }}"><\/script>');
    </script>
@endverbatim

    <!-- Bootstrap Validator -->
    <script type="text/javascript" src="{{ asset('js/bootstrap/bootstrapValidator.min.js') }}"></script>

    <!-- Custom Scripts -->
    <script src="{{ asset('js/custom/script.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/custom/dataTables.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/custom/functions.js') }}" type="text/javascript"></script>


</body>
</html>
