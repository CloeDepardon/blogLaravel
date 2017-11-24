@extends('layouts.app')
@section('content')

    <h3> Liste des catégories </h3>

@foreach($categories as $category)
        <p>This is category : {{ $category->label }}</p>
@endforeach

@endsection