@extends('layouts.dashboard')

@section('content')
<h1>TITOLO:</h1>
<h4> {{ $post->title }}</h4>

<h2>CONTENUTO:</h2>
<p> {{ $post->content }}</p>

@if ($post->category)

    <h3>CATEGORIA:</h3>
    <p> {{ $post->category->name }}</p>
@else
    <h3>CATEGORIA:</h3>
    <p>Nessuna categoria</p>
@endif


@endsection