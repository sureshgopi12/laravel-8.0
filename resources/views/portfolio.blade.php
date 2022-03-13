<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Project</title>
    <link href="{{ URL::asset('assets/css/bootstrap.min.css'); }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/fancybox/jquery.fancybox.css'); }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/flexslider.css'); }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/style.css'); }}" rel="stylesheet" />
</head>

<body>
    <div id="wrapper">
        <x-header />
        <x-page.header />
        <x-portfolio.content />
        <x-footer />
        <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
    </div>

    <script src="{{ URL::asset('assets/js/jquery.js'); }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.easing.1.3.js'); }}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap.min.js'); }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.fancybox.pack.js'); }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.fancybox-media.js'); }}"></script>
    <script src="{{ URL::asset('assets/js/portfolio/jquery.quicksand.js'); }}"></script>
    <script src="{{ URL::asset('assets/js/portfolio/setting.js'); }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.flexslider.js'); }}"></script>
    <script src="{{ URL::asset('assets/js/animate.js'); }}"></script>
    <script src="{{ URL::asset('assets/js/custom.js'); }}"></script>

</body>

</html>