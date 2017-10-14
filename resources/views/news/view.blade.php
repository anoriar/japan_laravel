@extends('layouts.site')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <nav class="top_menu">
                <ul>
                    <li><a href="/">Главная</a></li>
                    <li class="active"><a href="/news/">Новости</a></li>
                    <li><a href="/gallery/">Галерея</a></li>
                    <li><a href="/feedback/">Обратная связь</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <section class="content-wrapper">
        <div class="row">
            <div class="col-md-9">
                <div class="article">
                    @if($article)

                    <div class="post">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="title">{{$article->title}}</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="img-wrapper">
                                    <img src="{{asset($article->preview)}}" alt="">
                                </div>
                            </div>

                            <div class="entry">
                                <p>{!!$article->content!!}</p>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-md-3">
                <div class="categories_bar">
                    <h2>Категории</h2>
                    <ul>
                        @foreach($categories as $item)
                        <li><a href="/category/{{$item->id}}">{{$item->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection


