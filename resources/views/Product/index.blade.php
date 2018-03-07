@extends('layouts.app')

@section('title','Product')

@section('content')
    @foreach($products as $product)
        <div class="row">
            <div class="col-md-12">
                    <h3 class="lead">Karta produtku: <b>{{$product->name_product}}</b></h3>
                    <h5>Kategoria: <a role="button">{{$categoryTitle}}</a></h5>
                    <hr>

            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="info-box">
                    <div class="info-box-section">
                        <div class="price-section" id="opac">
                            <p class="price text-center opacity-element">
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
                <hr>
                <div>
                    <h5 class="text-info text-left">Opis produktu: </h5>
                    <div class="text-left product-description hidden-md-down col-md-5">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id orci mattis, lobortis turpis nec, blandit ligula. Vivamus et purus at ex ornare auctor. Curabitur mattis leo mauris, non pretium tellus facilisis sit amet. Aliquam erat volutpat. Aenean nunc velit, semper et venenatis eu, tincidunt in augue. Fusce a varius turpis. Quisque aliquam cursus leo, at finibus leo commodo tincidunt. Suspendisse vel tellus odio.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id orci mattis, lobortis turpis nec, blandit ligula. Vivamus et purus at ex ornare auctor. Curabitur mattis leo mauris, non pretium tellus facilisis sit amet. Aliquam erat volutpat. Aenean nunc velit, semper et venenatis eu, tincidunt in augue. Fusce a varius turpis. Quisque aliquam cursus leo, at finibus leo commodo tincidunt. Suspendisse vel tellus odio.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id orci mattis, lobortis turpis nec, blandit ligula. Vivamus et purus at ex ornare auctor. Curabitur mattis leo mauris, non pretium tellus facilisis sit amet. Aliquam erat volutpat. Aenean nunc velit, semper et venenatis eu, tincidunt in augue. Fusce a varius turpis. Quisque aliquam cursus leo, at finibus leo commodo tincidunt. Suspendisse vel tellus odio.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id orci mattis, lobortis turpis nec, blandit ligula. Vivamus et purus at ex ornare auctor. Curabitur mattis leo mauris, non pretium tellus facilisis sit amet. Aliquam erat volutpat. Aenean nunc velit, semper et venenatis eu, tincidunt in augue. Fusce a varius turpis. Quisque aliquam cursus leo, at finibus leo commodo tincidunt. Suspendisse vel tellus odio.
                    </div>

                    <div class="more-info col-md-9">
                        <a role="button" class="text-info hidden-md-down">pokaż więcej...</a>
                    </div>
                    <div class="more-info-hidden hidden col-md-9">
                        <a role="button" class="text-info hidden-md-down">ukryj...</a>
                    </div>
                </div>
                <div>


                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <ul class="test-ul">
                    <li class="test-li active-li">
                        <a class="test-link" role="button">
                            <p class="test-p">
                                test
                                <small class="test-small">small </small>
                            </p>
                        </a>
                    </li>
                    <li class="test-li">
                        <a class="test-link" role="button">
                            <p class="test-p">
                                test
                                <small class="test-small">small </small>
                            </p>
                        </a>
                    </li>
                    <li class="test-li">
                        <a class="test-link" role="button">
                            <p class="test-p">
                                test test test test
                                <small class="test-small">small smsall small</small>
                            </p>
                        </a>
                    </li>
                    <li class="test-li">
                        <a class="test-link" role="button">
                            <p class="test-p">
                                test test test test
                                <small class="test-small">small smsall small</small>
                            </p>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="test-ul">
                    <li class="test-li active-li">
                        <a class="test-link" role="button">
                            <p class="test-p">
                                test
                                <small class="test-small">small </small>
                            </p>
                        </a>
                    </li>
                    <li class="test-li">
                        <a class="test-link" role="button">
                            <p class="test-p">
                                test
                                <small class="test-small">small </small>
                            </p>
                        </a>
                    </li>
                    <li class="test-li">
                        <a class="test-link" role="button">
                            <p class="test-p">
                                test test test test
                                <small class="test-small">small smsall small</small>
                            </p>
                        </a>
                    </li>
                    <li class="test-li">
                        <a class="test-link" role="button">
                            <p class="test-p">
                                test test test test
                                <small class="test-small">small smsall small</small>
                            </p>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="test-ul">
                    <li class="test-li active-li">
                        <a class="test-link" role="button">
                            <p class="test-p">
                                test
                                <small class="test-small">small </small>
                            </p>
                        </a>
                    </li>
                    <li class="test-li">
                        <a class="test-link" role="button">
                            <p class="test-p">
                                test
                                <small class="test-small">small </small>
                            </p>
                        </a>
                    </li>
                    <li class="test-li">
                        <a class="test-link" role="button">
                            <p class="test-p">
                                test test test test
                                <small class="test-small">small smsall small</small>
                            </p>
                        </a>
                    </li>
                    <li class="test-li">
                        <a class="test-link" role="button">
                            <p class="test-p">
                                test test test test
                                <small class="test-small">small smsall small</small>
                            </p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="dropdown-container">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a role="button">HTML</a></li>
                            <li><a role="button">CSS</a></li>
                            <li><a role="button">JavaScript</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a role="button">HTML</a></li>
                            <li><a role="button">CSS</a></li>
                            <li><a role="button">JavaScript</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a role="button">HTML</a></li>
                            <li><a role="button">CSS</a></li>
                            <li><a role="button">JavaScript</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a role="button">HTML</a></li>
                            <li><a role="button">CSS</a></li>
                            <li><a role="button">JavaScript</a></li>
                        </ul>
                    </div>
                </div>
                <div class="dropdown-link">

                    <a role="button" class="btn dropdown-show" style="border: 1px solid red;">
                        pokaż
                    </a>
                    <a role="button" class="btn dropdown-hide hidden" style="border: 1px solid red;">
                        ukryj
                    </a>

                </div>
            </div>

        </div>

    @endforeach
@endsection

@section('script-js')
    {{-- scritpt only for edit profile page--}}
    <script src="{{ asset('js/product.js') }}"></script>
@endsection