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
            <div class="col-4"><span class="font-weight-bold">Created at: </span>{{$post->created_at}}</div>
            <div class="col-4 text-center">
                @if (Auth::user())
                <span class="font-weight-bold">Rate: </span>
                <div class="star-rating d-inline-block">
                    <i class="far fa-star" data-rating="1"></i>
                    <i class="far fa-star" data-rating="2"></i>
                    <i class="far fa-star" data-rating="3"></i>
                    <i class="far fa-star" data-rating="4"></i>
                    <i class="far fa-star" data-rating="5"></i>
                    <input type="hidden" name="whatever1" class="rating-value" value="{{$post->rating}}">
                </div>
                @else
                    <div class="alert alert-warning" role="alert">
                        You must be logged in to rate a post.
                    </div>
                @endif
            </div>
            <div class="col-4 text-right"><span class="font-weight-bold">Author: </span>{{$post->author}}</div>
        </div>
        
    </div>
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

            $star_rating.on('click', function() {
                $star_rating.siblings('input.rating-value').val($(this).data('rating'));
                SetRatingStar();

                var val = $('input.rating-value').val();
                
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: '/rate',
                    type: 'POST',
                    data: {
                        'value' : val,
                        'post_id' : {{$post->id}}
                    },
                    dataType: 'JSON',
                    success: function (data) { 
                        if(data.status == 'error')
                        {
                            alert('Oops! An error occured.');
                        }
                    }
                });
            });

            SetRatingStar();
        });
    </script>
@endsection