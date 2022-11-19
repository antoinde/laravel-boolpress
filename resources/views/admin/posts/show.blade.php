@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h1>POST</h1></div>

                    <div class="card-body">
                        <h4><strong> TITOLO:</strong></h4>
                        <p> {{ $post->title }}</p>

                        <h4><strong>CONTENUTO:</strong> </h4>
                        <p> {{ $post->content }}</p>

                        @if ($post->category)
                            <h4><strong>CATEGORIA:</strong></h4>
                            <p> {{ $post->category->name }}</p>
                        @else
                            <h4><strong>CATEGORIA:</strong></h4>
                            <p>Nessuna categoria</p>
                        @endif


                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <a class="btn btn-primary" href="{{ route('admin.posts.index') }}">Back to posts</a>
            </div>
        </div>
    </div>
@endsection
