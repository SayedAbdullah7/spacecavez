<!-- resources/views/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>SpaceCavez</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href={{asset('css/bootstrap.min.css')}} rel="stylesheet">
    {{--    <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
    <style>
        html, body, .bg{
            min-height: 100%;
        }
        * { margin: 0; padding: 0; }


        body{
            background-color: unset;
        }
        .bg{
            overflow: hidden;
        }

    </style>
    <!-- Custom styles for this template -->
    <link href="{{asset('css/navbars.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css-slider/style.css')}}">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" >
    @stack('style')
</head>
<body id="body">

<div id="bg" class="bg" {{ Route::currentRouteName()=='home'?'style="height: 100vh"':''}}>
    <div class="overlay">
        <div class="content">
            <div class="planet">
                <div class="ring"></div>
                <div class="cover-ring"></div>
                <div class="spots">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>

                </div>
            </div>
            <p>loading</p>
        </div>
    </div>
    @include('frontend.includes.header',['page'=>$page])
    @yield('content')
    @if(!isset($page) || $page != 'home')
        @include('frontend.includes.footer')
    @endif
</div>



{{--<script src="{{ asset('js/app.js') }}"></script>--}}
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

<script  src="{{asset('css-slider/script.js')}}"></script>
<script>
    window.addEventListener('load', function() {
        // Document is fully loaded
        var overlay = document.querySelector('.overlay');
        overlay.style.display = 'none';
    });
</script>
@stack('js')

</body>
</html>
