@extends('master')
@section('content')
<section class="content" style="margin-top: 7em;">

    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
            <div class="small-box dashbox dashbox-info  bg-white">
                <div class="inner">
                    <h3><span class="count-number">{{$total_products}}</span></h3>
                    <p>Total Product</p>
                </div>
                <div class="icon">
                    <img src="{{asset('images/products.png')}}" class="img img-responsive">
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
            <div class="small-box dashbox dashbox-green bg-white">
                <div class="inner">
                    <h3><span class="count-number">{{$total_categories}}</span></h3>
                    <p>Total Category</p>
                </div>
                <div class="icon">
                    <img src="{{asset('images/invoice.png')}}" class="img img-responsive">
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
            <div class="small-box dashbox dashbox-blue bg-white">
                <div class="inner">
                    <h3><span class="count-number">{{$total_master_products}}</span></h3>
                    <p>Master Products</p>
                </div>
                <div class="icon">
                    <img src="{{asset('images/add-product.png')}}" class="img img-responsive bg-danger">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection