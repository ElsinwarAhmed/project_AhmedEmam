<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                {{--__('messages.hello gus') ..MULtilang  --}}
                <h1>{{__('messages.hello gus')}}</h1>
                {{-- <h2>{{$obj -> name}} -- {{$obj -> age}}</h2> --}}

                @if ($name == "AA")
                <h2>{{$name}} -- {{$age}}</h2>
                @else
                <h2>Hello Your Name Is False</h2>
                @endif

                <?php $arr = ["Ahmed", "Ali", "Fadi"]; ?>
                <?php $arr2 = []; ?>

                @foreach ($arr as $item)

                <h2>{{$item}}</h2>

                @endforeach

                {{--forelse >> sane foreach... but in case empty, return value  --}}

                @forelse ($arr2 as $item)
                <h2>{{$item}}</h2>

                @empty
                    <h2>Array Is Empty</h2>

                @endforelse


                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="{{route("test",5)}}">Test</a>
                    <a href="{{route("test1")}}">Test 1</a>
                    <a href="{{route("admin")}}">Admin</a>
                    {{-- <a href="{{route("users")}}">Users</a> --}}
                    <a href="{{route("addDestination")}}">Add</a>
                    <a href="{{route("editDestination")}}">Edit</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
