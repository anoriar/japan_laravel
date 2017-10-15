
@extends('layouts.site')

@section('content')

<section class="feedback">
    <div class="container">
        <div class="row">
            <form action="{{route('actionStore')}}" method="post" name="form">      
                <h1>Свяжитесь с нами</h1><br>
                <span>Имя:</span>
                <input name="username" type="text" /></br>
                <span>E-mail:</span>
                <input name="email" type="text" /></br>
                <span>Тема сообщения:</span>
                <input name="theme" type="text" /></br>
                <span>Ваш текст:</span>
                <textarea name="message" rows="5"></textarea></br>
                <input type="submit" name="submit" value="Отправить" />
                {{csrf_field()}}
            </form>
        </div>
    </div>
</section>

@endsection


