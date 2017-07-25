<html lang="{{ config('app.locale') }}">

<head>
      <title>@yield('title')</title>

    {{--Font--}}
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes:400,112" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,112" rel="stylesheet" type="text/css">

    {{--Style--}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>
<div class = "home">
    @section('home')
        <div class = "home-welcome">
            entrance to
        </div>
        <div class = "home-title">
            <h1>Ethereal Tales</h1>
        </div>
    @show
</div>

<div class = "container">
    @section('content')
    @show
</div>


{{--AngularJS--}}
<script src="{{ asset('js/lib/angular.min.js') }}"></script>
<script src="{{ asset('js/popup.js') }}"></script>
<script src="{{ asset('js/ethereal-tales.js') }}"></script>
</body>
</html>