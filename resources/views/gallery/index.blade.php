@extends('layouts.site')

@section('content')

<section class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="gallery">
                @foreach($images as $item)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="img-wrapper">
                        <img src="{{asset($item->image)}}" alt="">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection