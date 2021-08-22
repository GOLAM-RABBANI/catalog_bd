@extends('welcome')
@section('content')
    <div class="infinite-scroll">
        @foreach($categories as $category)
            <div style="margin-bottom: 1.5em;">
                <div class="d-flex justify-content-between" style="padding: 0 1em;">
                    <h3 class="text-uppercase" style="color: #000;font-weight: bold">{{$category->name}}</h3>
                    <p class="float-right text-capitalize"><a style="color: #e04688"
                                                              href="category_product/{{$category->id}}">View all
                            ({{$category->posts->count()}})</a></p>
                </div>

                <div class="container">
                    <div class="row">
                        <?php $post_count = 0;?>
                        @foreach($category->posts as $post)
                            <?php if ($post_count == 4)
                                continue;
                            $post_count++;
                            ?>
                            <div class="col-md-3">
                                <div class="card rounded-0" style="height: 9em;">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$post->product_name}}</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">BDT {{$post->price}}</h6>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
        {{ $categories->links('pagination::bootstrap-4') }}
    </div>
@endsection
