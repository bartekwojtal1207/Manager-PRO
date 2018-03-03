@extends('layouts.app')

@section('title','Product')

@section('content')
    @foreach($products as $product)
        <div class="row">
            <div class="col-md-12">

                    {{--{{dd($product)}}--}}
                    <h3 class="lead">Karta produtku: <b>{{$product->name_product}}</b></h3>
                    <hr>

            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="info-box">
                    <div class="info-box-section">
                        <div class="price-section" id="opac">
                            <p class="price text-center">
                                {{ number_format($product->price, 2, ',', ' ') }}zł
                            </p>
                        </div>
                    </div>
                    <div class="info-box-section">
                        <p class="text-center text-info lead">
                            produkt jest dostępny
                        </p>
                    </div>
                    <div class="info-box-section">

                    </div>

                    <div class="info-box-section">
                        <button class="btn btn-success text-center">Dodaj do koszyka</button>
                    </div>
                </div>


            </div>
            <div class="col-md-9">
                <div class="btn btn-danger test">
                    klik klik klik
                </div>
            </div>


        </div>
    @endforeach
@endsection

@section('script-js')
    {{-- scritpt only for edit profile page--}}
    <script src="{{ asset('js/product.js') }}"></script>
@endsection