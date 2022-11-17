@extends('layouts.dashboard')

@section('content')
<h1>TITOLO: {{ $post->title }}</h1>

<p>CONTENUTO: {{ $post->content }}</p>

@if ($post->category)

    <p>CATEGORIA: {{ $post->category->name }}</p>
@else
    <p>CATEGORIA: Nessuna categoria</p>
@endif


@endsection