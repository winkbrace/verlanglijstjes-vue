@extends('layout')

@section('content')
    <wish-list name="{{ $name }}" current-user-id="{{ Auth::user() ? Auth::user()->id : null }}"></wish-list>
@endsection
