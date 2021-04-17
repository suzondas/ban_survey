<?php
use Illuminate\Support\Facades\Auth;
$inst_id=Auth::user()->institute_id;
$inst_type=Auth::user()->institute_type;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>বার্ষিক শিক্ষা জরিপ-২০২১। ব্যানবেইস</title>
    <!-- Scripts -->
    <script>
        var inst_id="<?php echo $inst_id;?>"
        var inst_type="<?php echo $inst_type;?>"
    </script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/datatable.js') }}" defer></script>
    <script src="{{ asset('js/datatable.bootstrap4.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>
@yield('javascript')

    <!-- Styles -->
    <link href="https://fonts.maateen.me/kalpurush/font.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body class="container-fluid">

{{--Top Banner--}}
@include('components.banner')

{{--Navbar--}}
@include('components.navBar')

{{--Content Inject--}}
@yield('content')
{{--Content Inject End--}}

{{--Footer--}}
@include('components.footer')

</body>
</html>
