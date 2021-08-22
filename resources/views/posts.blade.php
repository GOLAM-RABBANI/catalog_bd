@extends('master')
@section('content')
    <table class="table mt-5">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Category</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $key=>$post)
        <tr>
            <th scope="row">{{$key + $posts->firstItem()}}</th>
            <td>{{$post->product_name}}</td>
            <td>{{$post->price}}</td>
            <td>{{$post->category->name}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{ $posts->links('pagination::bootstrap-4') }}
@endsection
