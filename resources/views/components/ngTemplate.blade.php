<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>বার্ষিক শিক্ষা জরিপ-২০২১। ব্যানবেইস</title>
    <!-- Scripts -->
    <script>
        var inst_id="<?php echo $inst_id;?>"
    </script>
    <script src="{{ asset('js/angular.js') }}"></script>
@yield('javascript')

    <!-- Styles -->
    {{--<link href="https://fonts.maateen.me/adorsho-lipi/font.css" rel="stylesheet">--}}
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
