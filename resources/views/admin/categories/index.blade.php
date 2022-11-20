@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>ALL CATEGORIES</h1>
                <ul>
                    @foreach ($categories as $category)
                        <li><h4><strong>{{ $category->name }}</strong></h4></li>
                    @endforeach
                </ul>
                <a class="btn btn-primary" href="{{route('admin.categories.create')}}">Add a new category</a>
            </div>
        </div>
    </div>
@endsection 