@extends('layouts.site')

@section('content')

<section class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="news-list">
                    @foreach($news as $item)
                    <div class="post">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="title"><a href='/news/{{$item->id}}'>{{$item->title}}</a></h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="img-wrapper">
                                    <img src="{{asset($item->preview)}}" alt="">
                                </div>
                            </div>

                            <p class="meta">{{$item->date}}
                                &nbsp;&bull;&nbsp; <a href='/news/{{$item->id}}' class="permalink"> Подробнее</a>
                            </p>
                            <br>
                            <div class="entry">
                                <p>{!!$item->short_content!!}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
    </div>
</section>


@endsection
