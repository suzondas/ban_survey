<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>বার্ষিক শিক্ষা জরিপ-২০২১। ব্যানবেইস</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/datatable.js') }}" defer></script>
    <script src="{{ asset('js/datatable.bootstrap4.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>
    <script src="{{ asset('js/schoolAndCollege.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body class="container-fluid">

{{--Top Banner--}}
@include('../components/banner')

{{--Navbar--}}
@include('schoolAndCollege.navBar')

{{--Content Inject--}}
@yield('content')
{{--Content Inject End--}}

{{--Footer--}}
@include('components/footer');

</body>
</html>
