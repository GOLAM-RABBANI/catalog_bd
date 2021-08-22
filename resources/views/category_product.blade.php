@extends('welcome')
@section('content')
    <h3 class="text-center" style="color: #e04688;">{{$posts[0]->category->name}}</h3>
    <div class="infinite-scroll">
        <div class="container">
            <div class="row my-4">
                @foreach($posts as $post)
                    <div class="col-md-3 mb-4">
                        <div class="card rounded-0" style="height: 9em;">
                            <div class="card-body">
                                <h5 class="card-title">{{$post->product_name}}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">BDT {{$post->price}}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{ $posts->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection
