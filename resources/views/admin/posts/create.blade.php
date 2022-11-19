@extends('layouts.dashboard')

@section('content')
<h1>CREATE NEW POST</h1>

<div class="row">
    <div class="col-12">
        <a class="btn btn-primary" href="{{ route('admin.posts.index') }}">Back to posts</a>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <hr>
    </div>
</div>

<form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('POST')

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
            value="{{ old('title', '') }}">
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="category_id">Category</label>
        <select name="category_id">
            <option value="">--Seleziona--</option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
                
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" id="content" cols="30" rows="10"
            class="form-control @error('content') is-invalid @enderror">{{ old('content','') }}</textarea>
        @error('content')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <input type="submit" value="Save" class="btn btn-primary">
</form>

@endsection