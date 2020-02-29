@extends('layouts.app')

@section('custom-styles')
    <link rel="stylesheet" href="{{asset('css/contact_table/style.css')}}">
@endsection

@section('content')
    <section class="details">
      @if (count($contacts) > 0)
        <div class="container contacts-table">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Messages</th>
                </tr>
              </thead>
              <tbody>
                <?php $ctr = 1 ?>
                @foreach ($contacts as $contact)
                  <tr>
                    <th scope="row">{{$ctr++}}</th>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->message}}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>

          <a href="/pdf" class="btn btn-success">Download as PDF</a>
          
        </div>
      @else
          <div class="container text-center mt-5">Nothing to show!</div>
      @endif
        
    </section>
@endsection