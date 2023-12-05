@extends('Front_end/cs_index')
@section('index')  
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>new arrivals</h4>
              <h2>Toqopi Products</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <div class="filters-content">
                <div class="row grid">
                  @foreach($tampilproduk as $product)
                      <div class="col-lg-4 col-md-4 all des">
                        <div class="product-item">
                          <img src="{{ asset($product->image) }}">
                          <div class="down-content">
                            <h4>{{ ($product->nama) }}</h4>
                            <h4>Rp. {{ ($product->harga) }}</h4>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary detail-btn" data-toggle="modal" data-target="#myModal" data-id="{{ ($product->id) }}">
                              Details
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 id="product-nama"></h5>
                                  </div>
                                  <div class="modal-body">
                                    <p id="product-desc"></p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <a name="beli" class="btn btn-primary" href="{{ ($product->links) }}" role="button">Beli</a>
                          </div>
                        </div>
                      </div>
                  @endforeach
              </div>
          </div>
        </div>
      </div>  
    </div>
@endsection
