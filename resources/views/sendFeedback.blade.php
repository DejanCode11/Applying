@extends('navbar')
@section('title', 'Send feedback')
@section('content')
<div class="form-container">
    <form  action="{{url('/sendFeedback')}}" method="POST" class="form" >
    @csrf
    <label class="label" for="name">Username:</label>
    <input class="input" name="name" type="text">
    @error('name')
    <p style="color:red;">Enter a username</p>
    @enderror
    <label class="label" for="email">Email:</label>
    <input class="input" name="email" type="email">
    @error('name')
    <p style="color:red;">Enter a email</p>
    @enderror
    <label class="label" for="feedback">Your Feedback:</label>
    <textarea  id="" name="feedback" cols="20" rows="8"></textarea>
    @error('name')
    <p style="color:red;">Enter Feedback</p>
    @enderror
    <input type="submit" class="submit" name="submit" id="">
    </form>
</div>
@endsection
<script>

</script>