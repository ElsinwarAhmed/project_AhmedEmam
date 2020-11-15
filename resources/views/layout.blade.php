<!DOCTYP html>
<html>
    <head>
        <meta charset="utf-8">
        <title> اضافة جهة </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/bootstrap-rtl.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        @include('header.navbar')


        @include('header.topHeader')


        @yield('content')


<script src="{{URL::asset('js/main-jquery.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('js/jqu.js')}}"></script>

</body>
</html>
