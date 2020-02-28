@extends('layouts.app')

@section('custom-styles')
    <link rel="stylesheet" href="{{asset('css/create_post/style.css')}}">
@endsection

@section('content')
    <div class="errors">
        @include('inc.messages')
    </div>
    <section class="create-post">
        <div class="container">
            <form action="/posts" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title :</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Post Title">
                </div>
                <div class="form-group mt-5">
                    <label for="body">Body :</label>
                    <textarea name="body" class="form-control" id="body" rows="5" placeholder="Post body ..."></textarea>
                </div>
                <div class="container mt-3">
                    <button class="btn btn-primary">Create Post</button>
                </div>
            </form>
        </div>
        
    </section>
@endsection