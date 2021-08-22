@extends('layouts.app')

@section('content')
    <h5 class="text-center">Total Product {{ $posts->total() }}</h5>
    <div class="container">
    <div class="row justify-content-center">
        @foreach($posts as $post)
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="{{$post->image}}" class="card-img-top" alt="image" style="height: 18em;">
                <div class="card-body">
                    <h5 class="card-title">{{$post->product_name}}</h5>
                    <div class="d-flex justify-content-between">
                        <h6 class="card-text">BDT {{$post->price}}</h6>
                        <h6 class="card-text">{{$post->quantity}} {{$post->unit}}</h6>
                    </div>
                    <p class="card-text">{{$post->category}}</p>
                    <p class="card-text">{{$post->description}}</p>
                </div>
            </div>
        </div>
        @endforeach
            {{ $posts->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection
