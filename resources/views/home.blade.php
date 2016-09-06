@extends('app')


@section('content')
    <ul class="list-group">			
        @foreach($members as $member)
            <li class="list-group-item btn"><a class="btn-main color-{{ strtolower($member->name) }}" href="{{ url('/list/' . $member->name) }}">{{ $member->name }}</a></li>
        @endforeach		
    </ul>
@endsection
