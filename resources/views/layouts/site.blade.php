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
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <header>
                        <img src="{{asset('images/banner.jpg')}}"/>
                    </header>
                </div>
            </div>
        </div>
        @yield('content')

        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
