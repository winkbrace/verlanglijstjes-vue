@extends('layout')

@section('content')
    <div class="row form-container">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="wish" class="col-md-4 control-label">Cadeau</label>

                <div class="col-md-6">
                    <input id="wish" type="text" class="form-control" name="wish" value="{{ old('wish') }}" required autofocus>

                    @if ($errors->has('wish'))
                        <span class="help-block">
                            <strong>{{ $errors->first('wish') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('link') ? ' has-error' : '' }}">
                <label for="link" class="col-md-4 control-label">Link</label>

                <div class="col-md-6">
                    <input id="link" type="url" class="form-control" name="link">

                    @if ($errors->has('link'))
                        <span class="help-block">
                            <strong>{{ $errors->first('link') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-8 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Toevoegen
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
