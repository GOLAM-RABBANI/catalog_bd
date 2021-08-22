@extends('master')
@section('content')
    <table class="table mt-5">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Product Title</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
        </tr>
        </thead>
        <tbody>
        @foreach($master_products as $key=>$master_product)
        <tr>
            <th scope="row">{{$key + $master_products->firstItem()}}</th>
            <td>{{$master_product->productTitle}}</td>
            <td>{{$master_product->productDescription}}</td>
            <td><img src="{{$master_product->imageUrls}}" alt="image" width="80" height="50"></td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{ $master_products->links('pagination::bootstrap-4') }}
@endsection
