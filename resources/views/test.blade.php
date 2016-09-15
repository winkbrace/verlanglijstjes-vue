@extends('layout')

@section('content')
<form>
    <div data-role="rangeslider">
        <label for="range-10a">Rangeslider:</label>
        <input name="range-10a" id="range-10a" min="0" max="10" step=".1" value="2.6" type="range">
        <label for="range-10b">Rangeslider:</label>
        <input name="range-10b" id="range-10b" min="0" max="10" step=".1" value="5.4" type="range">
    </div>
</form>
@endsection
