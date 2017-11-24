@extends('layouts.app')
@section('content')

    <h3> Création d'une catégorie </h3>


    <form class="form-horizontal" method="POST" action="{{ route('categoryStore') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('label') ? ' has-error' : '' }}">
            <label for="label" class="col-md-4 control-label"> Label </label>

            <div class="col-md-6">
                <input id="label" type="label" class="form-control" name="label" value="{{ old('label') }}" required autofocus>

                @if ($errors->has('label'))
                    <span class="help-block">
                        <strong>{{ $errors->first('label') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Add
                </button>
            </div>
        </div>
    </form>

@endsection