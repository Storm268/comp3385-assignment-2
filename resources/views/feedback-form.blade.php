@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Feedback Form</h2>
    <form method="POST" action="/feedback/send">
        @csrf
        <div class="mb-3 row">
            <div class="col-md-6">
                <label for="fullname" class="form-label">Full Name:</label>
                <input type="text" class="form-control" id="fullname" name="fullname" required>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
        </div>
        <div class="mb-3">
            <label for="comment" class="form-label">Comment:</label>
            <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send Feedback</button>
    </form>
</div>
@endsection
