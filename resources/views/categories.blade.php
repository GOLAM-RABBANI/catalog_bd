@extends('master')
@section('content')
    <table class="table mt-5">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $key=>$category)
        <tr>
            <th scope="row">{{$key + $categories->firstItem()}}</th>
            <td>{{$category->name}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{ $categories->links('pagination::bootstrap-4') }}
@endsection
