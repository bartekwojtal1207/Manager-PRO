@extends('layouts.app')

@section('title','products list')

@section('content')
<div class="row">
    <h3 class="text-left">Wszystkie produkty </h3>
</div>
@foreach($category as $categoryTitle)
<div class="row">
    <h5 class="col-md-12 category-title">{{App\Enums\CategoryType::getDescription($categoryTitle)}}: </h5>
    <div class="products-list-container">
    @foreach($products as $product)
        @if( $product->category_product_id === $categoryTitle)
            <div class="products-list">
                <p class="text-center">{{$product->name_product}}</p>
                <img src="{{asset('img/sliderPhoto/product'.$product->id.'.jpg')}}" alt="lista produktów" class="img img-responsive list-product-img">
                <span class="col-md-12 price-element text-center">{{number_format(intval($product->price))}} zł</span>
                <a href="{{route('product.index',$product->id)}}"><p class="text-center text-info">sprawdź</p></a>
            </div>
        @endif
    @endforeach
    </div>
</div>
<hr>
@endforeach


@endsection

@section('script-js')

@endsection