@extends('layouts.dashboard')

@section('content')
    <h1>Edit Post</h1>
    <form action="{{ route('admin.posts.update', ['post' => $post->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                value="{{ old('title', $post->title) }}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="category_id">Categoria:</label>
            <select name="category_id">
                <option value="">--Seleziona--</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}"
                    {{ $category->id == old('category_id', $post->category_id) ? 'selected' : '' }}>
                    {{ $category->name }}</option>
                    
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" cols="30" rows="10"
                class="form-control @error('content') is-invalid @enderror">{{ old('content', $post->content) }}</textarea>
            @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- TAGS  --}}
        @if($errors->any())
            <div class="form-group">
                <div><label>Tags</label></div>
        
                @foreach($tags as $tag)
        
                <input
                {{  in_array($tag->id, old('tags', [])) ? 'checked' : '' }}
                type="checkbox" name="tags[]" value="{{$tag->id}}">
                <label for="tags[]">{{ $tag->name }}</label>
                
                @endforeach
                
                @error('tags')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        @else
            <div class="form-group">
                <div><label>Tags</label></div>
        
                @foreach($tags as $tag)
        
                <input
                {{ $post->tags->contains($tag) ? 'checked' : '' }}
                type="checkbox" name="tags[]" value="{{$tag->id}}">
                <label for="tags[]">{{ $tag->name }}</label>
                
                @endforeach
                
                @error('tags')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        @endif

        
        {{-- END-TAGS  --}}


        <input type="submit" value="Save" class="btn btn-primary">
        <a class="btn btn-primary" href="{{ route('admin.posts.index') }}">Back to posts</a>
    </form>
@endsection