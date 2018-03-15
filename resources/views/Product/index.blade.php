@extends('layouts.app')

@section('title','Product')

@section('content')
    {{--@foreach($products as $product)--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-12">--}}
                    {{--<h3 class="lead">Karta produtku: <b>{{$product->name_product}}</b></h3>--}}
                    {{--<h5>Kategoria: <a role="button">{{$categoryTitle}}</a></h5>--}}
                    {{--<hr>--}}

            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-3">--}}
                {{--<div class="info-box">--}}
                    {{--<div class="info-box-section">--}}
                        {{--<div class="price-section" id="opac">--}}
                            {{--<p class="price text-center opacity-element">--}}
                                {{--{{ number_format($product->price, 2, ',', ' ') }}zł--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="info-box-section">--}}
                        {{--<p class="text-center text-info lead">--}}
                            {{--produkt jest dostępny--}}
                        {{--</p>--}}
                    {{--</div>--}}
                    {{--<div class="info-box-section">--}}

                    {{--</div>--}}

                    {{--<div class="info-box-section">--}}
                        {{--<button class="btn btn-success text-center">Dodaj do koszyka</button>--}}
                    {{--</div>--}}
                {{--</div>--}}


            {{--</div>--}}
            {{--<div class="col-md-9">--}}
                {{--<div class="btn btn-danger test">--}}
                    {{--klik klik klik--}}
                {{--</div>--}}
                {{--<hr>--}}
                {{--<div>--}}
                    {{--<h5 class="text-info text-left">Opis produktu: </h5>--}}
                    {{--<div class="text-left product-description hidden-md-down col-md-5">--}}
                        {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id orci mattis, lobortis turpis nec, blandit ligula. Vivamus et purus at ex ornare auctor. Curabitur mattis leo mauris, non pretium tellus facilisis sit amet. Aliquam erat volutpat. Aenean nunc velit, semper et venenatis eu, tincidunt in augue. Fusce a varius turpis. Quisque aliquam cursus leo, at finibus leo commodo tincidunt. Suspendisse vel tellus odio.--}}
                            {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id orci mattis, lobortis turpis nec, blandit ligula. Vivamus et purus at ex ornare auctor. Curabitur mattis leo mauris, non pretium tellus facilisis sit amet. Aliquam erat volutpat. Aenean nunc velit, semper et venenatis eu, tincidunt in augue. Fusce a varius turpis. Quisque aliquam cursus leo, at finibus leo commodo tincidunt. Suspendisse vel tellus odio.--}}
                            {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id orci mattis, lobortis turpis nec, blandit ligula. Vivamus et purus at ex ornare auctor. Curabitur mattis leo mauris, non pretium tellus facilisis sit amet. Aliquam erat volutpat. Aenean nunc velit, semper et venenatis eu, tincidunt in augue. Fusce a varius turpis. Quisque aliquam cursus leo, at finibus leo commodo tincidunt. Suspendisse vel tellus odio.--}}
                            {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id orci mattis, lobortis turpis nec, blandit ligula. Vivamus et purus at ex ornare auctor. Curabitur mattis leo mauris, non pretium tellus facilisis sit amet. Aliquam erat volutpat. Aenean nunc velit, semper et venenatis eu, tincidunt in augue. Fusce a varius turpis. Quisque aliquam cursus leo, at finibus leo commodo tincidunt. Suspendisse vel tellus odio.--}}
                    {{--</div>--}}

                    {{--<div class="more-info col-md-9">--}}
                        {{--<a role="button" class="text-info hidden-md-down">pokaż więcej...</a>--}}
                    {{--</div>--}}
                    {{--<div class="more-info-hidden hidden col-md-9">--}}
                        {{--<a role="button" class="text-info hidden-md-down">ukryj...</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div>--}}


                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-3">--}}
                {{--<ul class="test-ul">--}}
                    {{--<li class="test-li active-li">--}}
                        {{--<a class="test-link" role="button">--}}
                            {{--<p class="test-p">--}}
                                {{--test--}}
                                {{--<small class="test-small">small </small>--}}
                            {{--</p>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="test-li">--}}
                        {{--<a class="test-link" role="button">--}}
                            {{--<p class="test-p">--}}
                                {{--test--}}
                                {{--<small class="test-small">small </small>--}}
                            {{--</p>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="test-li">--}}
                        {{--<a class="test-link" role="button">--}}
                            {{--<p class="test-p">--}}
                                {{--test test test test--}}
                                {{--<small class="test-small">small smsall small</small>--}}
                            {{--</p>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="test-li">--}}
                        {{--<a class="test-link" role="button">--}}
                            {{--<p class="test-p">--}}
                                {{--test test test test--}}
                                {{--<small class="test-small">small smsall small</small>--}}
                            {{--</p>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
            {{--<div class="col-md-3">--}}
                {{--<ul class="test-ul">--}}
                    {{--<li class="test-li active-li">--}}
                        {{--<a class="test-link" role="button">--}}
                            {{--<p class="test-p">--}}
                                {{--test--}}
                                {{--<small class="test-small">small </small>--}}
                            {{--</p>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="test-li">--}}
                        {{--<a class="test-link" role="button">--}}
                            {{--<p class="test-p">--}}
                                {{--test--}}
                                {{--<small class="test-small">small </small>--}}
                            {{--</p>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="test-li">--}}
                        {{--<a class="test-link" role="button">--}}
                            {{--<p class="test-p">--}}
                                {{--test test test test--}}
                                {{--<small class="test-small">small smsall small</small>--}}
                            {{--</p>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="test-li">--}}
                        {{--<a class="test-link" role="button">--}}
                            {{--<p class="test-p">--}}
                                {{--test test test test--}}
                                {{--<small class="test-small">small smsall small</small>--}}
                            {{--</p>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
            {{--<div class="col-md-3">--}}
                {{--<ul class="test-ul">--}}
                    {{--<li class="test-li active-li">--}}
                        {{--<a class="test-link" role="button">--}}
                            {{--<p class="test-p">--}}
                                {{--test--}}
                                {{--<small class="test-small">small </small>--}}
                            {{--</p>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="test-li">--}}
                        {{--<a class="test-link" role="button">--}}
                            {{--<p class="test-p">--}}
                                {{--test--}}
                                {{--<small class="test-small">small </small>--}}
                            {{--</p>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="test-li">--}}
                        {{--<a class="test-link" role="button">--}}
                            {{--<p class="test-p">--}}
                                {{--test test test test--}}
                                {{--<small class="test-small">small smsall small</small>--}}
                            {{--</p>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="test-li">--}}
                        {{--<a class="test-link" role="button">--}}
                            {{--<p class="test-p">--}}
                                {{--test test test test--}}
                                {{--<small class="test-small">small smsall small</small>--}}
                            {{--</p>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-12">--}}
                {{--<div class="dropdown-container">--}}
                    {{--<div class="dropdown">--}}
                        {{--<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example--}}
                            {{--<span class="caret"></span></button>--}}
                        {{--<ul class="dropdown-menu">--}}
                            {{--<li><a role="button">HTML</a></li>--}}
                            {{--<li><a role="button">CSS</a></li>--}}
                            {{--<li><a role="button">JavaScript</a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--<div class="dropdown">--}}
                        {{--<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example--}}
                            {{--<span class="caret"></span></button>--}}
                        {{--<ul class="dropdown-menu">--}}
                            {{--<li><a role="button">HTML</a></li>--}}
                            {{--<li><a role="button">CSS</a></li>--}}
                            {{--<li><a role="button">JavaScript</a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--<div class="dropdown">--}}
                        {{--<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example--}}
                            {{--<span class="caret"></span></button>--}}
                        {{--<ul class="dropdown-menu">--}}
                            {{--<li><a role="button">HTML</a></li>--}}
                            {{--<li><a role="button">CSS</a></li>--}}
                            {{--<li><a role="button">JavaScript</a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--<div class="dropdown">--}}
                        {{--<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example--}}
                            {{--<span class="caret"></span></button>--}}
                        {{--<ul class="dropdown-menu">--}}
                            {{--<li><a role="button">HTML</a></li>--}}
                            {{--<li><a role="button">CSS</a></li>--}}
                            {{--<li><a role="button">JavaScript</a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="dropdown-link">--}}

                    {{--<a role="button" class="btn dropdown-show" style="border: 1px solid red;">--}}
                        {{--pokaż--}}
                    {{--</a>--}}
                    {{--<a role="button" class="btn dropdown-hide hidden" style="border: 1px solid red;">--}}
                        {{--ukryj--}}
                    {{--</a>--}}

                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--@endforeach--}}


    {{--{{ dd($products) }}--}}

    <div class="row">
        <div class="col-md-1">
            <div class="product-slider-left slider-nav">
                @for ($i = 0; $i < 6; $i++)
                <div class="product-slider-list">
                    <img src="{{asset('img/sliderPhoto/product'.$i.'.jpg')}}" alt="przykładowe zdjęcie produktu {{$i}}" class="product-slider-image img img-responsive">
                </div>
                @endfor
            </div>
        </div>
        <div class="col-md-7">
            <div class="slider-for">
                @for ($i = 0; $i < 6; $i++)
                    <div class="slider-item">
                        <img src="{{asset('img/sliderPhoto/product'.$i.'.jpg')}}" alt="przykladowe" class="img img-responsive">
                    </div>
                @endfor
            </div>
        </div>
        <div class="col-md-4">
            <section class="product-info">
                @foreach( $products as $product )
                <h1>{{ $product->name_product}}</h1>
                 <p> {{$categoryTitle}}</p>
                 <span> {{ number_format($product->price, 2, ',', ' ') }} zł</span>
                @endforeach
            </section>
            <hr>
            <div class="add-to-cart-section">
                <form>
                    <button id="addToCart" class="btn btn-info col-md-12">Dodaj do koszyka</button>
                </form>
            </div>
            <div class="links pull-right">
                <p class="text-right text-small">zapisz</p>
                <p class="text-right text-small">udostępnij</p>
            </div>
            <hr class="hr">
            <p class="text-left col-md-12">
                Bezpłatna standardowa dostawa dla posiadaczy konta NikePlus.
                Standardowa dostawa trwa 3–7 dni; przesyłki dostarczamy przez 5 dni w tygodniu.
                Aby skorzystać z dostawy następnego dnia, należy złożyć zamówienie do godziny 13:00 od poniedziałku do                  czwartku.
                Usługa „Kliknij i odbierz” jest dostępna w sklepach Nike i wielu innych dogodnych lokalizacjach.
                Zamówione produkty można zwrócić bezpłatnie i bez podania przyczyny w ciągu 30 dni.
                Obowiązują pewne wyjątki. Dowiedz się więcej o opcjach dostawy zamówień ze sklepu Nike.com i o zasadach                     dotyczących zwrotów.
            </p>
        </div>
    </div>
    <div class="row">
        <h3 class="title-sec-rec col-md-12"> PRODUKTY, które mogą ci się spodobać</h3>
        <section class="remocended-product-section">
            @for ($j = 0; $j < 3; $j++ )
                <div class="remocended-product">
                    <img src="{{asset('img/sliderPhoto/product'.$j.'jpg')}}" alt="rekomendowane" class="img img-responsive">
                    <hr>
                    <p class="title-recomaneded-product">tytuł produktu</p>
                    <span class="price-recomaneded-product"> cena produktu </span>
                </div>
            @endfor


        </section>
    </div>
@endsection

@section('script-js')
    {{-- scritpt only for edit product page--}}
    <script src="{{ asset('js/product.js') }}"></script>
@endsection