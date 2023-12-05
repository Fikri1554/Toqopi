@extends('Front_end.cs_index')
@section('index')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <div class="container">
        <div class="col-lg-8 border p-3 main-section bg-white">
            <div class="row hedding m-0 pl-3 pt-0 pb-3">
                {{ ($product->nama) }}
            </div>
                <div class="row m-0">
                    <div class="col-lg-5 left-side-product-box pb-3">
                        <img src="{{ asset($product->image) }}">
                    </div>
                    <div class="col-l-5">
                        <div class="right-side-pro-detail border p-3 m-0">
                            <div class="row">
                                <div class="col-lg-5">
                                    <p class="m-0 p-0 price-pro">{{ ($product->desc) }}</p>
                                    <hr class="p-0 m-0">
                                </div>
                                <div class="col-lg-5 p-2 m-2">
                                    <h5>Rp. {{ ($product->harga) }}</h5>
                                    <hr class="m-0 pt-2 mt-2">
                                </div>
                                <div class="col-lg-5 m-3">
                                    <div class="row">
                                        <div class="col-lg-5 pb-2">
                                            <button onclick="goBack()" class="Btn btn-primary w-100">Kembali</button>
                                            <script>
                                                function goBack() {
                                                    window.history.back();
                                                }
                                            </script>
                                        </div>
                                        <div class="col-lg-5 pb-2">
                                            <a class="btn btn-success w-100" href="{{ ($product->links) }}" target="_blank" role="button">Beli</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
