{{--Code rights for this page reserved by Suzon Das. Contact: suzon.du@hotmail.com--}}
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ব্যানবেইস বার্ষিক শিক্ষা জরিপ-২০২১</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        /*mujib borsho logo*/
        .mujib_borsho {
            float: right;
            width: 80px;
            height: 80px;
            vertical-align: center;
        }
    </style>
</head>
<body class="">
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

{{--Loading Content--}}
@yield('content')
{{--Loading Content--}}

{{--=============================Browser Compatibility==========================--}}
<script type="text/javascript">
    function get_browser() {
        var ua = navigator.userAgent, tem,
            M = ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
        if (/trident/i.test(M[1])) {
            tem = /\brv[ :]+(\d+)/g.exec(ua) || [];
            return {name: 'IE', version: (tem[1] || '')};
        }
        if (M[1] === 'Chrome') {
            tem = ua.match(/\bOPR\/(\d+)/)
            if (tem != null) {
                return {name: 'Opera', version: tem[1]};
            }
        }
        if (window.navigator.userAgent.indexOf("Edge") > -1) {
            tem = ua.match(/\Edge\/(\d+)/)
            if (tem != null) {
                return {name: 'Edge', version: tem[1]};
            }
        }
        M = M[2] ? [M[1], M[2]] : [navigator.appName, navigator.appVersion, '-?'];
        if ((tem = ua.match(/version\/(\d+)/i)) != null) {
            M.splice(1, 1, tem[1]);
        }
        return {
            name: M[0],
            version: +M[1]
        };
    }

    var browser = get_browser()
    var isSupported = isSupported(browser);

    function isSupported(browser) {
        var supported = false;
        if (browser.name === "Chrome" && browser.version >= 48) {
            supported = true;
        } else if ((browser.name === "MSIE" || browser.name === "IE") && browser.version <= 11) {
            supported = false;
        } else if (browser.name === "Edge") {
            supported = true;
        }
        return supported;
    }
    if (!isSupported) {
        //render unsupported message
        document.write("<h1 style='color:red;'>The website is not supported in Your Browser. Please use other browsers! " +
            "We highly recommend you to use latest Chrome Browser</h1>");
        document.getElementById("pagecontainer").style.display = "none";
    }
</script>
{{--=============================Browser Compatibility==========================--}}
</body>
</html>