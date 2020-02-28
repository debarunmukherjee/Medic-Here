@extends('layouts.app')

@section('custom-styles')
    <link rel="stylesheet" href="{{asset('css/individual_post/style.css')}}">
@endsection

@section('content')
    <div class="container post-container">
        <h1 class=" text-center">{{$post->title}}</h1>
        
        <div class="container mt-5">
            {{$post->body}}
        </div>
        <hr>
        <div class="row mt-4">
            <div class="col-6"><span class="font-weight-bold">Created at: </span>{{$post->created_at}}</div>
            <div class="col-6 text-right"><span class="font-weight-bold">Author: </span>Debarun Mukherjee</div>
        </div>
    </div>
@endsection