    @extends('navbar')
    @section('title', 'feedback')
    @section('content')
    <h1 class="title">Feedbacks</h1>
    @foreach($feedbacks as $feedback)
    <div class="container">
      <h2 class="name">Username:{{$feedback['name']}}</h2>
      <h3 class="email">Email:{{$feedback['email']}}</h3>
      <h5 class="time">Created:{{$feedback['created_at']}}</h5>
      <p class="paragraph"><span class="desc-comment">Comment:</span><br/>{{$feedback['feedback']}}</p>
    </div>
    {{-- <form action={{url('feedback.destroy'), $feedbacks}} method="post">
      @csrf
      @method('DELETE')
      <button type="submit">delete</button>
    </form> --}}
    @endforeach
    @endsection
