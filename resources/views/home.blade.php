@extends('layouts.app')

@section('content')
    <div class="container product-grid">
        @foreach($products as $product)
            @if($loop->iteration == 1)
                <div class="row product-row">
                    @endif
                    <div class="col-md-3 product">
                        <img src="{{ asset('images/'.$product->image) }}" alt="{{$product->name}}">
                        <span class="product-name">{{ $product->name }}</span>
                        <p>{{ $product-> description }}</p>
                        <span class="product-price">{{ $product-> price }}€</span>
                        @if($product->type == 2)
                            <a href="/product/{{$product->ean }}" role="button" class="btn btn-info btn-md">
                                <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                            </a>
                        @else
                            <a href="/add/{{$product->ean }}" role="button" class="btn btn-info btn-md">
                                <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                            </a>
                        @endif
                    </div>
                    @if($loop->iteration % 4 == 0)
                </div>
                <div class="row product-row">
            @endif
        @endforeach
     </div>
    <div class="pagination"> {{ $products->links() }} </div>
@endsection