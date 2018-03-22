@extends('layouts.app')

@section('title','Product')

@section('content')

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
            @foreach( $products as $product )
            <section class="product-info">
                <h1>{{ $product->name_product}}</h1>
                 <p> {{$categoryTitle}}</p>
                {{--{{dd($product->previous_price)}}--}}
                    <span class="price-section">
                        {{--{{dd(intval($product->price))}}--}}
                        @if( intval($product->previous_price) !== intval($product->price) )
                            <span class="previous-price">poprzednia cena: <s>{{ number_format(intval($product->previous_price), 2, ',', ' ') }} zł</s></span>
                        @endif
                        <span class="price">cena: {{ number_format($product->price, 2, ',', ' ') }} zł</span>
                        @if( intval($product->final_price > 0 ))
                        <span class="final-price text-success">zyskujesz: {{ number_format(intval($product->final_price), 2, ',', ' ') }} zł</span>
                        @endif
                    </span>


            </section>
            <hr>
            <div class="add-to-cart-section">
                <span class="accceblity text-info">Produkt: {{$product->product_status == '1' ? 'dostępny' : 'niedostępny'}}</span>
                <form>
                    <a id="addToCart" role="button" href="{{route('orders.test',$product->id)}}" class="btn btn-info col-md-12">Dodaj do koszyka</a>
                </form>
            </div>
            <div class="links pull-right">
                <p class="text-right text-small">zapisz</p>
                <p class="text-right text-small">udostępnij</p>
            </div>
            <div class="seller pull-left">
                <p class="seller-text">wystawiono przez: <span class="text-info">{{ $sellerName }}</span> </p>
                <hr class="hr">
            </div>
            <p class="text-left col-md-12">
                Bezpłatna standardowa dostawa dla posiadaczy konta NikePlus.
                Standardowa dostawa trwa 3–7 dni; przesyłki dostarczamy przez 5 dni w tygodniu.
                Aby skorzystać z dostawy następnego dnia, należy złożyć zamówienie do godziny 13:00 od poniedziałku do                  czwartku.
                Usługa „Kliknij i odbierz” jest dostępna w sklepach Nike i wielu innych dogodnych lokalizacjach.
                Zamówione produkty można zwrócić bezpłatnie i bez podania przyczyny w ciągu 30 dni.
                Obowiązują pewne wyjątki. Dowiedz się więcej o opcjach dostawy zamówień ze sklepu Nike.com i o zasadach                     dotyczących zwrotów.
            </p>
            @endforeach
        </div>
    </div>
    <div class="row">
        <h3 class="title-sec-rec col-md-12"> PRODUKTY, które mogą ci się spodobać</h3>
        <section class="remocended-product-section">
                @foreach($recomendedProducts as $recomendedProduct)
                <div class="remocended-product">
                    <img src="{{asset('img/sliderPhoto/product'.$recomendedProduct->id.'.jpg')}}" alt="rekomendowane" class="img img-responsive">
                    <hr>
                    <p class="title-recomaneded-product text-center">{{$recomendedProduct->name_product}}</p>
                    <span class="price-recomaneded-product text-center"> {{ number_format(intval($recomendedProduct->price), 2, ',', ' ') }} zł</span>
                    <a href="{{route('product.index',$recomendedProduct->id)}}">
                        sprawdź
                    </a>
                </div>
                @endforeach
        </section>
    </div>
@endsection

@section('script-js')
    {{-- scritpt only for edit product page--}}
    <script src="{{ asset('js/product.js') }}"></script>
@endsection