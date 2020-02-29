@extends('layouts.app')

@section('custom-styles')
    <link rel="stylesheet" href="{{asset('css/blog/style.css')}}">
@endsection

@section('content')
    <header class>
        <h1>
            Daily health blog
        </h1>
        <div class="container text-center mt-4">
            <a href="posts/create" class="btn btn-primary">Create Post</a>
        </div>
    </header>
    <div class="errors">
        @include('inc.messages')
    </div>
    <div class="container mt-4">
        <div class="dropdown">
            <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-sort-amount-up"></i> Sort By
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="/posts"><i class="far fa-clock"></i> Date</a>
              <a class="dropdown-item" href="/posts?sortBy=rating"><i  style="color: rgb(255, 145, 0);" class="fas fa-star"></i> Rating</a>
            </div>
        </div>
    </div>
    <section class="posts">
        @if (count($posts)>0)
            @foreach ($posts as $post)
                <div class="container post-item">
                    <h2>{{$post->title}}</h2>
                    <p class="mt3">{{implode(' ', array_slice(explode(' ', $post->body), 0, 50))}}<a href="/posts/{{$post->id}}" class="read-more">Read More</a></p>
                    <hr class="w-25 mt-3 mb-2 mr-auto ml-0">
                    <div class="row mt-3">
                        <div class="col-4"><span class="font-weight-bold">Created at: </span>{{$post->created_at}}</div>
                        <div class="col-4 text-center">
                            <span class="font-weight-bold">Rating: </span>{{$post->avg_rating}} <i class="fas fa-star"></i> 
                        </div>
                        <div class="col-4 text-right"><span class="font-weight-bold">By: </span>{{$post->author}}</div>
                    </div>
                </div>
            @endforeach
            <div class="container">
                {{$posts->links()}}
            </div>
            
        @else
            No posts to display!
        @endif
    </section>
@endsection

@section('page-scripts')
    <script>
        $(document).ready(function() {
            var $star_rating = $('.star-rating .fa-star');

            var SetRatingStar = function() {
                return $star_rating.each(function() {
                    if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
                    return $(this).removeClass('far').addClass('fas');
                    } else {
                    return $(this).removeClass('fas').addClass('far');
                    }
                });
            };

            SetRatingStar();
        });
    </script>
@endsection