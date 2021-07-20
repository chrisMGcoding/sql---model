@extends('template.template')

@section('content')

    @foreach ($data as $item)
        <p>{{$item->nom}}</p>
    @endforeach

@endsection