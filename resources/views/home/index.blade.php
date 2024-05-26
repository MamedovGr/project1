@extends('layouts.layouts')

@section('title')
    Product1
@endsection

@section('body')
    @foreach($categoryProducts as $categoryProduct)
        <div class="container-xl">
            <div class="display-4 text-danger pt-5">
                <a href="{{ route('product.index', ['categories' => [$categoryProduct['category']->id]]) }}" class="link-danger text-decoration-none">
                    {{ $categoryProduct['category']->name}}
                </a>
                <span class="text-warning h4 fw-normal">({{$categoryProduct['category']->products_count}})</span>
            </div>


            <div class="row align-items-center py-4 justify-content-center">
                @foreach($categoryProduct['products'] as $product)
                    <div class="col-md-6 col-xxl-3 col-sm-12 col-lg-4">
                        <a href="{{route('details', $product->id)}}" class="text-decoration-none link-danger">
                            <div class="card bg-dark text-danger border-danger" style="width:20rem;margin:20px 0 24px 0">
                                <img class="img-fluid bg-secondary-subtle" src="{{$product->image}}" alt="image">
                                <div class="card-body">
                                    <h4 class="card-title">{{$product->name}}</h4>
                                    <div class="card-text pb-3">{{ round($product->price, 2) }} <small>TMT</small> </div>
                                    {{--@auth--}}
                                        {{--<a href="{{route('index')}}" class="btn btn-primary">@lang('app.addtocart')</a>--}}
                                    {{--@else--}}
                                        {{--<a href="{{route('register')}}" class="btn btn-primary">@lang('app.addtocart')</a>--}}
                                    {{--@endauth--}}
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
@endsection