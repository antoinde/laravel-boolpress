@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Create a new Category</h1>
                <form action="{{ route('admin.categories.store') }}" method="POST">
                    @csrf

                    <label for="name">Enter a new category:</label>
                    <input type="text" name="name" value="{{ old('name', '') }}">
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <button class="btn btn-primary" type="submit">Save</button>
                </form>
                
                <a class="btn btn-primary" href="{{route('admin.categories.index')}}">Return to categories</a>
            </div>
        </div>
    </div>
@endsection 