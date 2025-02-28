@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Feedback Form</h2>
    <form action="{{ url('/feedback/send') }}" method="POST">
        @csrf
        <label for="fullname">Full Name:</label>
        <input type="text" name="fullname" required>
    
        <label for="email">Email:</label>
        <input type="email" name="email" required>
    
        <label for="comment">Comment:</label>
        <textarea name="comment" required></textarea>
    
        <button type="submit">Send Feedback</button>
    </form>    

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
@endsection
