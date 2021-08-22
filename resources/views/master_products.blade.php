@extends('welcome')
@section('content')
    <h3 class="text-uppercase text-center" style="color: #000;font-weight: bold">master products</h3>
    <br>
    <div class="infinite-scroll">
        <div class="container">
            <div class="row">
                @foreach($master_products as $master_product)
                    <div class="col-md-3">
                        <a href="#" data-target="#masterModal_{{$master_product->id}}" data-toggle="modal"
                           class="modal-view detail-link text-decoration-none text-muted">
                            <div class="card rounded-0" style="height: 20em; margin-bottom: 2em;">
                                <img class="card-img-top" style="height: 14em;" src="{{$master_product->imageUrls}}"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <h6 class="card-title">{{$master_product->productTitle}}</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="modal fade" id="masterModal_{{$master_product->id}}" tabindex="-1"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"
                                        id="exampleModalLabel">{{$master_product->productTitle}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="card">
                                        <img class="card-img-top img-fluid" style="height: 15em;"
                                             src="{{$master_product->imageUrls}}" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$master_product->productTitle}}</h5>
                                            <p class="card-text">{{$master_product->productDescription}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        {{ $master_products->links('pagination::bootstrap-4') }}
    </div>
@endsection
