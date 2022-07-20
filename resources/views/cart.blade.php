@include('Navbar.navbar')
@extends('Dashboard.main')
@section('container')
    <div class="row justify-content-center text-start vh-100 pt-3">
        <div class="col col-md-11">
            <h6 class="">Your Cart</h6>
            {{-- Card Cart --}}
            {{-- {{ dd($carts) }} --}}
            @foreach ($carts as $cart)
                <div class="d-flex border rounded mb-1" style="height: 5rem">
                    <div class="d-flex" style="width: 16rem;height: 5rem;">
                        <a href="gamedetail/{{ $cart->game->id }}"><img src="/assets/{{ $cart->game->thumbnail }}"
                                alt="" style="width: 100%;height:100%"></a>
                    </div>
                    <div class="container mt-1 d-flex flex-column justify-content-center">
                        <h6 class="text-start">{{ $cart->game->title }}</h6>
                        <small>{{ $cart->game->category->name }}</small>
                    </div>
                    <div class="container text-end mt-1">
                        <h6 class="">IDR {{ $cart->game->price }}</h6>
                        <a href="/cart/remove/{{ $cart->id }}" class="btn btn-danger">Remove</a>
                    </div>
                </div>
            @endforeach
            {{-- Total Harga --}}
            <div class="d-flex border rounded d-flex align-items-center justify-content-between mb-3" style="height: 5rem">
                <div class="container d-flex flex-column">
                    <h6 class="text-start">Total</h6>
                    <small>{{ $count }} game(s)</small>
                </div>
                <div class="container text-end d-flex align-items-center justify-content-end">
                    <h6 class="">IDR {{ $total }}</h6>
                </div>
            </div>
            {{-- Button Checkout --}}
            <div class="text-end">
                <a href="/cart/checkout" class="btn btn-dark">Checkout</a>
            </div>
        </div>

    </div>
@endsection
