@extends('Front_end/cs_index')
@section('contentproduk')
<br>
<div class="row col-md-12">
  @foreach ($tampilproduk as $product)
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <img src="{{ asset($product->image) }}" alt="{{ $product->nama }}" class="card-img-top">
        <div class="card-body">
          <p class="card-text">{{ $product->nama }}</p>
          <div class="d-flex justify-content-between align-items-center">
            <small class="text-muted">{{ $product->harga }}</small>
          </div>
          <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
          bu
        </div>
      </div>
    </div>
  @endforeach
</div>
           
@endsection