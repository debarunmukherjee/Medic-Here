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
            <a href="#" class="btn btn-primary">Create Post</a>
        </div>
    </header>
    <section class="posts">
        @if (count($posts)>0)
            @foreach ($posts as $post)
                <div class="container post-item">
                    <h2>{{$post->title}}</h2>
                    <p class="mt3">{{$post->body}}<a href="" class="read-more">Read More</a></p>
                    <div class="row mt-3">
                        <div class="col-sm-6 text-center">
                            <span class="font-weight-bold">Created At: </span>{{$post->created_at}}
                        </div>
                        <div class="col-sm-6 text-center">
                            <span class="font-weight-bold">By: </span>Debarun Mukherjee
                        </div>
                    </div>
                </div>
            @endforeach
            
        @else
            No posts to display!
        @endif
    </section>
@endsection