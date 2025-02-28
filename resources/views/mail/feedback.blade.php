@extends('layouts.email')

@section('content')
    <p><strong>{{ $fullname }}</strong> has submitted feedback.</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Comment:</strong></p>
    <p>{{ $comment }}</p>
@endsection
