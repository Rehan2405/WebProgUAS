@extends('layouts.app')

@section('content')
<style>
    .Total{
        text-align: end;
    }
</style>
<div class="container">
    <div class="h1 text-start"> Cart</div>
    <div class="Total h2">
        Total: Rp {{ Cart::getTotal() }}
    </div>
    <div class="col">
        @foreach ($cartItems as $item)
        <div class="col-2 mb-3 order-1 mt-3 d-flex d-inline">
          <div class="body">
                  <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//95/MTA-2433389/freshbox_freshbox_melon_hijau_buah_-1-5_-_2_kg-_full01_o95o011g.jpg" class="" alt="groeries">
                  <div class="card-body">
                    <div class="d-flex d-inline gap-3">
                        <h5 class="card-title"><strong>{{ $item->name }}</strong></h5>
                      <p class="card-text w-full">Rp {{ $item->price }}</p></div>
                      
                  </div>
                    <br>
                    <form action="{{ route('cart.remove') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $item->id }}" name="id">
                        <div style="text-align: center">
                            <button class="px-4 py-2 text-white bg-red-600 text-center">Remove Item</button>
                        </div>
                    </form>
                    
          </div>
        </div>
        @endforeach
      </div>
      <div class="Total">
      <a href="/check" class="btn btn-outline-primary btn-lg" role="button">Check Out</a>
      </div>
      
</div>
@endsection
