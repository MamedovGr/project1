@extends('layouts/layouts')

@section('title')
    Details
@endsection

@section('body')
    <div class="container-xl">
        <div class="row text-danger">
            <div class="col-12 col-md-5">
                <img class="card-img-top " src="{{$product->image}}" alt="image" style="width:100%">
            </div>
            <div class="col-12 col-md-6 text-center text-md-start">
                <h4 class="h1 fw-normal pb-1">{{$product->name}}</h4>
                <div class=" h3 fw-normal pb-2">{{$product->price}} TMT</div>

                <div class="h5 fw-normal pb-2">{{$product->description}}</div>
                {{--@auth--}}
                    {{--<div class="h2 pb-2 text-success">{{$book->sold ? 'Sold' : ''}}</div>--}}
                {{--@endauth--}}

                {{--@auth--}}
                    {{--<a href="{{route('details', $book->id)}}" class="btn btn-primary">@lang('app.addtocart')</a>--}}
                {{--@else--}}
                    {{--<a href="{{route('register')}}" class="btn btn-primary">@lang('app.addtocart')</a>--}}
                {{--@endauth--}}

                {{--@auth--}}
                {{--<a href="{{route('reviews')}}" class="btn btn-warning"> Review </a>--}}
                {{--@else--}}
                {{--<a href="{{route('register')}}" class="btn btn-warning"> Review </a>--}}
                {{--@endauth--}}
            </div>
        </div>
    </div>
@endsection