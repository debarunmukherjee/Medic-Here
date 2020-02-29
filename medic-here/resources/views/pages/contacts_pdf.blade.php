<div class="container text-center mt-5 mb-5">{{$title}}</div>
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