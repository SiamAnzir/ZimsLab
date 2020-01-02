@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <br>
                    <a href="{{route('hardwareList')}}">Hardware Lists</a>
                    <br>
                    <a href="{{route('addHardwares')}}">Add Hardwares </a>
                    <br>
                    <a href="{{route('home')}}">Home</a>
                    <br>
                    <h1> Edit or Delete Category </h1>
                    <ul>
                        @foreach($categories as $category)
                            <li>
                                <h4> Category Name: {{$category->category_name}} </h4>
                                <h4> Category Description: {{$category->category_description}} </h4>

                                <form method="post" action="{{route('deleteCategory',[$category->id])}}">
                                @method('DELETE')
                                @csrf
                                <button type="submit">Delete</button>
                                </form>
                                <button><a href="{{route('editCategory',[$category->id])}}">Edit</a></button>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection