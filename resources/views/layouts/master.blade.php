<html>

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
@show
</div>
@section('sidebar')
    This is the master sidebar.
@show

<div class = "container">
    @yield('content')
</div>

{{--AngularJS--}}
<script src="{{ asset('js/popup.js') }}"></script>

</body>
</html>