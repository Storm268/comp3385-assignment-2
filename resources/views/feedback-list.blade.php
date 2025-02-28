@extends('layouts.app')

@section('content')
    <h2>Submitted Feedback</h2>

    @foreach ($feedbacks as $feedback)
        <div class="feedback-item">
            <p><strong>{{ $feedback->fullname }}</strong> ({{ $feedback->email }})</p>
            <p>{{ $feedback->comment }}</p>
            <hr>
        </div>
    @endforeach
@endsection
