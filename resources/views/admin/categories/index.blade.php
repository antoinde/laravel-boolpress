@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>ALL CATEGORIES</h1>
                <ul>
                    @foreach ($categories as $category)
                        <li>
                            <h5><strong>{{ $category->name }}</strong></h5> 
                            <form action="{{ route('admin.categories.destroy', $category->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button onclick="confirm('Are you sure? You really want to delete it?')" class="btn btn-danger" type="submit">Elimina</button>
                            </form>
                        </li>
                    @endforeach
                </ul>
                <a class="btn btn-primary" href="{{route('admin.categories.create')}}">Add a new category</a>
            </div>
        </div>
    </div>
@endsection 