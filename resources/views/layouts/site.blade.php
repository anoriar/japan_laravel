<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Japan</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{asset('css/bootstrap.min.css')}}" type="text/css" rel="stylesheet"> 
        <link href="{{asset('css/main.css')}}" type="text/css" rel="stylesheet"> 
        <link href="{{asset('css/responsive.css')}}" type="text/css" rel="stylesheet"> 
    </head>

    <body>

        <header>
            <div class="container">
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <header>
                            <img src="{{asset('images/banner.jpg')}}"/>
                        </header>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <nav class="top_menu">
                            <ul>
                                <li><a href="/">Главная</a></li>
                                <li><a href="/news">Новости</a></li>
                                <li><a href="/gallery">Галерея</a></li>
                                <li><a href="/feedback">Обратная связь</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')

        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/common.js"></script>
    </body>
</html>
