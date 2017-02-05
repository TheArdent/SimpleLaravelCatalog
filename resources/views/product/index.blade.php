@extends('index')

@section('content')

    <div class="col-md-4">
        <img src="/uploads/product/medium/{{$product->image}}" />

        @foreach($product->getGalery() as $galery)
            <img src="/uploads/gallery/small/{{$galery->name}}">
        @endforeach

    </div>
    <div class="col-md-8">
        <h2>{{$product->name}}</h2>
        <p>{!! $product->description !!}</p>
    </div>

    <div class="col-md-8">

        @foreach($product->getReview() as $review)
            <div class="col-md-8">
                <h3> {{$review->user_name}} <small>{{$review->email}}</small></h3>
                <p> {!! $review->text !!}</p>
                <strong>Star:{{$review->star}}</strong><br/>
                <small>{{date('H:m:s d-m-Y',$review->created_at)}}</small>
            </div>
        @endforeach

    </div>

@stop