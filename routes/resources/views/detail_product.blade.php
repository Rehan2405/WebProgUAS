@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="card justify-content-center mt-5" style="max-width: 800px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{ $welcome->image }}" class="img-fluid rounded-start" alt="banana">
              </div>
              <div class="col-md-8">
                <div class="body">
                  <h4 class="title"><strong>{{ $welcome->name }}</strong></h4>
                  <p class="text">Rp {{ $welcome->price }}</p>
                  <hr>
                  <h5 class="title"><strong>Product Detail</strong></h5>
                  <p class="text">{{ $welcome->desc }}</p>
                  <hr style="border-width:10px">
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data" class="mt-3">
                        @csrf
                        <input type="hidden" value="{{ $welcome->id }}" name="id">
                        <input type="hidden" value="{{ $welcome->name }}" name="name">
                        <input type="hidden" value="{{ $welcome->price }}" name="price">
                        <input type="hidden" value="{{ $welcome->image }}"  name="image">
                        <input type="hidden" value="1" name="quantity">
                        <a href="/welcome" class="px-4 py-2 text-white bg-red-800 rounded">Back</a>
                        <button class="px-4 py-2 text-white bg-blue-800 rounded">Add To Cart</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection
