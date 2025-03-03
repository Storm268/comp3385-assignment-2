@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Feedback Form</h2>
    <form action="{{ url('/feedback/send') }}" method="POST">
        @csrf
        
        <div>
            <label for="fullname">Full Name (Required)</label>
            <input type="text" name="fullname" required>
        </div>

        <div>
            <label for="email">Email (Required)</label>
            <input type="email" name="email" required>
        </div>

        <div>
            <label for="comment">Comments (Required)</label>
            <textarea name="comment" required></textarea>
        </div>

        <button type="submit">Submit</button>
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
