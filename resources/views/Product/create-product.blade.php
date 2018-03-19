@extends('layouts.app')

@section('title','add your products')

@section('content')

<div class="row">
    <div class="col-md-9">

        {{ Form::open( array('route' => 'product.store')) }}
        {{--{{ Form::token() }}--}}
        <div class="form-check col-md-12">
        {{ Form::label('name_product', 'Podaj nazwe produktu:', array('class' => 'form-check-label')) }}
        {{ Form::text('name_product','' ,array('placeholder' => 'nazwa będzię wyświetlana jako główna nazwa produktu',
                                            'class' => 'form-control'))}}
        </div>
        <br>
        <div class="form-check col-md-12">
        {{ Form::label('price', 'Podaj cenę produktu:', array('class' => 'form-check-label')) }}
        {{ Form::number('price','' ,array('placeholder' => 'cene będzie można edytować w dowolnej chwili',
                                            'class' => 'form-control'))}}
        </div>
        <br>
        <p>Ustaw dostępność produktu</p>
        <div class="form-check col-md-2">
            {{ Form::label('productStatusTrue', 'Produkt dostępny: ', array('class' => 'form-check-label text-success')) }}
            {{ Form::radio('product_status', true, true, array('class' => 'form-check-input', 'id'=>'productStatusTrue'))}}
            <br>
        </div>
        <div class="form-check col-md-6">
            {{ Form::label('productStatusFalse', 'Produkt niedostępny: ', array('class' => 'form-check-label text-danger')) }}
            {{ Form::radio('product_status', false, false, array('class' => 'form-check-input', 'id' => 'productStatusFalse'))}}
        </div>
        <br>
        <p class="col-md-12">Ustaw możliwość darmowej dostawy</p>
        <div class="form-check col-md-4">
            {{ Form::label('freeShipmentTrue', 'Darmowa dostawa: ', array('class' => 'form-check-label text-success')) }}
            {{ Form::radio('free_shipment', true, true, array('class' => 'form-check-input', 'id' => 'freeShipmentTrue'))}}
        </div>
        <div class="form-check col-md-6">
            {{ Form::label('freeShipmentFalse', 'Produkt nie objęty darmową dostawą: ', array('class' => 'form-check-label text-danger')) }}
            {{ Form::radio('free_shipment', false, false, array('class' => 'form-check-input ', 'id' => 'freeShipmentFalse'))}}
        </div>

        <div class="form-check col-md-12">
        {{Form::submit('Dodaj', array('class' => 'btn btn-info'))}}
        </div>
        {{ Form::close() }}

    </div>
</div>
@endsection

@section('script-js')
    {{-- scritpt only for edit product page--}}
    <script src="{{ asset('js/product.js') }}"></script>
@endsection