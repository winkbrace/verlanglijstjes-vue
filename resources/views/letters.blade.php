@extends('layout')

@section('content')
    <ul class="list-group">
    @foreach ($letters as $owner => $preference)
        <li class="list-group-item">
            <span style="display: inline-block; width: 80px;">{{ $owner }}:</span> {{ $preference }}
        </li>
    @endforeach
    </ul>
@endsection
