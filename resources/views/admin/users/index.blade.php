@extends('layouts.dashboard')

@section('content')
<h1>USERS (admin)</h1>
    @foreach ($users as $user)
        <div style="
        border: 2px solid black;
        padding: 10px;
        display: flex;
        column-gap: 40px;
        ">
            <span><strong>ID:</strong> {{ $user->id }}</span>
            <span><strong>NAME:</strong> {{ $user->name }}</span>
            <span><strong>EMAIL:</strong> {{ $user->email }}</span>
            <span><strong>PASSWORD:</strong> {{ $user->password }}</span>
        </div>
    @endforeach
@endsection
