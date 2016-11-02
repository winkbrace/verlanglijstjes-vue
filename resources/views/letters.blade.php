@extends('layout')

@section('content')
    <ul class="list-group">
    @foreach ($letters as $name => $preference)
        <li class="list-group-item">{{ $name }}: {{ $preference }}</li>
    @endforeach
    </ul>
@endsection
