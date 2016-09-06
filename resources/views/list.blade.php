@extends('app')

@section('content')
    <ul class="list-group gifts">
        @foreach ($items as $item)
            <li class="list-group-item gift">
                {{ $item->description }}
                @if (! empty($item->link))
                    <a class="link" href="{{ $item->link }}" target="_blank">link</a>
                @endif
            </li>
        @endforeach
    </ul>
@endsection
