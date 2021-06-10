<?php
use Illuminate\Support\Facades\Auth;
$inst_id = Auth::user()->institute_id;
$inst_type = Auth::user()->institute_type;
?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>বার্ষিক শিক্ষা জরিপ-২০২১। ব্যানবেইস</title>
    <!-- Scripts -->
    <script type="text/javascript">
        var inst_id = "<?php echo $inst_id;?>"
        var inst_type = "<?php echo $inst_type;?>"
    </script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/datatable.js') }}" defer></script>
    <script src="{{ asset('js/datatable.bootstrap4.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>
@yield('javascript')

<!-- Styles -->
    {{--<link href="https://fonts.maateen.me/adorsho-lipi/font.css" rel="stylesheet">--}}
    <link href="https://fonts.maateen.me/kalpurush/font.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
{{--=============================Javascript Compatibility==========================--}}
<noscript>
    <style type="text/css">
        #pagecontainer {
            display: none;
        }
    </style>
    <h1 style="color:red;text-align: center;">We're sorry but This Website doesn't work properly without JavaScript
        enabled. Please enable it to continue.</h1>
</noscript>
{{--=============================Javascript Compatibility==========================--}}
<div class="container-fluid" id="pagecontainer">
    {{--Top Banner--}}
    @include('components.banner')

    {{--Navbar--}}
    @include('components.navBar')

    {{--Content Inject--}}
    @yield('content')
    {{--Content Inject End--}}

    {{--Footer--}}
    @include('components.footer')
</div>

{{--Checking Browser Compatibility--}}
<script src="{{ asset('js/browserCheck.js') }}" type="text/javascript"></script>
</body>
</html>
